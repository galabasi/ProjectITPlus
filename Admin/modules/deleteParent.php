
<?php
		if (isset($_GET["parent_id"])) {
			$sqlDelete="DELETE FROM tbl_brands WHERE parent_id=".$_GET["parent_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listParent";
  </script>