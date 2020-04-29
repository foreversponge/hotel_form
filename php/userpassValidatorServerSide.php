<?php
session_start();
function validateUser(){
    $file = fopen("Accounts.txt","r+");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $match = false;

    $temp = fgets($file);
    $arrayOfAccount =  preg_split('/\s+/', $temp);
    foreach ($arrayOfAccount as $account){
        $user = substr($account,0,strpos($account,":"));
        $pass = substr($account,strpos($account,":")+1);

        if($user == $username && $pass == $password){
            $_SESSION['loggedIn'] = true;
            $_SESSION['name'] = $username;
            $_SESSION['correctPassword']=true;
            $match = true;
            header("Location: redirector.php");
            break;
        }elseif ($user == $username && ($pass != $password)){
            $_SESSION['loginCount'] =0;
            $_SESSION['correctPassword']=false;
            $_SESSION['loggedIn'] = false;
            $match = true;
            header("Location: redirector.php");
            break;
        }
    }

    if(!$match){
        fwrite($file, $username .":".$password ."\r");
        fclose($file);
        $_SESSION['loggedIn'] = true;
        $_SESSION['name'] = $username;
        header("Location: accountConfirmation.php");
    }
}

validateUser();