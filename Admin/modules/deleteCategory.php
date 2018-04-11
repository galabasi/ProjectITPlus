
<?php
		if (isset($_GET["cat_id"])) {
			$sqlDelete="DELETE FROM tbl_category WHERE cat_id=".$_GET["cat_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listCategory";
  </script>