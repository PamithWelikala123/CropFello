<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\SMTP;
   use PHPMailer\PHPMailer\Exception;
   
//Load Composer's autoloader
require __DIR__.'/vendor/autoload.php';

function show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function esc($str){
    return htmlspecialchars($str);
}

function redirect($path){
    header("Location: " . ROOT . "/" . $path);
    die;
}

function send_password_reset($full_name,$get_email,$token)
{

    $mail = new PHPMailer(TRUE);
    $mail->isSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug = 0; //Enable verbose debug output                                          //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'cropfello@gmail.com'; //SMTP username
    $mail->Password = 'wugqelupsgutlapd'; //SMTP password
    $mail->SMTPSecure = 'tls'; //Enable implicit TLS encryption
    $mail->Port = 587;

    try {

        $mail->setFrom("cropfello@gmail.com");

        $mail->addAddress($get_email);

        $mail->Subject = "Password Reset Code";

        $mail->Body = "Your password reset code is $token";

        if (!$mail->send()) {
            return false;
        } else {
            return true;
        }
    } catch (Exception $e) {
        // echo $e->errorMessage();
        return false;
    } catch (\Exception $e) {
        // echo $e->getMessage();
        return false;

    }
}

function validateemail($data){
    $user = new User;
    $arr['email'] =$data;
    $row = $user->first($arr);
    if($row){
        return true;
    }
    else{
        return false;
    }
}

