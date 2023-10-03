<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->library(['session','upload']);

	}

	public function index()
	{
	          $userData = array(); 
         
        // Get status and user info from session 
        $oauthStatus = $this->session->userdata('oauth_status'); 
        $sessUserData = $this->session->userdata('userData'); 
         
        if(isset($oauthStatus) && $oauthStatus == 'verified'){ 
            // Get the user info from session 
            $userData = $sessUserData; 
        }elseif((isset($_GET["oauth_init"]) && $_GET["oauth_init"] == 1) || (isset($_GET['oauth_token']) && isset($_GET['oauth_verifier'])) || (isset($_GET['code']) && isset($_GET['state']))){ 
             
            // Authenticate with LinkedIn 
            if($this->linkedin->authenticate()){ 
                 
                // Get the user account info 
                $userInfo = $this->linkedin->getUserInfo(); 
                 
                // Preparing data for database insertion 
                $userData = array(); 
                $userData['oauth_uid']  = !empty($userInfo['account']->id)?$userInfo['account']->id:''; 
                $userData['first_name'] = !empty($userInfo['account']->firstName->localized->en_US)?$userInfo['account']->firstName->localized->en_US:''; 
                $userData['last_name']  = !empty($userInfo['account']->lastName->localized->en_US)?$userInfo['account']->lastName->localized->en_US:''; 
                $userData['email']      = !empty($userInfo['email']->elements[0]->{'handle~'}->emailAddress)?$userInfo['email']->elements[0]->{'handle~'}->emailAddress:''; 
                $userData['picture']    = !empty($userInfo['account']->profilePicture->{'displayImage~'}->elements[0]->identifiers[0]->identifier)?$userInfo['account']->profilePicture->{'displayImage~'}->elements[0]->identifiers[0]->identifier:''; 
                $userData['link']       = 'https://www.linkedin.com/'; 
         
                // Insert or update user data to the database 
                $userData['oauth_provider'] = 'linkedin'; 
                $userID = $this->user->checkUser($userData); 
                 
                // Store status and user profile info into session 
                $this->session->set_userdata('oauth_status','verified'); 
                $this->session->set_userdata('userData',$userData); 
                 
                // Redirect the user back to the same page 
                redirect('/user_authentication'); 
 
            }else{ 
                 $data['error_msg'] = 'Error connecting to LinkedIn! try again later! <br/>'.$this->linkedin->client->error; 
            } 
        }elseif(isset($_REQUEST["oauth_problem"]) && $_REQUEST["oauth_problem"] <> ""){ 
            $data['error_msg'] = $_GET["oauth_problem"]; 
        } 
         
        $data['userData'] = $userData; 
        $data['oauthURL'] = base_url().$this->config->item('linkedin_redirect_url').'?oauth_init=1'; 
         
        $this->load->view('login.php',$data);
	}

    public function login_authentication()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = 'password="'.md5($password).'" and email="'.$username.'"';
		$result = $this->AuthModel->getById($where,'user_information');
        if(!empty($result)){
            $this->session->set_userdata('user', $result->email);
            $this->session->set_userdata('user_type', $result->user_type);
            $this->session->set_userdata('user_name', $result->name);
            redirect("home");
            
		}else{
            $this->session->set_flashdata('login_failed', 'You have entered an invalid username or password!');
            redirect("login");
		}
    }

    public function isexist_email()
    {
        $username = $this->input->post('email');
        $where='email="'.$username.'"';
        $emailresult = $this->AuthModel->getById($where,'user_information');
        if(isset($emailresult->id)){
            $response=array('status'=>true,'message'=>'Email address already exists.');
            echo json_encode($response);exit; 
        }
        echo json_encode(array('status'=>false));exit;

    }

    public function sign_up(){
        $this->load->view('registration.php');
    }

    public function registration(){
	    $this->load->view('components/header.php');
		$this->load->view('registration.php');
		$this->load->view('components/footer.php');   
	}
    
    public function register_user()
    {

                $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=> $this->input->post('email'),
                    'company_title'=> $this->input->post('companytitle'),
                    'user_type'=> $this->input->post('user_type'),
                    'password'=> md5( $this->input->post('password')),
                    'created_at'=> date('Y-m-d H:i:s')
                );
                
             
                $user_id = $this->AuthModel->insert($data,'user_information');
                $data['id'] = $user_id;
                if(!empty($data)){
                redirect('login');
                }else{
                redirect('register');
                }

            
    }
    


    public function dashboard()
    {
        $data['users'] = $this->AuthModel->get_all_users();
        $this->load->view('dashboard.php',$data);	
    }

    public function delete()
    {   
        $user_id = $this->input->post('user_id');
        $is_file_deleted = $this->delete_images($user_id);

        if($is_file_deleted){
            $this->AuthModel->delete($user_id,'user_information');
            $this->session->set_flashdata('delete_user', 'delete record successfully');
            redirect('dashboard');
        }
        redirect('dashboard');
        
    }

    public function fetchuserDataForEdit()
    {
        $user_id = $this->input->post('user_id');
        $user_data = $this->AuthModel->fetch_user_data_using_user_Id($user_id);
        echo json_encode($user_data);
    }

    private function delete_images($user_id){
        $user_data = $this->AuthModel->fetch_user_data_using_user_Id($user_id);
        if(isset($user_data->profile) && !empty($user_data->profile)){
            $file_location = 'upload/'.$user_data->profile;
            if(file_exists($file_location)){
                if (unlink($file_location)) {
                    return true;
                }
            }
           
        }
        return false;
    }

    public function update_user_data(){

        $user_id = $this->input->post('id');
        $data = array(
            'name'=>$this->input->post('name'),
            'phone'=>$this->input->post('phone'),
            'city'=>$this->input->post('city'),
            'designation'=>$this->input->post('designation'),
            'address'=> $this->input->post('address'),
            'email'=> $this->input->post('email'),
            'updated_at'=> date('Y-m-d H:i:s')
        );

        $is_data_updated = $this->AuthModel->update($this->input->post('id'), $data,'user_information');

        if($is_data_updated){
            
            $is_file_selected = $is_file_deleted = false;
            if (!empty($_FILES['profile_picture']['name'])) {
                $is_file_selected = true;
                $is_file_deleted = $this->delete_images($user_id);
            }  

            $is_file_uploded = false;
            if($is_file_selected && $is_file_deleted){
                $config['upload_path'] = './upload';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['file_name'] = $this->input->post('name')."_profile_picture";
                $this->upload->initialize($config);
                $is_file_uploded = $this->upload->do_upload('profile_picture');
                $imageData = $this->upload->data(); 
                if($is_file_uploded){
                    $this->AuthModel->update($user_id, ['profile' => $imageData['file_name']],'user_information');
                }
                $this->session->set_flashdata('update_user', 'update record successfully!');
            }
            $this->session->set_flashdata('update_user', 'update record successfully!');
            redirect('dashboard');

        }
        $this->session->set_flashdata('update_user_fail', 'update record unsuccessfull!');
        redirect('dashboard');
            
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
