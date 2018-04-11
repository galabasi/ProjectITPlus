
<?php
		if (isset($_GET["ward_id"])) {
			$sqlDelete="DELETE FROM tbl_Ward WHERE ward_id=".$_GET["ward_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listWard";
  </script>