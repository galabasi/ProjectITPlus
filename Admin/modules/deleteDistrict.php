
<?php
		if (isset($_GET["district_id"])) {
			$sqlDelete="DELETE FROM tbl_district WHERE pro_id=".$_GET["district_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listDistrict";
  </script>