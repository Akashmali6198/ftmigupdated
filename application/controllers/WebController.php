<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->helper("login_check_helper");
        $this->check_login();
        
    }

    private function check_login(){
        if(current_url() != base_url()){
            if(empty($this->session->userdata('user'))){
                redirect("login"); 
            }
        }
        
       
    }
	public function index()
	{
		$this->load->view('components/header.php');
		$this->load->view('landing_page.php');
// 		$this->load->view('components/footer.php');
	}
	
    public function home()
    {
    $this->load->view('components/header.php');
    $this->load->view('index.php');
    $this->load->view('components/footer.php');
    }

	public function tv()
	{
		$this->load->view('components/header.php');
		$this->load->view('tv.php');
		$this->load->view('components/footer.php');
	}
	public function event()
	{
	
		$this->load->view('components/header.php');
		$this->load->view('event.php');
		$this->load->view('components/footer.php');
	}
	public function speakers()
	{
		$this->load->view('components/header.php');
		$this->load->view('speakers.php');
		$this->load->view('components/footer.php');
	}
	public function companie()
	{
		$this->load->view('components/header.php');
		$this->load->view('companie.php');
		$this->load->view('components/footer.php');
	}
	
	public function investor_dashboard()
	{
		$this->load->view('components/header.php');
		$this->load->view('investor_dashboard.php');
		$this->load->view('components/footer.php');
	}
	
	public function issuer_dashboard()
	{
		$this->load->view('components/header.php');
		$this->load->view('issuer_dashboard.php');
		$this->load->view('components/footer.php');
	}
	
	public function StoreEvent(){

		print_r($this->input->file());
		  $data = array(  
                        'name'     => $this->input->post('name'),  
                        'meaning'  => $this->input->post('meaning'),  
                        'gender'   => $this->input->post('gender'),  
                        'religion' => $this->input->post('religion')  
                        );  
        //insert data into database table.  
        $this->db->insert('baby',$data);  
  
	}

	public function Conferences(){
		$this->load->view('components/header.php');
			$ch = curl_init();

	// Set cURL options
	$url = 'https://www.bigmarker.com/api/v1/conferences/'; // Replace with your API endpoint
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	// Set custom headers
	$headers = array(
		'API-KEY:3586a842542d906ed95f',
		'Content-Type: application/json',
		// Add more headers as needed
	);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$response = curl_exec($ch);
	
	// Check for cURL errors
	if (curl_errno($ch)) {
		echo 'cURL Error: ' . curl_error($ch);
	} else {
		// Process and display the response

//	print('<pre>'.print_r(json_decode($response ,true),true).'</pre>');

	$data = json_decode($response ,true);
	}
	
	// Close cURL session
	curl_close($ch);

		$this->load->view('Conferences.php',$data);
		
		$this->load->view('components/footer.php');

	}
	public function Chat(){
		$this->load->view('components/header.php');
		$this->load->view('Chat.php');
		$this->load->view('components/footer.php');

	}
	public function Magzine(){
		$this->load->view('components/header.php');
		$this->load->view('Magazine.php');
		$this->load->view('components/footer.php');

	}
	public function Summits(){
		$this->load->view('components/header.php');
		$this->load->view('Summits.php');
		$this->load->view('components/footer.php');

	}
	public function Strategy(){
		$this->load->view('components/header.php');
		$this->load->view('Strategy.php');
		$this->load->view('components/footer.php');

	}
	public function Ixo(){
		$this->load->view('components/header.php');
		$this->load->view('IXO.php');
		$this->load->view('components/footer.php');

	}
	public function Ads(){
		$this->load->view('components/header.php');
		$this->load->view('Ads.php');
		$this->load->view('components/footer.php');

	}
	public function Creative(){
		$this->load->view('components/header.php');
		$this->load->view('Creative.php');
		$this->load->view('components/footer.php');

	}
	public function Analytics(){
		$this->load->view('components/header.php');
		$this->load->view('Analytics.php');
		$this->load->view('components/footer.php');

	}
	public function Web(){
		$this->load->view('components/header.php');
		$this->load->view('Web.php');
		$this->load->view('components/footer.php');

	}
	
	public function Social(){
	    $this->load->view('components/header.php');
		$this->load->view('social.php');
		$this->load->view('components/footer.php');   
	}
	public function browse_events(){
	    $this->load->view('components/header.php');
		$this->load->view('browse-events.php');
		$this->load->view('components/footer.php');   
	}
	
	public function upcoming_webinar(){
	    $this->load->view('components/header.php');
		$this->load->view('upcoming_webinar.php');
		$this->load->view('components/footer.php');   
	}
	public function Twitter(){
	    $this->load->view('components/header.php');
		$this->load->view('twitter.php');
		$this->load->view('components/footer.php');   
	}
	public function About(){
	    $this->load->view('components/header.php');
		$this->load->view('about.php');
		$this->load->view('components/footer.php');   
	}
	public function Invest(){
	    $this->load->view('components/header.php');
		$this->load->view('invest.php');
		$this->load->view('components/footer.php');   
	}
	public function Raise(){
	    $this->load->view('components/header.php');
		$this->load->view('raise.php');
		$this->load->view('components/footer.php');   
	}
	public function Host(){
	    $this->load->view('components/header.php');
		$this->load->view('host.php');
		$this->load->view('components/footer.php');   
	}
	public function Demo(){
	    $this->load->view('components/header.php');
		$this->load->view('demo.php');
		$this->load->view('components/footer.php');   
	}
	public function Pricing(){
	    $this->load->view('components/header.php');
		$this->load->view('pricing.php');
		$this->load->view('components/footer.php');   
	}
	public function Security(){
	    $this->load->view('components/header.php');
		$this->load->view('security.php');
		$this->load->view('components/footer.php');   
	}

	public function create_event(){
	    $this->load->view('components/header.php');
		$this->load->view('create_event.php');
		$this->load->view('components/footer.php');   
	}
	
    public function sponsors(){
        $this->load->view('components/header.php');
        $this->load->view('sponser.php');
        $this->load->view('components/footer.php');   
    }

	public function create_conference(){
		$title = $this->input->post('title');
		$date = $this->input->post('date');
		$time = $this->input->post('time');

		$ch = curl_init();
		$url = 'https://www.bigmarker.com/api/v1/conferences'; // Replace with your API endpoint
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$headers = array( 
		'API-KEY:3586a842542d906ed95f',
		'Content-Type: application/json',
		);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$post_data = array(
		'channel_id' => 'follow-the-money-investor-gr',
		'title' => $title,
		'start_time' => $date." ".$time,
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
		$response = curl_exec($ch);
		if (curl_errno($ch)) {
		echo 'cURL Error: ' . curl_error($ch);
		} else {
		$confirence_data = json_decode($response);
        redirect("Conferences");
		}
		curl_close($ch);
	}

	public function send_event_confernce_mail(){
		$client_mail = $this->input->post('client_mail');
		$conf_title = $this->input->post('conf_title');
		$conf_date = $this->input->post('conf_date');
		$conf_id = $this->input->post('conf_id');
		
	    $conf_link = "https://www.bigmarker.com/conferences/".$conf_id."/bigroom";
		// the message
		$msg = "Dear ".$client_mail.",Thank you for registering for ".$conf_title."! Your participation is confirmed. We look forward to welcoming you on ".$conf_date.". Stay tuned for more updates!/n Link:".$conf_link;

		// use wordwrap() if lines are longer than 70 characters
		$msg = wordwrap($msg);

		// send email
		if(mail($client_mail,"ftmig conference",$msg)){
			redirect("Conferences");
		}else{
			// redirect("Conferences");
			echo "fail";
		}
	}
	
    public function send_event_event_mail(){
    $client_mail = $this->input->post('client_mail');
    $conf_title = $this->input->post('conf_title');
    $conf_date = $this->input->post('conf_date');
    
    $conf_link = "https://www.bigmarker.com/conferences/".$conf_id."/bigroom";
    // the message
    $msg = "Dear ".$client_mail.",Thank you for registering for ".$conf_title."! Your participation is confirmed. We look forward to welcoming you on ".$conf_date.". Stay tuned for more updates!";
    
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg);
    
    // send email
    if(mail($client_mail,"ftmig conference",$msg)){
    redirect("browse_events");
    }else{
    // redirect("Conferences");
    echo "fail";
    }
    }
    
    public function send_email_with_carl(){
 
    $client_mail = $this->input->post('client_mail');

    $conf_link = "https://www.bigmarker.com/conferences/".$conf_id."/bigroom";
    // the message
    // $msg = "Dear ".$client_mail.",Thank you for registering for ".$conf_title."! Your participation is confirmed. We look forward to welcoming you on ".$conf_date.". Stay tuned for more updates!";
    $msg = "BOOK A CONSULT TO DISCUSS HOW YOUR COMPANY CAN REACH MORE INVESTORS MAIL";
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg);
    
    // send email
    if(mail("gokul7013@0gmail.com","ftmig conference",$msg)){
    redirect("home");
    }else{
    // redirect("Conferences");
    echo "fail";
    }
    }
	
	public function Conference_list(){

	
	$ch = curl_init();

	// Set cURL options
	$url = 'https://www.bigmarker.com/api/v1/conferences/'; // Replace with your API endpoint
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	// Set custom headers
	$headers = array(
		'API-KEY:3586a842542d906ed95f',
		'Content-Type: application/json',
		// Add more headers as needed
	);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$response = curl_exec($ch);
	
	// Check for cURL errors
	if (curl_errno($ch)) {
		echo 'cURL Error: ' . curl_error($ch);
	} else {
		// Process and display the response

//	print('<pre>'.print_r(json_decode($response ,true),true).'</pre>');

	$data = json_decode($response ,true);
	}
	
	// Close cURL session
	curl_close($ch);
}

}
