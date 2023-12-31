<?php 

include "../config/config.php";
include "../core/db.php";
include "../core/Autoloader.php";

// function to return view file
function view($view, $data=[]){
    $view = str_replace(".","/", $view);
    $viewPath = "../app/views/$view.php";
    
    /*
        $data = [
            "name" => "John",
            "age" => 20
        ];

        extract($data);

        $name = "John";
        $age = 20;
     */


    if(file_exists($viewPath)){
        extract($data);
        require_once "../app/views/template/header.php";
        require_once $viewPath;
        require_once "../app/views/template/footer.php";
    }else{
        die("View $view not found");
    }
}