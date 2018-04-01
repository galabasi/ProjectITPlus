
<?php
		if (isset($_GET["content_id"])) {
			$sqlDelete="DELETE FROM tbl_category WHERE content_id=".$_GET["content_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listContent";
  </script>