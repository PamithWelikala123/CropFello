<?php

class User{

    use Model;

    protected $table = 'registerd_user';
    protected $allowedColumns = ['first_name','last_name','address','location','p-latitude','p-longitude','city','contact_number','email','password','token','seller','buyer','deliver','user_id','image','description'];
    public $errors = [];

    


    public function validate($data){
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
      
           
            $pattern = "/^\+?\d{1,3}?[- .]?\(?\d{3}\)?[- .]?\d{3}[- .]?\d{4}$/";

            if (preg_match($pattern,$data['contact_number'])) {
           // echo "Valid phone number";
            } else {
               $this->errors['contact_number'] = "contact_number is incorrect";
            }


         if (empty($data['location'])){
            $this->errors['location'] = "location is Required";
         }

         if (empty($data['password'])){
            $this->errors['password'] = "Password is Required";
         }
         if (empty($data['first_name'])){
            $this->errors['first_name'] = "First_name is Required";
         }
         if (empty($data['last_name'])){
            $this->errors['last_name'] = "Last name is Required";
         }
         if (empty($data['address'])){
            $this->errors['address'] = "Address is Required";
         }
         if (empty($data['postal_code'])){
            $this->errors['postal_code'] = "Postal code is Required";
         }
         if (empty($data['city'])){
            $this->errors['city'] = "City is Required";
         }
         if (empty($data['contact_number'])){
            $this->errors['contact_number'] = "Contact no is Required";
         }
         if (empty($data['confirm_password'])){
            $this->errors['confirm_password'] = "Confirm_password is Required";
         }

         if (($data['city'])!=$data['city1']){
            $this->errors['city'] = "Selected City and the fetch location are not matching";
         }
         if (empty($data['pickuplocation'])){
            $this->errors['pickuplocation'] = "Location is Required";
         }




        if(empty($this->errors)){
         return true;
           }


      return false;
    }





}