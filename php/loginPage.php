<?php
    require "../a4q3Head.php";
    $_SESSION['home']=true;
    if(isset($_SESSION['loginCount'])&& $_SESSION['loginCount']>0){
        $_SESSION['loginCount']++;
    }
    ?>
<div style="height: 350px">
    <form  action="userpassValidatorServerSide.php" method="post" onsubmit="return outputError()">


        <p>Please enter your username and password below. If you do not have a account, simply
            write a new username and password and your account will be created.
            A username can contain letters (both upper and lower case) and digits only. A password
            must be at least 6 characters long (characters are to be letters and
            digits only), have at least one letter and at least one digit.</p>
        <label>
            UserName <input type="text" id="username" name="username">
        </label><br/>

        <label>
            Password <input type="password" id="pass" name="password">
        </label>
        <?php

        if(isset($_SESSION['loginCount'])){
            $_SESSION['loginCount']++;
        }

        if(isset($_SESSION['correctPassword'])&& !$_SESSION['correctPassword']&& isset($_SESSION['loginCount'])&& $_SESSION['loginCount']<2){
            echo "<br/>Invalid Login!";
        }
        ?>

        <input type="submit" value="login" >

        <p id="inputMiss"></p>
    </form>
</div>

<script src="../js/userpassValidator.js"></script>

<?php
require "../a4q3Foot.php";
