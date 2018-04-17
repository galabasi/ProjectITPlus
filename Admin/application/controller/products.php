<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Products extends Controller
{   
    protected $table_name = "tbl_product";
    protected $key_word = "id_product";
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        $products = $this->model->getList($this->table_name);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addProduct()
    {
        $this->setAdd();
        $categorys = $this->model->getList("tbl_category");
        $brands = $this->model->getList("tbl_brand");
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/add.php';
        require APP . 'view/_templates/footer.php';

    }
    public function setAdd(){
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'products/index');
        }
    }
    public function deleteProduct($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'products/index');
    }

    public function editProduct($id)
    {
        if (isset($id)) {
            $product = $this->model->getListById($this->table_name, $this->key_word, $id);
            $categorys = $this->model->getList("tbl_category");
            $brands = $this->model->getList("tbl_brand");
            $this->setEdit($id);
            
            $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
            require APP . 'view/products/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'products/index');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'products/index');
        }
    }  
}
?>