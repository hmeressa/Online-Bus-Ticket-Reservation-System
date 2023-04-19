<?php
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
if(isset($_POST["username"],$_POST["busname"],$_POST["place"],$_POST["paleteeno"],$_POST["accident"],$_POST["date"],$_POST["phone"]))
{
$username=$_POST['username'];
$busname=$_POST['busname'];
$date=$_POST['date'];
$place=$_POST['place'];
$paleteeno=$_POST['paleteeno'];
$phone=$_POST['phone'];
$accident=$_POST['accident'];

$selectaddbus="SELECT * from AddBuss";
$selectdriver ="select * from DriverTable ";
$resultaddbus=mysqli_query($connection,$selectaddbus);
$resultdriver=mysqli_query($connection,$selectdriver);

$check=false;
$counter=0;
if(mysqli_num_rows($resultdriver) > 0){
//    echo $qu1;
   while($row=mysqli_fetch_assoc($resultdriver)){
        $driverusername=$row['UserName'];
        $phoneNo=$row['PhoneNo'];
        if($driverusername == $username && $phoneNo == $phone){
            if(mysqli_num_rows($resultaddbus)>0){
                while($row=mysqli_fetch_assoc($resultaddbus)){
                    $busname1=$row['BusName'];
                    $targano=$row['PaleteeNo'];
                if($busname1 ==$busname && $targano==$paleteeno){
                    $check=true;
$inserting="INSERT INTO AccidentTable values('$username','$busname','$paleteeno','$place','$accident','$phone','$date')";
if(mysqli_query($connection,$inserting))
{
    echo 1;
    $check=true;
}
}
}
if(!$check){
    echo 2;
}
}
}
// else
// {
//     echo 3;
// }
}
// echo $counter;
}
}
?>