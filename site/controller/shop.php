<?php
class Shop extends Controller
{
    protected $key = "id_image";
    protected $table_name = "tbl_category";
    public function getList(){
        /*$id= $_POST['id'];*/
        $this->model->getListByIdCate($_POST['id']);
        
    }
    public function index()
    {
        $category = $this->model->getAll($this->table_name);
        if (isset($_POST['id'])) {
            /*unset($shop);
            echo "<pre>";
            print_r($_POST);*/
            $shop = $this->getList();
            
        }else{
            $shop = $this->model->getShop(9);

        }
    	
        // load views/*
        require APP . 'view/templates/header.php';
        require APP . 'view/Shop/index.php';
        require APP . 'view/templates/footer.php';
    }
}
