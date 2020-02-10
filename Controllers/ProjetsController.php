<?php

class ProjetsController extends Controller
{

    protected $name = "Projets";

    public function index()
    {
        $this->render("Projets/index");
    }
    public function show()
    {
        $this->render("Projets/show");
    }
}
