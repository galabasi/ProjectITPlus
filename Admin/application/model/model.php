<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */

 //_____________________________________________________
    public function getList($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getListById($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = $id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function addNew($table, $data){
        if(is_array($data)){
            $field="";
            $val="";
            $i=0;
            foreach ($data as $key => $value) {
                $i++;
                if($key !="addNew"){
                    if($i==1){
                        $field .=$key;
                        $val .="'".$value."'";
                    }else{
                        $field .= ','.$key;
                        $val .=",'".$value."'";
                    }
                }
            }
            $sql = "INSERT INTO ".$table." ($field) VALUES($val)";
            $query = $this->db->prepare($sql);
            $query->execute();
        }
    }
    public function updateList($table, $key_word, $id, $data){
        if(is_array($data)){
            $val = "";
            $i = 0;
            // $tmp = 1;
            foreach ($data as $key => $value) {
                if($key != "updateList"){
                    $i++;
                    // if($key == "status"){
                    //     $tmp = 0;
                    // }
                    if($i == 1){
                        $val .= $key." = '".$value."'";
                    } else{
                        $val .= ", ".$key." = '".$value."'";
                    }
                }
            }
            // if($tmp == 1){
            //     $val .= ", status = '0'";
            // }
        }
        $sql = "UPDATE $table";
        $sql .= " SET ".$val;
        $sql .= " WHERE ".$key_word."= ".$id;
        $query = $this->db->prepare($sql);
        $query->execute();
    }
    public function deleteById($table, $key_word, $id)
    {
        $sql = "DELETE FROM $table WHERE $key_word = $id";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

 //_____________________________________________________  
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($user_id)
    {
        $sql = "SELECT * FROM tbl_user WHERE id = :user_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':user_id' => $user_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }


}
