<?php

class User{

    use Model;

    protected $table = 'registerd_user';
    protected $allowedColumns = ['first_name','last_name','address','location','platitude','plongitude','city','contact_number','email','password','token','seller','buyer','deliver','user_id','image','description'];
    public $errors = [];

    public function validate2($data){

      $this->errors = [];      


         if (empty($data['email'])){
            $this->errors['email'] = "Email is Required";

         } 

         else {
         if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is Not Valid";
         }
         if (validateemail($data['email'])) {
            $this->errors['email'] = "Email is Already Exist";
         }
         }

         if (empty($data['password'])){
            $this->errors['password'] = "Password is Required";
         }
          if (empty($data['confirm_password'])){
            $this->errors['confirm_password'] = "Confirm_password is Required";
         
         }

         if(empty($this->errors)){
         return true;
           }

    }


    public function validate($data){
        $this->errors = [];      


      //    if (empty($data['email'])){
      //       $this->errors['email'] = "Email is Required";

      //    } 
      //    else {
      //    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      //       $this->errors['email'] = "Email is Not Valid";
      //    }
      //    if (validateemail($data['email'])) {
      //       $this->errors['email'] = "Email is Already Exist";
      //    }

       // if (empty($data['password'])){
         //    $this->errors['password'] = "Password is Required";
         // }
          // if (empty($data['confirm_password'])){
         //    $this->errors['confirm_password'] = "Confirm_password is Required";
         // }
      
      // }
      
           
            $pattern = "/^(?:\+94|0)?(?:1\d{2}|2\d{2}|3\d{2}|4\d{2}|5\d{2}|6\d{2}|7\d{2}|8\d{2})\d{6}$/";

            if (preg_match($pattern,$data['contact_number'])) {
           // echo "Valid phone number";
            } else {
               $this->errors['contact_number'] = "contact number is incorrect";
            }


         if (empty($data['location'])){
            $this->errors['location'] = "location is Required";
         }

         // if (empty($data['password'])){
         //    $this->errors['password'] = "Password is Required";
         // }
         if (empty($data['first_name'])){
            $this->errors['first_name'] = "First_name is Required";
         }
         if (empty($data['last_name'])){
            $this->errors['last_name'] = "Last name is Required";
         }
         if (empty($data['address'])){
            $this->errors['address'] = "Address is Required";
         }
        
         if (empty($data['city'])){
            $this->errors['city'] = "City is Required";
         }
         if (empty($data['contact_number'])){
            $this->errors['contact_number'] = "Contact no is Required";
         }
         // if (empty($data['confirm_password'])){
         //    $this->errors['confirm_password'] = "Confirm_password is Required";
         // }

        




        if(empty($this->errors)){
         return true;
           }


      return false;
    }

    public function func1($para){
      $query = "select * from $this->table where user_id=$para";
      return $this->query($query);
    }





}