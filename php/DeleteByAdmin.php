<?php
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
$username=$_POST['id'];
$id=$_POST['id'];
$text=$_POST['text'];
$column_name=$_POST['column_name'];

$deletepassenger="DELETE from PassnegerTable where UserName='$username'";
$deletedriver="DELETE from DriverTable where UserName='$username'";
$deletebus="DELETE from AddBuss where SideNo='$username'";


$reslut1=mysqli_query($connection,$deletepassenger);
$reslut1=mysqli_query($connection,$deletedriver);
$reslut1=mysqli_query($connection,$deletebus);

if($reslut1)
{
  echo 1;
}
else {
  echo 0;
}
?>