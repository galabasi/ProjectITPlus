<?php
class Login extends Controller
{
    protected $table_name1 = "tbl_category";
    public function getUser(){
        $a = "";
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
        if($email != "" && $password != ""){
            $login = $this->model->login($email,$password);
            if($login){
                $_SESSION['user'] = $login[0];
                header("Location:".URL);
            }else return $a="0";
            
        }
    }
    }
    public function index()
    {
        $a="";
        $category = $this->model->getAll($this->table_name1);
        if(!isset($_SESSION['user'])){
            $a= $this->getUser();
        }
        require APP . 'view/templates/header.php';
        require APP . 'view/User/login.php';
        require APP . 'view/templates/footer.php';
    }
}
