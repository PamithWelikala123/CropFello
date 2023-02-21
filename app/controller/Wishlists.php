<?php

//Chat class
class wishlists
{

  use Controller;
  public function index()
  {

  }


  public function buyerwishlist(){

       $this->view('buyerwishlist');

  }

  public function wishlistbutton(){


          $wishlist1 = new Wishlist;
          $id=$_GET['id'];
          $userid=$_SESSION['USER']->user_id;
     
      
          $arr['post_id']=$id;
          $arr['user_id']=$userid;
        
          $arr=(array)$arr;

          $wishlist1->insert($arr);

  }
}
