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
            $sql = "INSERT INTO ".$table. " ($field) VALUES($val)";
            $query = $this->db->prepare($sql);
            $query->execute();
       }
   }
    public function update($table, $key_word, $id, $data){
        if(is_array($data)){
            $val = "";
            $i = 0;
            foreach ($data as $key => $value) {
                if($key != "update"){
                    $i++;
                    if($i == 1){
                        $val .= $key." = '".$value."'";
                    } else{
                        $val .= ", ".$key." = '".$value."'";
                    }
                }
            }
        }
        $sql = "UPDATE $table";
        $sql .= " SET ".$val;
        $sql .= " WHERE ".$key_word."= ".$id;
        $query = $this->db->prepare($sql);
        $query->execute();
    }
    public function getListByIdCate($id){
        $sql = "SELECT p.name_product,p.price,p.description,p.id_product,p.id_category,i.url_image FROM tbl_product AS p, tbl_image as i WHERE id_category=$id and  i.id_product = p.id_product
";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
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

    public function laySP($id){
        $sql = "SELECT p.id_product, p.name_product, p.id_category,p.price,p.sale,p.id_brand,i.url_image,i.url_image,b.name_brand,c.name_category,p.description FROM tbl_product AS p,tbl_brand as b,tbl_image AS i, tbl_category AS c WHERE p.id_product = $id and  i.id_product = p.id_product and p.id_brand = b.id_brand";
        $query = $this->db->prepare($sql);
        $query->execute();
        /*return $sql;*/
        return $query->fetch();
    }
    public function getImg($id){
        $sql = "SELECT * FROM tbl_image WHERE id_product =  $id ";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    /*public function getBrand($id){
        $sql = "SELECT * FROM tbl_brand WHERE id_brand = $id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }*/
    public function getAmount($table,$column)
    {
        $sql = "SELECT COUNT($column) AS Among FROM $table";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->Among;
    }
      public function getListById($table, $key_word, $id)
    {
        $sql = "SELECT * FROM $table WHERE $key_word = $id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
