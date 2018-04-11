
<?php
		if (isset($_GET["banner_id"])) {
			$sqlDelete="DELETE FROM tbl_banner WHERE banner_id=".$_GET["banner_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listBaner";
  </script>