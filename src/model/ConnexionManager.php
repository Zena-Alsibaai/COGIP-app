<?php

declare(strict_types=1);

require_once '../model/Manager.php';
session_start();

class ConnexionManager extends Manager {
    public function connec() {
        $username = $password = $confirm_password = "";
        $username_err = $password_err = $confirm_password_err = "";

        if(isset($_POST["submit"])) {
            if(empty(trim($_POST["username"]))) {
                $username_err = "Please enter a username.";
            } else {
                $username = trim($_POST["username"]);
            }

            if(empty(trim($_POST["password"]))) {
                $password_err = "Please enter your password.";
            } else{
                $password = trim($_POST["password"]);
            }
        }

    }
}

?>