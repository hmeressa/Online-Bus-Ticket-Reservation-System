<?php
if(isset($_POST["username"],$_POST["newusername"]))
{
$username=$_POST['username'];
$newusername=$_POST['newusername'];

$connection=new mysqli("localhost","root","","Bus_Ticket_System");

if(mysqli_connect_error())
{
    echo "not connected";
}
else{
    $selectInfo="select * from PassnegerTable";
    $resultInfo=mysqli_query($connection,$selectInfo);

    $istrue =false;
    if(mysqli_num_rows($resultInfo) != 0)
    {
       while($row=mysqli_fetch_array($resultInfo)){
           $holder=$row['UserName'];
           $istrue=true;
           if($holder == $username){
            $update="update PassnegerTable set UserName='$newusername' where UserName='$username'";
            $result=mysqli_query($connection,$update); 
             if($result){
                echo 1;   
               }
            }
          }
       }
       if(!$istrue){
           echo 2;
       }

    }
}
?>