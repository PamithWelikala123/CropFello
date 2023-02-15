<?php

//Login class
class Login
{

    use Controller;
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['email'] = $_POST['email'];
            $row = $user->first($arr);

            if ($row) {
                if ($row->password == md5($_POST['password'])) {
                    $_SESSION['USER'] = $row;
                    redirect('feed');
                }
            }
            $data['errors'] = $user->errors;
        }
        $this->view('login');


    }

          
}

