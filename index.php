<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cửa hàng trang sức</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Customize styles -->
    <link href="assets/css/style.css" type="text/css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
    <body>

        <div class="container">
            <div class="row">
                <?php 
                    include('modules/header.php');
                        if(isset($_GET["view"])){
                            $view=$_GET["view"];
                            if($_GET["view"]!='cart' && $_GET["view"]!='shop' && $_GET["view"]!='register' && $_GET["view"]!='contact' && $_GET["view"]!='login' && $_GET["view"]!='forget-password'){
                                include("modules/left-sidebar.php");
                            }
                            require("modules/".$view.".php");
                        }else{
                            include("modules/left-sidebar.php");
                            include("modules/content.php");
                            include("modules/manufactures.php");
                        }
                    
                   
                ?>
            </div>
            <?php include('modules/footer.php'); ?>
        </div>
        <?php  include('modules/copyright.php'); ?>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easing-1.3.min.js"></script>
        <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="assets/js/shop.js"></script>
    </body>
</html>