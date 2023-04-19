<?php 
session_start();
$host="localhost";
$dbusername="root";
$dbpassword="";
$databasename="Bus_Ticket_System";

$connection=new mysqli("localhost","root","","Bus_Ticket_System");

if (isset($_POST["login"])) {

  $username=mysqli_real_escape_string($connection,$_POST["name"]);
  $password=mysqli_real_escape_string($connection,$_POST["pass"]);
  
  
  $passenger= "select * from AccountPassenger";
  $driver= "select * from AccountDriver";
  $admin= "select * from AdminAccount";
  
  $passengerresult = mysqli_query($connection,$passenger);
  $driverresult = mysqli_query($connection,$driver);
  $adminresult=mysqli_query($connection,$admin);
  $isfound=false;
  if(mysqli_num_rows($passengerresult) > 0){ 

    while($row = mysqli_fetch_assoc($passengerresult))
    {
     if ($row['UserName'] == $username && $row['Password']==$password) {
         
       $_SESSION['username']=$row['UserName'];
       $_SESSION['password']=$row['Password']; 
         echo 1;
         $isfound=true;
     }
    }
  }
  if(mysqli_num_rows($adminresult) == 1){ 
    while($row = mysqli_fetch_assoc($adminresult)){
      if ($row['UserName']==$username && $row['Password']==$password){
      $_SESSION['username']=$row['UserName'];
      $_SESSION['password']=$row['Password'];
         echo 2;
         $isfound=true;
     }
    }
  }
  if(mysqli_num_rows($driverresult)>0){ 
    while($row = mysqli_fetch_assoc($driverresult)){
      if ($row['UserName']==$username && $row['Password']==$password){
      $_SESSION['username']=$row['UserName'];
      $_SESSION['password']=$row['Password'];
         echo 3;
         $isfound=true;
     }
    }
  }
    if(!$isfound)
    {
      echo 4;
    }
}
