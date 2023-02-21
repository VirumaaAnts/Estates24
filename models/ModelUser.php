<?php
    class ModelUser {
        // password_hash($password, PASSWORD_DEFAULT);
        public static function checkUser() {
            $test=false;
            $emailFromForm = strtolower($_POST['log_email']);
            $database = new database();
            $response = $database -> getOne('SELECT * from users WHERE email = "'.$emailFromForm.'"');
            if($response != null){
                if($response['email'] == $emailFromForm && $response['password'] == password_verify($_POST['log_password'], $response['password'])){
                    $_SESSION['status']=session_id();
                    $_SESSION['role'] = $response['role'];
                    $_SESSION['email']=$response['email'];
                    $_SESSION['userId']=$response['id'];
                    $test=true;
                }
            }else{
                $test=false;
            }
            return $test;
        }
        public static function UserLogout(){
            unset($_SESSION['status']);
            unset($_SESSION['userId']);
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            unset($_SESSION['error']);
            session_destroy();
            return;
        }
    }
?>