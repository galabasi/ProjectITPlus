<?php 
CLass Login extends Controller{

	protected $table_name = "tbl_user";
    protected $key_word = "mail_user";

	function index(){
		session_start();
        ob_start(); 
	  	if(isset($_SESSION["isLogin"])){
	  		return header("location:".URL."home");	
	  	}
	  	$this->setLogin();
	  	require APP . 'view/_templates/login.php';
	}
	function setLogin(){
		if(isset($_POST["btnLogin"])){
			$mail_user = $_POST["mail_user"];
			$password = md5($_POST["password"]);
			$user = $this->model->getListById($this->table_name, $this->key_word, $mail_user);
			// print_r($user);
			if(isset($user[0])){
				if($user[0]->mail_user != ""){
					if($user[0]->password == $password){
						$_SESSION["isLogin"] = $user;
						return header("location:".URL."home");
					}
				}
			}
		}
	}
}
?>