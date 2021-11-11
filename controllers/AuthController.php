<?php
include_once "models/UserModel.php";
class AuthController
{
    
    protected UserModel  $userModel;
    
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showRegister()
    {
        include_once "views/auth/register.php";
    }
    public function register($data)
    {
        if (isset($_POST['submit'])){
            $data2 = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => $_POST['password']
            ];
            try {
                $this->userModel->checkRegister($data2);
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }
    }


    public function showFromLogin()
    {
        include_once "views/auth/login.php";
    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];

        if ($this->userModel->checkLogin($email, $password)) {
            $user = $this->userModel->getByEmail($email);
            $_SESSION["username"] = $user["name"];
            header("location:index.php");
        } else {
            var_dump("tai  khoan loi");
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?page=login");
    }
    public function checkAuth()
    {
        if (!isset($_SESSION["username"])) {
            header("location:index.php?page=login");
        }
    }

}