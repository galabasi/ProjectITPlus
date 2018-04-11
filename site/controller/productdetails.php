<?php
class ProductDetails extends Controller
{
    public function index()
    {
        // load views/*
        require APP . 'view/templates/header.php';
        require APP . 'view/templates/left-sidebar.php';
        require APP . 'view/templates/product-details.php';
        require APP . 'view/templates/footer.php';
    }
}
