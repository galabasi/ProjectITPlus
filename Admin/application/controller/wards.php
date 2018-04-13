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
class Wards extends Controller
{   
    protected $table_name = "tbl_ward";
    protected $key_word = "id_ward";
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        $wards = $this->model->getList($this->table_name);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/wards/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function addWard()
    {
        $this->setAdd();
        $provinces = $this->model->getList("tbl_province");
        require APP . 'view/_templates/header.php';
        require APP . 'view/wards/add.php';
        require APP . 'view/_templates/footer.php';

    }
    public function setAdd(){
        if(isset($_POST["addNew"])){
            $this->model->addNew($this->table_name, $_POST);
            header('location: ' . URL . 'wards/index');
        }
    }
    public function deleteWard($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'wards/index');
    }
}
?>