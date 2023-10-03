<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

    class AuthModel extends CI_Model
    {
        public function __construct(){
          $this->load->database();
        }

        public function getById($where,$tablename){
            $this->db->select('*');
            $this->db->from($tablename);
            if(!empty($where)){
                $this->db->where($where);
            }
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->row();
            }
            return [];
            
        }

        public function insert($data, $tablename){
            $data = $this->security->xss_clean($data);
            $insert = [];
            foreach($data as $key =>$value){
                $insert[$key] = $this->db->escape_str($value);
            }
            $query = $this->db->insert($tablename,$data);
            if($query){
              return $this->db->insert_id();  
            }
            return null;   
        }

        public function get_all_users(){
            $this->db->from('user_information');
            $query = $this->db->get();
            return $query->result_array();  
        }

        public function delete($id, $tablename){
            $this -> db -> where('id', $id);
            $this -> db -> delete($tablename);
            return true;
        }

        public function fetch_user_data_using_user_Id($user_id){
            $this->db->where('id', $user_id);
            $this->db->from('user_information');
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->row();
            }
            return [];

        }

        public function update($id, $data, $tablename)
        {
            $this->db->where('id', $id);
            $this->db->update($tablename, $data);

            return true;
        }

    }
?>