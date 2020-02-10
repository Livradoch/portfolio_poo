<?php

class HeaderController extends Controller


{

    protected $name = "Header";

    public function index()
    {
        $this->render("Projets/index");
       
     
    }
public function show()
{
     $this->render("Projets/show");
}}
