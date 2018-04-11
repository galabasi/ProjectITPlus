<?php
class Provinces extends Controller
{   
    protected $table_name = "tbl_province";
    protected $key = "id_province";
    public function index()
    {
        $provinces = $this->model->getList($this->table_name);
        require APP . 'view/_templates/header.php';
        require APP . 'view/provinces/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>