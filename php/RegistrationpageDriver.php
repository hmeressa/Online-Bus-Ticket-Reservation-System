<?php
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $sex=$_POST['sex'];
    $username=uniqid($fullname,);
    $fixed = '1000';
    $accountNo = $fixed.mt_rand( 100000000, 999999999);
    $md5=md5($password);  
    $connection=new mysqli("localhost","root","","Bus_Ticket_System");

    if(isset($_POST["fullname"] ,$_POST["phone"], $_POST["address"] , $_POST["age"], $_POST["sex"])){
       if(mysqli_connect_error())
       {
        echo 1;
       }
   else
   {
        $driverInfo="insert into DriverTable values('$username','$fullname','$age','$sex','$phone','$address')";         
        $driverAccount="insert into AccountDriver values('$username','$md5')";
        $driverBirr="insert into BirrDriver values('$username','0','$accountNo')";
        $one=mysqli_query($connection,$driverInfo);
        $two=mysqli_query($connection,$driverAccount); 
        $three=mysqli_query($connection,$driverBirr); 
        
        if($one)
        { 
            echo 2;
          
        }
        else
        {
            echo 3;
        }
       }
    }
?>
