<?php
class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct("/");
        
    }

    public function call()
    {
        include_once("../views/Home.php");
    }
}
