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
          redirect('feed/viewitems?id='.$id );

  }

  
  public function wishlistdeleteitem(){


    $wishlist1 = new Wishlist;
    $id=$_GET['id'];
    $userid=$_SESSION['USER']->user_id;
  


    $wishlist1->delete1($id,$userid,'post_id','user_id');
    redirect('feed/viewitems?id='.$id );

}
}
