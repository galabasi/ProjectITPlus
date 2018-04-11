
<?php
		if (isset($_GET["brand_id"])) {
			$sqlDelete="DELETE FROM tbl_brands WHERE brand_id=".$_GET["brand_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listBrand";
  </script>