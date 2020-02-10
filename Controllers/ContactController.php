<?php

class ContactController extends Controller
{

    protected $name = "Contact";

    public function index()
    {
        $this->render("contact/index");
    }
    public function show()
    {
        $this->render("contact/show");
    }
}
