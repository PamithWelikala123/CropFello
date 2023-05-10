<?php

//Chat class
class wishlists
{

  use Controller;
  public function index()
  {

  }


  public function buyerwishlist(){
    $wishlist1 = new Wishlist;
    $item=new item;
    $postitem=new postitems;
    $user= new User;

    $arr['user_id']=$_SESSION['USER']->user_id;
    $rows=$wishlist1->where($arr);
    if($rows){

    foreach ($rows as $row) {

      $arr1['post_id'] = $row->post_id;
      $row1 = $postitem->first($arr1);

      $arr2['item_id'] = $row1->item_id;
      $row2 = $item->first($arr2);

      $arr3['user_id'] = $row1->user_id;
      $row3 = $user->first($arr3);

      $row->item_name=$row2->name;
      $row->first_name=$row3->first_name;
      $row->last_name=$row3->last_name;
      $row->price=$row1->price;
      $row->size=$row1->size;
      $row->image=$row1->image;
      $row->stock_size1=$row1->stock_size1;
      
    }


    $this->view('buyerwishlist',$rows);
    }

    else{
      $this->view('buyerwishlist');
    }


      

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

public function wishlistdeleteitem1(){


  $wishlist1 = new Wishlist;
  $id=$_GET['id'];
  $userid=$_SESSION['USER']->user_id;



  $wishlist1->delete1($id,$userid,'post_id','user_id');
  redirect('wishlists/buyerwishlist');

}
}
