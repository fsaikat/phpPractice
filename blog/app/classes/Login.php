<?php
namespace App\classes;
use App\classes\Database;

class Login
{
    public function adminLogin($data)
    {
//            echo '<pre>';
//            print_r($data);
        $email = $data['email'];
        $pass = md5($data['password']);

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass' ";
        if(mysqli_query(\App\classes\Database::dbConnection(), $sql))
        {
            $result = mysqli_query(\App\classes\Database::dbConnection(), $sql);
            $user = mysqli_fetch_assoc($result);
//            echo '<pre>';
//            print_r($user);
            if($user)
            {
                header('Location:dashboard.php');
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
            }
            else
            {
                $message = 'Please Enter Correct Email & Password';
                return $message;
            }
        }
        else
        {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }

    }

    public function adminLogout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: index.php');
    }
}
?>