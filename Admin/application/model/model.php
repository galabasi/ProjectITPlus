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
            // echo $sql;
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
        // echo $sql;
        $query = $this->db->prepare($sql);
        $query->execute();
    }


}
