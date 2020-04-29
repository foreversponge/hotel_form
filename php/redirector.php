<?php
session_start();
if(isset($_POST['logout'])&& $_POST['logout']=='logout'){
    session_destroy();
    header("Location: ../searchPage.php");

}elseif(isset($_SESSION['loggedIn'])&& $_SESSION['loggedIn']==true){
    header("Location: ../searchPage.php");
}
else{
    $_SESSION['loggedIn'] = false;
    $_SESSION['correctPassword'] = false;
    header("Location: loginPage.php");
}