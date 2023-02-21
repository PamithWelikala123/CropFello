<?php

//Chat class
class wishlist
{

  use Controller;
  public function index()
  {

  }


  public function buyerwishlist(){

       $this->view('buyerwishlist');

  }

  public function wishlistbutton(){


          $wishlist = new Wishlist;
          $id=$_GET['id'];
          $userid=$_SESSION['USER']->user_id;
     //echo $userid;
      
          $arr['post_id']=$id;
          $arr['user_id']=$userid;
        
          $arr=(array)$arr;

          $wishlist->insert($arr);

  }
}
