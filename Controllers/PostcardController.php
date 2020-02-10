<?php 

class PostcardController extends Controller{
    protected $name="postcard";
    public function show(){
    $data = [
        "content"=>"bonjour bonjour"
    
        
    ];
    var_dump ($data);
   $this->render("show" , $data);
var_dump ($this);}
}