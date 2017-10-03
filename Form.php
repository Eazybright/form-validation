  <?php
	class Form extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model( 'user_model');
			$this->load->helper(array('form', 'url'));
			$this->load->library('session');
		}
		//if already logged in go to dashboard, else login page
		public function index(){
			if ((isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)){
				redirect('form/dashboard');
			}
			redirect('login');
		}
		//signup method
		public function signup(){
			
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			
			
			//rules to become a member
			$this->form_validation->set_rules('firstname', 'firstname', 'trim|required|min_length[3]|max_length[14]');
			$this->form_validation->set_rules('lastname', 'lastname', 'trim|required|min_length[2]|max_length[14]');
			$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[6]|is_unique[user.username]');
			$this->form_validation->set_rules('sex', 'Sex', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
			$this->form_validation->set_rules('passconf', 'password confirmation', 
			'trim|required|matches[password]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
			
			//if user didn't validate, go to signup page
			if($this->form_validation->run() == FALSE){ 
						$this->load->view('my_login/myform');
			}else{
				//passing details to database
				$user_details = array(
				'firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'username' => $_POST['username'],
				'password' => password_hash($_POST['password'],PASSWORD_DEFAULT),//password_hashing
				'email' => $_POST['email'],
				'sex' => $_POST['sex'],
				);
				//if user validae,signup is successful
				if($this->user_model->register($user_details)){
					$this->load->view('my_login/formsuccess');
					
				}else{
					$this->load->view('my_login/myform');
					
				}
			}
		}
	//get user details from the database
	public function test(){
		
		var_dump($this->user_model->get_user_id_from_username(''));
	}
	//login page 
	public function login(){
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false){
			redirect('form/dashboard');
		}
				$this->load->library('form_validation');
		
				$this->form_validation->set_rules('username', 'username','trim|required');
				$this->form_validation->set_rules('password', 'Password', 
				'trim|required|min_length[6]');
	//login for user
		if($this->form_validation->run() == FALSE){
			$this->load->view('my_login/login');
		}else{
			$username=$_POST['username'];
			$password= $_POST['password'];
			
		if ($this->user_model->resolve_login($username, $password)){
			
			$user = $this->user_model->get_user_from_username($username);
			$_SESSION['user_id'] = $user->id;
			$_SESSION['username'] = $user->username;
			$_SESSION['email'] = $user->email;
			$_SESSION['logged_in'] = true;
			$this->load->view('my_login/dashboard');
			
		}else{
			$this->load->view('my_login/login_error');
		}
	}
	}
	
	//user home page
	public function dashboard(){
		
		if (isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
			redirect('form/login');
		}
		$this->load->view('my_login/dashboard');
		}
	//logout user account
	public function logout(){
		if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false){
			redirect('form/login');
		}
		$this->session->sess_destroy();
		redirect('form/login');
	}
	
}
?>