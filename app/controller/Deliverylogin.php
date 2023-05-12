<?php

//Login class
class Deliverylogin
{

    use Controller;


    public function index()
    {
        $data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new Deliveryuser1;
			$arr['email'] = $_POST['email'];

			$row = $user->first($arr);
			
			if($row)
			{
				if($row->password_hash === $_POST['password_hash'])
				{
					$_SESSION['USER'] = $row;
					redirect('deliverytodo/view2');
				}
			}

			$user->errors['email'] = "Wrong email or password";

			$data['errors'] = $user->errors;
		}

		$this->view('deliverylogin',$data);


    }




    public function deliveryForgetpassword1(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $token = rand(1231,7879);
            $user = new Deliveryuser1;
               // if(isset($_POST['password-reset-code.php'])){
                    $arr['email'] = $_POST['email'];
                    $row = $user->first($arr);

                    if($row){
                    $arr['token'] = $token;
                    $get_email = $row -> email;
                    $get_id = $row -> id;
                     $fname = $row->fname;
                    $lname=$row->lname;
                    $full_name = $fname . " " . $lname; 
                    $row->lname ;
                     $user->update($get_id, $arr);
                     $_SESSION['USER'] = $row;
            //    echo $full_name;
                    send_password_reset($full_name, $get_email, $token);
                    redirect('deliverylogin/deliveryforgetpassword2');
        
                    }
                    
                    $data['errors'] = $user->errors;
                    $_SESSION['status'] = "No Email Found "; 
                    $this->view('deliveryforgetpassword1');

       // }
       
        }
        
        $this->view('deliveryforgetpassword1');
    }

    
    public function deliveryForgetpassword2(){

        $ids= $_SESSION['USER']->id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Deliveryuser1;
            $arr['id'] = $ids;
            $row = $user->first($arr);
            if($row->token==$_POST['token']){
                redirect('deliverylogin/deliveryforgetpassword3');
            }
            
        } else {
            $this->view('deliveryforgetpassword2');
        }
    }

    public function deliveryForgetpassword3(){

        $ids=$_SESSION['USER']->id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Deliveryuser1;
            if($_POST['newpassword']==$_POST['oldpassword']){
                $arr['id'] = $ids;
                $row = $user->first($arr);
               // $arr['password'] = $_POST['newpassword'];
                $ran_id = rand(time(), 100000000);
                $status = "Active now";
                $arr['password_hash'] = md5($_POST['newpassword']);
                $user->update($ids, $arr);
                redirect('deliverylogin');
            }
            else
            $this->view('deliveryforgetpassword3');

        }
        else
        $this->view('deliveryforgetpassword3');

    }

          
}

