<?php

class Model
{

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Không thể kết nối tới database');
        }
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

     public function getShop($limit)
    {
        $sql = "SELECT p.*,img.url_image FROM tbl_product AS p INNER JOIN tbl_image AS img ON p.id_product = img.id_product  ORDER BY rand() ASC limit ".$limit;
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getAll($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function delete($table,$column,$value)
    {
        $sql = "DELETE FROM $table WHERE $column = :value";
        $query = $this->db->prepare($sql);
        $parameters = array(':value' => $value);
        $query->execute($parameters);
    }

    public function login($mail,$password){
        $sql = "SELECT * FROM tbl_user WHERE mail_user = '$mail' and password = '$password' LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getOne($table,$column,$value)
    {
        $sql = "SELECT * FROM $table WHERE $column = :value LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':value' => $value);


        $query->execute($parameters);
        return $query->fetch();
    }

    public function update($table, $data){
       if(is_array($data)){
           $field="";
           $val="";
           $i=0;
            foreach ($data as $key => $value) {
               $i++;
                if($key !="update"){
                    if($i==1){
                        $field .=$key;
                        $val .="'".$value."'";
                   }else{
                       $field .= ','.$key;
                        $val .=",'".$value."'";
                    }
                }
            }
            /*$sql = "UPDATE ".$table." SET ($field) VALUES($val)";*/
            $query = $this->db->prepare($sql);
            $query->execute();
       }
   }
    public function getAmount($table,$column)
    {
        $sql = "SELECT COUNT($column) AS Among FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->Among;
    }
}
