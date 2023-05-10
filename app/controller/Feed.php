<?php

//Feed class
class Feed{

    use Controller;
    public function index(){}
    
    public function feed(){
    $postitem = new postitems;
    $item = new item;

    $rows = $postitem->findAll();
    
    foreach ($rows as $row) {
        $arr1['item_id'] = $row->item_id;
        $row1 = $item->first($arr1);
        $row->item_name = $row1->name;
      }

        $this->view('feed',$rows);
    }







    public function viewitems(){
      $user = new User;
        $postitem = new postitems;
        $item = new item;

        $wishlist= new Wishlist;
    
  

      $id=$_GET['id'];
    //  echo $id;
    $arr1['post_id'] = $id;
    
    $row= $postitem->first($arr1);

    $arr3['user_id'] =  $row->user_id;

    $row3= $user->first($arr3);
    $row->first_name=$row3->first_name;
    $row->last_name=$row3->last_name;
    $row->image1=$row3->image;

    $arry1['user_id']=$_SESSION['USER']->user_id;
    $rowy3= $user->first($arry1);

    $row->sel_lati=$rowy3->platitude;
    $row->sel_longi=$rowy3->plongitude;
   


   // echo $row->image;


      $arr2['item_id'] = $row->item_id;
    $row1 = $item->first($arr2);
    $row->item_name=$row1->name;
   
    $arrx['user_id']=$_SESSION['USER']->user_id;
    $arrx['post_id']=$id;
    $user_id = $_SESSION['USER']->user_id;

    $rowx=$wishlist->where($arrx);

    if($rowx){
      $row->flag=1;
    }
    else{
      $row->flag=0;
    }

    $order = new Order;
    $checkout = new Checkout;

    if(isset($_POST['buynow'])){

      if(isset($_POST['optradio'])){
       $metho = $_POST['optradio'];
      }

      if($metho == "delper"){
        $arr1['post_id'] = $id;
        $data3= $postitem->first($arr1);
        $quan = $_POST['quantity'];
        $qt = intval($quan);

        $item_id = $data3->item_id;
        $arr5['item_id'] = $item_id;
        $data6 = $item->first($arr5);
        $item_name = $data6->name;
        $unit = $data3->unit;
        $qua = $data3->size*$qt;
        $image = $data3->image;
        $price = $data3->price*$qt;
        $full_stock = $data3->stock_size;
        $exp = $data3->exp;
        $sel_lati = $data3->platitude;
        $sel_longi = $data3->plongitude;
        $placed_on = date('Y-m-d');
        $del_price = 500;
        $distance= intval($_POST['distance']);
        $tot = $del_price + $price;
        $rand = md5(uniqid(rand(),true));

        if($full_stock > $qua){
          $order->func3($user_id,$price,$qua,$id,$del_price,$tot,$unit,$item_name,$rand,$metho,$exp,$placed_on,$image,$distance);
        }else{
          print_r("not enough stock");
        }

        $arrx1['user_id']=$_SESSION['USER']->user_id;
        $arrx2['order_code']=$rand;
        $data4 = $user->first($arrx1);
        $data5 = $order->first($arrx2);
        $first_name = $data4->first_name;
        $last_name = $data4->last_name;
        $address = $data4->address;
        $buy_lati = $data4->platitude;
        $buy_longi = $data4->plongitude;
        $contact_number = $data4->contact_number;
        //$order_id = $data5->id;

        if($full_stock > $qua){
          $checkout->func3($rand,$first_name,$last_name,$address,$contact_number,$buy_lati,$buy_longi);
          redirect('feed/checkout1?order_code=' . $rand);
        }
    
        
      }else{
        $arr1['post_id'] = $id;
        $data3= $postitem->first($arr1);
        $quan = $_POST['quantity'];
        $qt = intval($quan);

        $item_id = $data3->item_id;
        $arr5['item_id'] = $item_id;
        $data6 = $item->first($arr5);
        $item_name = $data6->name;
        $unit = $data3->unit;
        $qua = $data3->size*$qt;
        $price = $data3->price*$qt;
        $image = $data3->image;
        $exp = $data3->exp;
        $sel_lati = $data3->platitude;
        $sel_longi = $data3->plongitude;
        $full_stock = $data3->stock_size;
        $placed_on = date('Y-m-d');
        $del_price = 0;
        $distance= intval($_POST['distance']);
        $tot = $del_price + $price;
        $rand = md5(uniqid(rand(),true));

        if($full_stock > $qua){
          $order->func3($user_id,$price,$qua,$id,$del_price,$tot,$unit,$item_name,$rand,$metho,$exp,$placed_on,$image,$distance);
        }else{
          print_r("not enough stock");
        }

        
      

        $arrx1['user_id']=$_SESSION['USER']->user_id;
        $arrx2['order_code']=$rand;
        $data4 = $user->first($arrx1);
        $data5 = $order->first($arrx2);
        $first_name = $data4->first_name;
        $last_name = $data4->last_name;
        $address = $data4->address;
        $buy_lati = $data4->platitude;
        $buy_longi = $data4->plongitude;
        $contact_number = $data4->contact_number;
        //$order_id = $data5->id;
        
        if($full_stock > $qua){
          $checkout->func3($rand,$first_name,$last_name,$address,$contact_number,$buy_lati,$buy_longi);
          redirect('feed/checkout1?order_code=' . $rand);
        }
        
      }
      
  }elseif(isset($_POST['addto'])){
    if(isset($_POST['optradio'])){
      $metho = $_POST['optradio'];
     }

     if($metho == "delper"){
       $arr1['post_id'] = $id;
       $data3= $postitem->first($arr1);
       $quan = $_POST['quantity'];
       $qt = intval($quan);

       $item_id = $data3->item_id;
       $arr5['item_id'] = $item_id;
       $data6 = $item->first($arr5);
       $item_name = $data6->name;
       $unit = $data3->unit;
       $qua = $data3->size*$qt;
       $price = $data3->price*$qt;
       $image = $data3->image;
       $exp = $data3->exp;
       $sel_lati = $data3->platitude;
       $sel_longi = $data3->plongitude;
       $full_stock = $data3->stock_size;
       $placed_on = date('Y-m-d');
       $del_price = 500;
       $tot = $del_price + $price;
       $rand = md5(uniqid(rand(),true));

       if($full_stock > $qua){
        $order->func8($user_id,$price,$qua,$id,$del_price,$tot,$unit,$item_name,$rand,$metho,$image,$exp,$placed_on);
       }else{
        print_r("not enough stock");
       }

       
     

       $arrx1['user_id']=$_SESSION['USER']->user_id;
       $arrx2['order_code']=$rand;
       $data4 = $user->first($arrx1);
       $data5 = $order->first($arrx2);
       $first_name = $data4->first_name;
       $last_name = $data4->last_name;
       $address = $data4->address;
       $buy_lati = $data4->platitude;
       $buy_longi = $data4->plongitude;
       $contact_number = $data4->contact_number;
       //$order_id = $data5->id;

       if($full_stock > $qua){
        $checkout->func3($rand,$first_name,$last_name,$address,$contact_number,$buy_lati,$buy_longi);
        redirect('feed/feed');
       }
   
       
     }else{
       $arr1['post_id'] = $id;
       $data3= $postitem->first($arr1);
       $quan = $_POST['quantity'];
       $qt = intval($quan);

       $item_id = $data3->item_id;
       $arr5['item_id'] = $item_id;
       $data6 = $item->first($arr5);
       $item_name = $data6->name;
       $unit = $data3->unit;
       $qua = $data3->size*$qt;
       $price = $data3->price*$qt;
       $del_price = 0;
       $exp = $data3->exp;
       $sel_lati = $data3->platitude;
       $sel_longi = $data3->plongitude;
       $full_stock = $data3->stock_size;
       $placed_on = date('Y-m-d');
       $image = $data3->image;
       $tot = $del_price + $price;
       $rand = md5(uniqid(rand(),true));

       if($full_stock > $qua){
        $order->func8($user_id,$price,$qua,$id,$del_price,$tot,$unit,$item_name,$rand,$metho,$image,$exp,$placed_on);
       }else{
        print_r("not enough stock");
       }

       
     

       $arrx1['user_id']=$_SESSION['USER']->user_id;
       $arrx2['order_code']=$rand;
       $data4 = $user->first($arrx1);
       $data5 = $order->first($arrx2);
       $first_name = $data4->first_name;
       $last_name = $data4->last_name;
       $address = $data4->address;
       $buy_lati = $data4->platitude;
       $buy_longi = $data4->plongitude;
       $contact_number = $data4->contact_number;
       //$order_id = $data5->id;

       if($full_stock > $qua){
        $checkout->func3($rand,$first_name,$last_name,$address,$contact_number,$buy_lati,$buy_longi);
        redirect('feed/feed');
       }
   
     }
  }else{
    $row=(array)$row;
    $this->view('viewitem',$row);
  }
    
}

public function checkout1(){

  $order_code = $_GET['order_code'];
  $user = new User;
  $order = new Order;
  $checkout = new Checkout;
  $post = new postitems;

  $arrx11['order_code']=$order_code;
  $user_id = $_SESSION['USER']->user_id;

  $data44 = $order->first($arrx11);
  $id = $data44->post_id;
  $arrx22['post_id']=$id;
  $data55 = $post->first($arrx22);
  $stock = $data55->stock_size;
  $qua = $data44->qua;
  $new_size = $stock-$qua;

  if(isset($_POST['change'])){

    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];
    //$order->func7($address,$contact_number,$city,$postal_code,$order_code);
    /*$data['a'] = $user->func1($user_id);
    $data['b'] = $order->func5($id);*/
    $arrx1['user_id']=$_SESSION['USER']->user_id;
    //$arrx2['post_id']=$id;
    //$data4 = $user->first($arrx1);
    //$data5 = $order->first($arrx11);
    //$first_name = $data4->first_name;
    //$last_name = $data4->last_name;
    //$order_id = $data5->id;
    
    $checkout->func8($address,$contact_number,$order_code);
    


    $arr['order_code'] = $order_code;
    $data1 = $order->first($arr);
    $del_method = $data1->del_method;
    $post_id = $data1->post_id;
    $arr1['post_id'] = $post_id;
    $data2 = $post->first($arr1);
    $seller = $data2->user_id;
    //$arr2['user_id'] = $seller;
    $data['c'] = $user->func1($seller);
    

    if($del_method == "pickup"){
      $data['a'] = $checkout->func5($order_code);
      $data['b'] = $order->func5($order_code);
      if(isset($_POST['checkout'])){
        
        redirect('feed/checkout2?order_code=' . $order_code);
      }
      $this->view('checkout1',$data);
    }else{
      $data['a'] = $checkout->func5($order_code);
      $data['b'] = $order->func5($order_code);
      if(isset($_POST['checkout'])){
        
        redirect('feed/waiting');
      }
      $this->view('checkout1',$data);
    }
    //$this->view('checkout1',$data);

 }else{
    $arr['order_code'] = $order_code;
    $data1 = $order->first($arr);
    $del_method = $data1->del_method;
    $post_id = $data1->post_id;
    $arr1['post_id'] = $post_id;
    $data2 = $post->first($arr1);
    $seller = $data2->user_id;
    
    $data['c'] = $user->func1($seller);

    if($del_method == "pickup"){
      $data['a'] = $user->func1($user_id);
      $data['b'] = $order->func5($order_code);
      if(isset($_POST['checkout'])){
        
        redirect('feed/checkout2?order_code=' . $order_code);
      }
      $this->view('checkout1',$data);
    }else{
      $data['a'] = $user->func1($user_id);
      $data['b'] = $order->func5($order_code);
      if(isset($_POST['checkout'])){
        
        redirect('feed/waiting');
      }
      $this->view('checkout1',$data);
    }
    
 }
}

