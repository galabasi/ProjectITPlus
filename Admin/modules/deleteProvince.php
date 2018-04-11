
<?php
		if (isset($_GET["province_id"])) {
			$sqlDelete="DELETE FROM tbl_province WHERE province_id=".$_GET["province_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listProvince";
  </script>