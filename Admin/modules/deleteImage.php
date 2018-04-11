
<?php
		if (isset($_GET["img_id"])) {
			$sqlDelete="DELETE FROM tbl_images WHERE img_id=".$_GET["img_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listImage";
  </script>