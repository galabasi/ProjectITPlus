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
class Users extends Controller
{   
    protected $table_name = "tbl_user";
    protected $key_word = "id_user";
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
//______________________________________________________________________________    
    public function index()
    {
        $users = $this->model->getList($this->table_name);

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
        require APP . 'view/users/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addUser()
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

    public function editUser($id)
    {
        if (isset($id)) {
            $user = $this->model->getListById($this->table_name, $this->key_word, $id);
            $provinces = $this->model->getList("tbl_province");

            $temTime = strtotime($user[0]->birthday);
            $user[0]->birthday = date("d-m-Y",$temTime);

            $this->setEdit($id);
            
            $this->model->sessionStart();
        require APP . 'view/_templates/header.php';
            require APP . 'view/users/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'users/index');
        }
    }

    public function setEdit($id){
        if(isset($_POST["updateList"])){
            $_POST['password'] = md5($_POST["password"]);
            $temTime = strtotime($_POST["birthday"]);
            $_POST["birthday"] = date("Y-m-d",$temTime);
            $this->model->updateList($this->table_name, $this->key_word, $id, $_POST);
            header('location: ' . URL . 'users/index');
        }
    }    
    public function deleteUser($id)
    {
        if (isset($id)) {
            $this->model->deleteById($this->table_name, $this->key_word, $id);
        }

        header('location: ' . URL . 'users/index');
    }


    public function getDistrict(){
?>
        <option value="">---Chọn---</option>
<?php
            if (isset($_POST["id"]) && isset($_POST["tmp"])) {
                $id=$_POST["id"];
                $tmp = $_POST["tmp"];
                $districts = $this->model->getListById("tbl_district", "id_province", $id);
                foreach ($districts as $district) {
                    $selected = "";
                    if($district->id_district == $tmp){
                        $selected = "selected";
                    }
?>
                <option <?php echo $selected ?> value="<?php echo htmlspecialchars($district->id_district, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($district->name_district, ENT_QUOTES, 'UTF-8'); ?></option>
<?php       
            }       
        }
    }


    public function getWard(){
?>
        <option value="">---Chọn---</option>
<?php
            if (isset($_POST["id"]) && isset($_POST["tmp"])) {
                $id=$_POST["id"];
                $tmp = $_POST["tmp"];
                $wards = $this->model->getListById("tbl_ward", "id_district", $id);
                foreach ($wards as $ward) {
                    $selected = "";
                    if($ward->id_ward == $tmp){
                        $selected = "selected";
                    }
?>
                <option <?php echo $selected ?> value="<?php echo htmlspecialchars($ward->id_ward, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($ward->name_ward, ENT_QUOTES, 'UTF-8'); ?></option>
<?php       
            }       
        }
    }    


//______________________________________________________________________________
    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addSong()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_song"])) {
            // do addSong() in model/model.php
            $this->model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }

    /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteSong($song_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($song_id)) {
            // do deleteSong() in model/model.php
            $this->model->deleteSong($song_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'songs/index');
    }

     /**
     * ACTION: editSong
     * This method handles what happens when you move to http://yourproject/songs/editsong
     * @param int $song_id Id of the to-edit song
     */
         /**
     * ACTION: updateSong
     * This method handles what happens when you move to http://yourproject/songs/updatesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a song" form on songs/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateSong()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_song"])) {
            // do updateSong() from model/model.php
            $this->model->updateSong($_POST["artist"], $_POST["track"],  $_POST["link"], $_POST['song_id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $amount_of_songs = $this->model->getAmountOfSongs();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_songs;
    }

}