public function checkout2(){
    $order_code = $_GET['order_code']; 
    //$user1 = new User;
    $checkout1 = new Checkout;
    $order = new Order;
    $post = new postitems;
    $user = new User;

    $arrx11['order_code']=$order_code;
    //$user_id = $_SESSION['USER']->user_id;

    $data44 = $order->first($arrx11);
    $metho = $data44->del_method;
    $id = $data44->post_id;
    $arrx22['post_id']=$id;
    $data55 = $post->first($arrx22);
    $stock = $data55->stock_size;
    $qua = $data44->qua;
    $new_size = $stock-$qua;

    $arr['order_code'] = $order_code;
    $data1 = $order->first($arr);
    $del_method = $data1->del_method;
    $post_id = $data1->post_id;
    $arr1['post_id'] = $post_id;
    $data2 = $post->first($arr1);
    $seller = $data2->user_id;
    $data['c'] = $user->func1($seller);

    $data['b'] = $checkout1->func5($order_code);
    $data['a'] = $order->func5($order_code);
    

    if($metho == "pickup"){
      /*if(isset($_POST['tranBtn'])){
        $order->delete($order_code,'order_code');
        $checkout1->delete($order_code,'order_code');
        redirect("feed/feed");
      }*/

      $this->view('checkout3',$data);
    }else{
      /*if(isset($_POST['tranBtn'])){
        $order->delete($order_code,'order_code');
        $checkout1->delete($order_code,'order_code');
        redirect("feed/feed");
      }*/

      redirect('feed/waiting?order_code=' . $order_code);
    }

    
}

