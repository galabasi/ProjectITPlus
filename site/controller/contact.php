<?php


class Contact extends Controller
{
    public function index()
    {
        // load views/*
        require APP . 'view/templates/header.php';
        require APP . 'view/Contact/index.php';
        require APP . 'view/templates/footer.php';
    }
}
