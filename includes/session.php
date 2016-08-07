<?php 

// store just user_id in session

class Session {

	private $logged_id = false;
	public $user_id; // if it's logged in
	public $message;

	function __construct(){
		session_start();
		$this->check_message();
		$this->check_login();
	}

	public function is_logged_in(){
		//
		return $this->logged_id;
	}

	public function login($user) {
		// database should find user based on username/password
		if($user){
			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->logged_id = true;
		}
	}

	public function logout() {
		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->logged_id = false;
	}

	public function message($message=""){
		if(!empty($message)) {
			$_SESSION['message'] = $message; // important
			return true;
		} else {
			// we're pooled message, so we can set it to ''
			$_SESSION['message'] = '';
			return $this->message;

		}
	}

	private function check_login() {
		if(isset($_SESSION['user_id'])) {
			$this->user_id = $_SESSION['user_id'];
			$this->logged_id = true;
		} else {
			unset($this->user_id);
			$this->logged_id=false;
		}
	}

	private function check_message() {
		if(isset($_SESSION['message'])) {
			$this->message = $_SESSION['message'];
		} else {
			$this->message = "";
		}
	}

}

$session = new Session();

// declare this variable so it's available 
$message = $session->message();
?>