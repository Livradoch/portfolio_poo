<?php

class HomeController extends Controller
{

    protected $name = "Home";

    public function index()
    {
        $this->render("home/index");
       
     
    }
public function show()
{
     $this->render("home/show");
}}

