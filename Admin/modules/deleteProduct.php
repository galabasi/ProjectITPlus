
<?php
		if (isset($_GET["pro_id"])) {
			$sqlDelete="DELETE FROM tbl_products WHERE pro_id=".$_GET["pro_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listProduct";
  </script>