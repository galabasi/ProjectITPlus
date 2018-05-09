<?php
class Account extends Controller
{
    public function index()
    {
        // $a="";
        // $category = $this->model->getAll($this->table_name1);
        // if(!isset($_SESSION['user'])){
        //     $a= $this->getUser();
        // }
        require APP . 'view/templates/header.php';
        require APP . 'view/account/index.php';
        require APP . 'view/templates/footer.php';
    }
}
