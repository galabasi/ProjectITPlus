<?php


class Cart extends Controller
{
    public function index()
    {
        // load views/*
        require APP . 'view/templates/header.php';
        require APP . 'view/templates/cart.php';
        require APP . 'view/templates/footer.php';
    }
}
