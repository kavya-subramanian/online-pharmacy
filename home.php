<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php')
}
?>
<html>
    <body>
        <a href= "logout.php">LOGOUT</a>
        welcome
</body>
</html>
