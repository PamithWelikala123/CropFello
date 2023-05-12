<?php

class Deliveryuser1{

    use Model;

    protected $table = 'user';
    protected $allowedColumns = ['fname','lname','cnum','email','password_hash','id','vnumber','district','token'];
    public $errors = [];




     public function validate($data){
      print_r($data);
        $this->errors = [];      


         if (empty($data['email'])){
            $this->errors['email'] = "Email is Required";

         } else {
         if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is Not Valid";
         }
         if (validateemail($data['email'])) {
            $this->errors['email'] = "Email is Already Exist";
         }
             }
      


         if (empty($data['password_hash'])){
            $this->errors['password_hash'] = "Password is Required";
         }
         if (empty($data['fname'])){
            $this->errors['fname'] = "First name is Required";
         }
         if(empty($data['lname'])){
            $this->errors['lname']="Last name is Required";
         }
         if(empty($data['vnumber'])){
            $this->errors['vnumber']="Vehicle number is Required";
         }
         if(empty($data['cnum'])){
            $this->errors['cnum']="Contact number is Required";
         }
   //       if (empty($data['lname'])){
   //          $this->errors['lname'] = "Last name is Required";
   //       }
   //       if (empty($data['cnum'])){
   //          $this->errors['cnum'] = "Contact no is Required";
   //       }
         if (empty($data['confirm_password'])){
            $this->errors['confirm_password'] = "Confirm Password";

        }

         if(!($data['confirm_password']==$data['password_hash']) && $data['confirm_password'] ){
            $this->errors['confirm_password1'] = "Conformed password is not similar the password ";
         }

         $pattern = "/^(?:\+94|0)?(?:1\d{2}|2\d{2}|3\d{2}|4\d{2}|5\d{2}|6\d{2}|7\d{2}|8\d{2})\d{6}$/";

         if (preg_match($pattern,$data['cnum'])) {
        // echo "Valid phone number";
         } else {
            $this->errors['contact_number'] = "contact number is incorrect";
         }


        if(empty($this->errors)){
         return true;
           }


      return false;
    }

//     public function getListItems() {
//       $sql = "SELECT * FROM cities ORDER BY id ASC";
//       $result = mysqli_query(getConnection(), $sql);
//       $listItems = [];
//       while ($row = mysqli_fetch_assoc($result)) {
//           $listItems[] = $row;
//       }
//       return $listItems;
//   }
    
}