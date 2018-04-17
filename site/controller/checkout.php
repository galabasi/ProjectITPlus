<?php  
	/**
	*  
	*/
	class checkout extends Controller
	{
		
		public function index(){
			/*echo "<pre>";
			print_r($_SESSION['user']);*/
			$ward = $this->model->getOne("tbl_ward","id_ward",$_SESSION['user']->ward_user);
			$district = $this->model->getOne("tbl_district","id_district",$_SESSION['user']->district_user);
			$province = $this->model->getOne("tbl_province","id_province",$_SESSION['user']->province_user);
			
			require APP . 'view/templates/header.php';
			require APP . 'view/checkout/index.php';
			require APP . 'view/templates/footer.php';
		}
	}
?>