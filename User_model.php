<?php
class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		
	} 
	//get user details into the database
	public function get_user($user_id){
		$this->db->where('id', $user_id);
		return $this->db->get('eazy')->row();
		
	}
	//get user's username from database
	public function get_user_from_username($username){
		$this->db->where('username', $username);
		return $this->db->get('eazy')->row();
		
	}
	//get user's password from database
	public function get_user_from_password($password){
		$this->db->where('password', $password);
		return $this->db->get('eazy')->row();
		
	}
	//register user details into the database
	public function register($data){
		return $this->db->insert('eazy', $data);
	} 
	//verify user password before login
	public function resolve_login($username, $password){
		
		$this->db->where('username', $username);
		
		$hash = $this->db->get('eazy')->row('password');
		
		return password_verify($password, $hash);
	}
	//get id from user
	public function get_user_id_from_username($username){
		$this->db->where('username', $username);
		$this->db->select('id');
		return $this->db->get('eazy')->row();
	}
	//user session login
	public function set_session($firstname, $lastname, $username, $email){
		
		$sql = "SELECT id FROM eazy WHERE email = '". $email ."' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();
		
		$sess_data = array(
					'user_id' => $row->user_id,
					'firstname' => $firstname,
					'lastname' => $lastname,
					'username' => $username,
					'email' => $email,
					'logged_in' => 0
					);
			$this->session->set_userdata($sess_data);
	}
	}

?>