<?php

trait controller{

    public function view($name,$data=[]){

        if (!empty($data))
            extract($data);
            
        $filename = "../app/view/".$name.".view.php";
         if(file_exists($filename)){
             require $filename;
         }else{
             $filename = "../app/view/404.view.php";
             require $filename;
         }
    }
}