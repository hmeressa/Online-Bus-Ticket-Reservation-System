<?php
if(isset($_POST["username"],$_POST["newusername"]))
{
$username=$_POST['username'];
// $oldpassword=$_POST['oldpassword'];
$newusername=$_POST['newusername'];
// $newpassword=$_POST['newpassword'];
// $confirmpassword=$_POST['confirmpassword'];

$connection=new mysqli("localhost","root","","Bus_Ticket_System");

if(mysqli_connect_error())
{
    echo "not connected";
}

else
{
    $selectInfo="select * from AdminTable";
    $resultInfo=mysqli_query($connection,$selectInfo);
          $update="update AdminTable set UserName='$newusername' where UserName='$username'";
          $result=mysqli_query($connection,$update); 
           if($result){
              echo 1;   
             }
           else{
               echo 2;
            }
}
}
?>