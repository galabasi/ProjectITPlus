<?php  
	class Category extends Controller{
		public function index()
	    {
	        // load views
	        require APP . 'view/_templates/header.php';
	        require APP . 'view/Category/index.php';
	        require APP . 'view/_templates/footer.php';
	    }
	}
?>