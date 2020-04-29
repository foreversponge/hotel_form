<!doctype html>
<html lang="en">
<head>
    <title>Hotel Reservation</title>
    <meta charset="utf-8"/>
    <script src="../js/privacy.js"></script>
    <script src="js/privacy.js"></script>
    <style type="text/css">

        body{
            background-color: rgb(242,245,169);
            margin:0;
            padding:0;
            height: 100%;
        }

        /*Reservation Information*/
        .info fieldset{
            background-color: rgb(238,204,255);
            border-color: rgb(37,40,191);
        }

        .info label{
            color:rgb(147,146,225);
        }

        .info legend{
            color: rgb(37,40,191);
        }

        /*Room specification*/
        .room fieldset{
            background-color: rgb(255,242,242);
            border-color: rgb(99,175,60);
        }

        .room label{
            color: rgb(51,204,92);
        }

        .room legend{
            color: rgb(99,175,60);
        }

        .prompt{
            font-weight: bold;
        }

        #hotel_logo{
            width: 100px;
            height:100%;
            float:left;
        }

        #banner{

            width: 100%;
            height:150px;

        }
        .title{

            position: relative;
            top:80px;
        }
        #suggestion{
            color:transparent;
            border: none;
        }
        #currentTime{
            position: absolute;
            width: 150px;
            top: 20px;
            right: 0;
            font-weight: 500;
            font-size: 20px;
        }

        footer{
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center;
            background: lightcoral;
            margin: 0;
            padding: 0;
            height: auto;
        }

        #searchResult{
            margin-bottom: 200px;
        }

        .login{
            position: absolute;
            top:5px;
            right:0;
            margin: 10px;
        }
    </style>
</head>
<body>
<div id="banner">
    <?php
    session_start();
        ?>
    <a href='../SearchPage.php'><img id='hotel_logo' src='Hotel.png'' alt='hotel'/></a>
    <h1 class="title">Hotel Reservation Form</h1>
    <p id="currentTime"></p>
    <script src="js/generateTime.js"></script>
    <script src="../js/generateTime.js"></script>
</div>
<hr/>