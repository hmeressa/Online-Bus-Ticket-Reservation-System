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
  
  $driverresult = mysqli_query($connection,$driver);
  $passengerresult = mysqli_query($connection,$passenger);
  $adminresult=mysqli_query($connection,$admin);

//  if(mysqli_num_rows($passengerresult)>0){ 
   $isfound=false;

    while($row = mysqli_fetch_assoc($passengerresult))
    {
     if ($row['UserName']==$username && $row['Password']==$password) {
       $_SESSION['username']=$row['UserName'];
       $_SESSION['password']=$row['Password'];
         echo 1;
         $isfound=true;
     }
    }

    while($row = mysqli_fetch_assoc($adminresult)){
      if ($row['UserName']==$username && $row['Password']==$password){
      $_SESSION['username=']=$row['UserName'];
      $_SESSION['password']=$row['Password'];
         echo 2;
         $isfound=true;
     }
    }

    while($row = mysqli_fetch_assoc($driverresult)){
      if ($row['UserName']==$username && $row['Password']==$password){
      $_SESSION['username=']=$row['UserName'];
      $_SESSION['password']=$row['Password'];
         echo 3;
         $isfound=true;
     }
    }
    if(!$isfound)
    {
      echo 4;
    }
}

 