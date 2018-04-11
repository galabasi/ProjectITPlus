<?php 
  for ($i=100; $i < 300; $i++) { 
      $pro_name = "product".$i ;
       $cat_id = rand(3,12);
       $price = rand(0,500);
       $sale_off = rand(0,100);
       $brand_id = rand(4,10);;
       $description = "" ;
       $img_id = rand(220,600);
       $status=1;
      $sqlInsert = " INSERT INTO tbl_products (pro_name,cat_id, ";
      $sqlInsert.= " price,sale_off,brand_id,description,img_id,`status`) ";
      $sqlInsert.= " VALUES ('$pro_name','$cat_id','$price','$sale_off','$brand_id','$description','$img_id','$status') ";
      $result = @mysqli_query($conn,$sqlInsert) or die("Lỗi truy vấn :".$sqlInsert);
    }
?>