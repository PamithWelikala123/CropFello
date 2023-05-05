<?php
require_once('Deliveryuser.php');

class Deliverysignup {
    
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $vnumber = $_POST['vnumber'];
            $cnum = $_POST['cnum'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate user input
            $errors = array();
            if (empty($fname)) {
                $errors['fname'] = 'First name is required';
            }
            if (empty($lname)) {
                $errors['lname'] = 'Last name is required';
            }
            if (empty($vnumber)) {
                $errors['vnumber'] = 'Vehicle number is required';
            }
            if (empty($cnum)) {
                $errors['cnum'] = 'Contact number is required';
            }
            if (empty($email)) {
                $errors['email'] = 'Email is required';
            }
            if (empty($password)) {
                $errors['password'] = 'Password is required';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Invalid email format';
            }
            // if ($this->checkUserExists($email)) {
            //     $errors['email'] = 'Email already exists';
            // }

            // If there are no errors, add the user to the database
            // if (count($errors) === 0) {
            //     $Deliveryuser = new Deliveryuser($this->db);
            //     $Deliveryuser->addUser($fname, $email, $password);
            //     header('Location: success.php');
            //     exit;
            // }
        }

        // Display the registration form with any errors
        require_once('deliverysignup');
    }

    function success() {
        // Display the success page
        require_once('deliverysignup');
    }

    // function checkUserExists($email) {
    //     $Deliveryuser = new Deliveryuser($this->db);
    //     return $Deliveryuser->checkUserExists($email);
    // }
}

