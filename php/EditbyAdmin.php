<?php
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
$id=$_POST['id'];
$text=$_POST['text'];
$column_name=$_POST['column_name'];

$sql1 = "UPDATE AddBuss SET $column_name = '$text'  WHERE SideNo = '$id'"; 
$sql2 = "UPDATE AddBuss SET $column_name = '$text'  WHERE BusName = '$id'"; 
$sql3 = "UPDATE AddBuss SET $column_name = '$text'  WHERE SeatNo = '$id'"; 
$sql4 = "UPDATE AddBuss SET $column_name = '$text'  WHERE PaleteeNo = '$id'";  

mysqli_query($connection, $sql1);
mysqli_query($connection, $sql2);
mysqli_query($connection, $sql3);
mysqli_query($connection, $sql4);


$sql = "UPDATE RouteDetail SET $column_name = '$text'  WHERE SideNo = '$id'"; 
$sql2 = "UPDATE RouteDetail SET $column_name = '$text'  WHERE Start = '$id'"; 
$sql3 = "UPDATE RouteDetail SET $column_name = '$text'  WHERE Destination = '$id'"; 
$sql4 = "UPDATE RouteDetail SET $column_name = '$text'  WHERE DepPrice = '$id'";  
$sql5 = "UPDATE RouteDetail SET $column_name = '$text'  WHERE ArrivalTime = '$id'"; 
$sql6 = "UPDATE RouteDetail SET $column_name = '$text'  WHERE Distance = '$id'";  

mysqli_query($connection, $sql);
mysqli_query($connection, $sql2);
mysqli_query($connection, $sql3);
mysqli_query($connection, $sql4);
mysqli_query($connection, $sql5);
mysqli_query($connection, $sql6);

echo "Do you want to update";

?>