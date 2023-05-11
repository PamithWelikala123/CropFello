<?php

//home class
class Home{

    use Controller;
    public function index(){
        $user=new User;

        $buyercount=0;
        $sellercount=0;
        $deliverycount=0;
        $user->order_column="user_id";
        $rows=$user->findAll();
        if($rows){
            foreach($rows as $row){
                        if(($row->seller)==1){
                            $sellercount=$sellercount+1;  
                        }
                        if(($row->buyer)==1){
                            $buyercount=$buyercount+1;  
                        }
                        if(($row->deliver)==1){
                            $deliverycount=$deliverycount+1;  
                        }
            }
        }
        
        $rowx['sellercount']=$sellercount;
        $rowx['buyercount']=$buyercount;
        $rowx['deliverycount']=$deliverycount;

        $postitem=new postitems;
        $item=new item;


        $row2s=$postitem->getmax4();
        $count=0;
        if($row2s){
            foreach($row2s as $row2){
                $count=$count+1;
                $rowx['count']=$count;

                $arr['item_id'] = $row2->item_id;
                $rowy=$item->first($arr);

                $rowx['item_name'.$count] = $rowy->name;

                $rowx['item_id'.$count] = $row2->item_id;
                $rowx['price'.$count] = $row2->price;
                $rowx['discount'.$count] = $row2->discount;
                $rowx['size'.$count] = $row2->size;
                $rowx['image'.$count] = $row2->image;

            }

        }

        
        

       $this->view('home', $rowx);
    }


    public function map() {


        $row['sel_lati1'] = 6.828959157721786;
        $row['sel_longi2'] = 80.01828950117186;
  
        $row['sel_lati']= 7.2906;
        $row['sel_longi']= 80.6337;
       
        
        // convert object to array
        
        $this->view('map', $row);
    }
    

    public function temp(){
        $this->view('404');
    }

    public function temp2(){
        $this->view('temp2');
    }

}

