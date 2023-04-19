<?php
session_start();
session_unset();
header('location:../html/Loginpage.php');
// if(isset($_POST[$_SESSION['username']]))
// {
//     header('location:../html/Loginpage.php');
// }
?>