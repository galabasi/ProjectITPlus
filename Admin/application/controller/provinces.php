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
class Provinces extends Controller
{   
    protected $table_name = "tbl_province";
    protected $key_word = "id_province";
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        $provinces = $this->model->getList($this->table_name);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/provinces/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addProvince()
    {
        $this->setAdd();
        require APP . 'view/_templates/header.php';
        require APP . 'view/provinces/add.php';
        require APP . 'view/_templates/footer.php';

    }
    public function setAdd(){
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'provinces/index');
        }
    }
    public function deleteProvince($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'provinces/index');
    }
}
?>