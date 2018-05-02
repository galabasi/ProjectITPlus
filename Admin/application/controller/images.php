<?php

class Images extends Controller
{   
    protected $table_name = "tbl_image";
    protected $key_word = "id_image";

    public function index()
    {
        $products = array();
        foreach($images as $image){
            $product = $this->model->getListById("tbl_product", "id_product", $image->id_product);
            $products[] = $product[0];
        }
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/images/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addImage()
    {
        $this->setAdd();
        $provinces = $this->model->getList("tbl_province");
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/add.php';
        require APP . 'view/_templates/footer.php';

    }

    public function setAdd(){
        if(isset($_POST["addNew"])){
            $_POST['password'] = md5($_POST["password"]);
            $temTime = strtotime($_POST["birthday"]);
            $_POST["birthday"] = date("Y-m-d",$temTime);
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'users/index');
        }
    } 
    public function deleteImage($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'images/index');
    } 
}
