<?php
session_start();
$passusername=$_SESSION['passusername'];
$passprice=$_SESSION['passprice'];
$net=$passprice * 0.1;

$adminusername=$_SESSION['usernameadmin'];
$adminprice=$_SESSION['adminbirr'];

$connection=new mysqli("localhost","root","","Bus_Ticket_System");
$username=$_POST['id'];

$deletepass="DELETE from PassnegerTable where UserName='$username'";
$reslut1=mysqli_query($connection,$deletepass);
if($reslut1)
{
  $selectbirrpassenger="SELECT * FROM BirrPassenger";
  $selectbirrAdmin="SELECT * FROM AdminBirr";

  $resultPassenger=mysqli_query($connection,$selectbirrpassenger);
  $resultAdmin=mysqli_query($connection,$selectbirrAdmin); 

  if(mysqli_num_rows($resultPassenger) > 0){
    while($row=mysqli_fetch_array($resultPassenger)){
      $passbirr=$row['Birr'];
      $operation1=$passbirr + $passprice;
      $resultp="UPDATE PassnegerTable SET Birr = '$operation1' where UserName='$passusername'";
      mysqli_query($connection,$resultp);

      if(mysqli_num_rows($resultAdmin) > 0){
        while($row=mysqli_fetch_array($resultAdmin)){
          $adminbirr=$row['Birr'];
          $operation2=$adminbirr - $net;
          $resultp="UPDATE AdminBirr SET Birr = '$operation2' where UserName='$adminusername'";
          mysqli_query($connection,$resultp);
          echo 1;
        }
      }
    }
  }
}
else {
  echo 0;
}
?>