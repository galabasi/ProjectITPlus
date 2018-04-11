<?php


class Register extends Controller
{
	protected $table_name  = "tbl_category";
    public function index()
    {
    	$category = $this->model->getAll($this->table_name);
        // load views/*
        require APP . 'view/templates/header.php';
        require APP . 'view/User/register.php';
        require APP . 'view/templates/footer.php';
    }
}