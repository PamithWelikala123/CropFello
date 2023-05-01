<?php


class Notification{

    use Controller;
    public function index(){


    }


    public function notifications(){
      if ($_SESSION['USER']) {
        $arr['user_id']=$_SESSION['USER']->user_id;
        $notifications1= new notifications;
        $notifications1->order_column="notification_id";
        $notifications=$notifications1->where($arr);
        
        return $notifications;
  
      }
  }
  

  }