<?php
class Login extends Controller
{
    protected $table_name1 = "tbl_category";
    
    public function getUser(){
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
        if($email != "" && $password != ""){
            $login = $this->model->login($email,$password);
            $_SESSION['user'] = $login[0];
            echo APP."view/home";/*
            header("Location:".APP."view/home");*/
            // echo URL;
        }
    }
    }
    public function index()
    {
        $category = $this->model->getAll($this->table_name1);
        if(isset($_SESSION['user'])){
            /*session_destroy();*/
            // echo "OK";
            /*header("Location:home/index");*/
        } else {
            $this->getUser();
        }
        require APP . 'view/templates/header.php';
        require APP . 'view/User/login.php';
        require APP . 'view/templates/footer.php';
    }
}
