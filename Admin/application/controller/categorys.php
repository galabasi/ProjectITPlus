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
class Categorys extends Controller
{   
    protected $table_name = "tbl_category";
    protected $key_word = "id_category";
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        $categorys = $this->model->getList($this->table_name);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/categorys/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addCategory()
    {
        $this->setAdd();
        $categorys = $this->model->getList($this->table_name);
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/categorys/add.php';
        require APP . 'view/_templates/footer.php';

    }
    public function setAdd(){
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'categorys/index');
        }
    }
    public function deleteCategory($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'categorys/index');
    }

    public function editCategory($id)
    {
        if (isset($id)) {
            $category = $this->model->getListById($this->table_name, $this->key_word, $id);
            $parents = $this->model->getList("tbl_category");
            $this->setEdit($id);
            
            $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
            require APP . 'view/categorys/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'categorys/index');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'categorys/index');
        }
    } 
}
?>