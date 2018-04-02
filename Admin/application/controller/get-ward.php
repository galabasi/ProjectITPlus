<option value="">---Chọn---</option>
<?php  
	include("../connection.php");
	if (isset($_POST["id"])) {
		$id=$_POST["id"];
		$sqlDistrict="SELECT * FROM tbl_ward WHERE `status`=1 AND district_id=".$id;
		$resultDistrict= @mysqli_query($conn, $sqlDistrict) or die("Lỗi truy vấn");
		while ($rowDistrict= mysqli_fetch_assoc($resultDistrict)) {
			// echo "<pre>";
			// print_r($rowDistrict);
?>
			<option value="<?php echo $rowDistrict["ward_id"] ?>"><?php echo $rowDistrict["ward_name"] ?></option>
<?php		
		}		
	}
?>