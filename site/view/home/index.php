
<!DOCTYPE html>
    <html lang="en">   
    <head>
        <meta charset="utf-8">
        <title>Cửa hàng trang sức</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap styles -->
        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Customize styles -->
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
        <!-- font awesome styles -->
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link rel="shortcut icon" href="ico/favicon.ico">
        <!-- hàm php lấy view để set active cho các nút trong nav-bar-->
    </head>
    <body>
        <div class="container">

            <div id="gototop"> </div>
            <?php 
                require APP . 'view/templates/header.php';
                require APP . 'view/templates/left-sidebar.php';
                require APP . 'view/templates/content.php';
                require APP . 'view/templates/manufactures.php';
                require APP . 'view/templates/footer.php';
            ?>
        </div>
        <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing-1.3.min.js"></script>
        <script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
        <script src="js/shop.js"></script>
    </body>
</html>