public function cart(){
  //$order_code = $_GET['order_code'];
  $checkout1 = new Checkout;
  $order = new Order;
  $user_id = $_SESSION['USER']->user_id;
  

  if (isset($_POST['del'])) {
    foreach($_POST['del'] as $key => $value){

      $order->delete($key,'order_code');
      $checkout1->delete($key,'order_code');
    }	
  }

  if (isset($_POST['btn'])) {
    foreach($_POST['btn'] as $key => $value){

      //$order->delete($key,'order_code');
      redirect('feed/checkout1?order_code=' . $key);
      
    }	
  }

  $data['a'] = $order->func10($user_id);
  $data['b'] = $order->func9();

  if(empty($data)){
    $data = [];
    $this->view('cart');
  }else{
    $this->view('cart',$data);
  }

  
  
}

public function waiting(){
  //$order_code = $_GET['order_code'];
  $user_id = $_SESSION['USER']->user_id;
  $order = new Order;
  $data['a'] = $order->func6($user_id);

  $this->view('waiting',$data);
  
}

public function final(){
  $order_code = $_GET['order_code']; 
  //$user1 = new User;
  $checkout1 = new Checkout;
  $order = new Order;
  $post = new postitems;
  $arrx11['order_code']=$order_code;
  //$user_id = $_SESSION['USER']->user_id;

  $data44 = $order->first($arrx11);
  $metho = $data44->del_method;
  $id = $data44->post_id;
  $arrx22['post_id']=$id;
  $data55 = $post->first($arrx22);
  $stock = $data55->stock_size;
  $qua = $data44->qua;

  if($stock > $qua){
    $new_size = $stock-$qua;
    $post->func1($new_size,$id);
    $order->delete($order_code,'order_code');
    $checkout1->delete($order_code,'order_code');
    redirect("feed/feed");
  }else{
    print_r("not enough stock");
  }
  
  
}

public function back(){
  $order_code = $_GET['order_code'];
  $checkout1 = new Checkout;
  $order = new Order;
  $order->delete($order_code,'order_code');
  $checkout1->delete($order_code,'order_code');
  redirect("feed/feed");
}




    public function search(){
      $word=$_GET['search'];
      $item = new item;
      $postitem = new postitems;
      $rows1=$item->searchitem('item',$word);
      $rowsx = array();

      if (!empty($rows1)) {
        foreach ($rows1 as $row1) {
          // $row1->item_name = $row1->name;
               $arrx1['item_id']=$row1->item_id;
              $rowsx=$postitem->where($arrx1);
             
              foreach ($rowsx as $row) {
                   $row->item_name = $row1->name;
              }
         }
   
         $this->view('feed',$rowsx);
      } else {
        $this->view('feed');
      }

      

    }
}

