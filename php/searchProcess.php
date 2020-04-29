<?php
require "../a4q3Head.php";
$_SESSION['home']=true;
$file = fopen("Hotels.txt", "r");
$listOfHotel = array();
$count = 0;
//$_POST['nbOfRooms'];

while(! feof($file)){
    $listOfHotel[$count] = fgets($file);
    $count++;
}
?>
<div style="height: 800px; text-align: center">
    <?php

    $count =0;
        foreach ($listOfHotel as $value){
            $temp = preg_split('/,/', $value);
            if(checkPrice($temp[4])&& checkNbOfRoom($temp[2])&& checkFacilities($temp[3])&&  checkLocation($temp[0])){
                if(isset($_SESSION['loggedIn'])&& $_SESSION['loggedIn']==true){
                    echo "<p>". $temp[0] .", " . $temp[1]. " with " . $temp[2] ." rooms available, a ". $temp[3]
                        . " and cost " . $temp[4] ."$</p>";
                    $count++;
                }else{
                    $count++;
                    echo "<p>There is rooms in ". $temp[0] . " Please login to see the specific information</p>";
                    echo "<form action='loginPage.php'><input type='submit' value='login to show the address'>";
                }

            }
        }
        if($count==0){
            echo "No available hotel that meets your requirement";
        }
    ?>
</div>

<?php
function checkPrice($price){
    if(!isset($_POST['Price']))
        return false;

    if($_POST['Price']=="idc")
        return true;

    if($price<(int)$_POST['Price']){
        return true;
    }else
        return false;
}
function checkNbOfRoom($nbOfRoom){
    if(!isset($_POST['nbOfRooms']))
        return false;
    if($nbOfRoom>=(int)$_POST['nbOfRooms'])
        return true;
    else
        return false;
}

function checkFacilities($facilities){
    if(!isset($_POST['facilities']))
        return false;
    if(in_array($facilities, $_POST['facilities']))
        return true;
    else
    return false;
}

function checkLocation($locations){
    if(!isset($_POST['location']))
        return false;
    if(in_array("DontCare", $_POST['location'])){
        return true;
    }
    if(in_array($locations,$_POST['location']))
        return true;
    else
    return false;
}

require "../a4q3Foot.php";