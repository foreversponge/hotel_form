<?php
require "../a4q3Head.php";
$_SESSION['home']=true;
?>
<div style="height: 400px">
    <h1>Account has been successfully created </h1>
    <form action="redirector.php" method="post">
        <input type="submit" value="Go back to Main Page">
    </form>
</div>
<?php
require "../a4q3Foot.php";
?>