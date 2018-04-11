
<?php
		if (isset($_GET["user_id"])) {
			$sqlDelete="DELETE FROM tbl_users WHERE user_id=".$_GET["user_id"];
			$result=@mysqli_query($conn,$sqlDelete) or die("Lỗi truy vấn");
		}
?>

  <script>
      window.location.href="index.php?view=listUser";
  </script>