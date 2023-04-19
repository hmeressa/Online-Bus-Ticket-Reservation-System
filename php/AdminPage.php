<?php
session_start();
$username=$_SESSION['username'];
// if(!isset($_POST['UserName']))
// {
// header('location:../html/Loginpage.php');
// }
$connection=new mysqli("localhost","root","","Bus_Ticket_System");

//home

 echo '<div class="offset">';
 echo '<div class="container position-absolute" id="container1" style="background-image:url("../image/golderone.jpg"); transform: scale(0);margin-top:100px">';
 echo '<div class="row offset">';
 echo '<div class="col-sm-12">';
echo '<img src="../image/sky.jpeg" class="sky">';
echo '<img src="../image/imageroad1.jpeg" class="road1">';
echo '<img src="../image/imageroad1.jpeg" class="road2">';
echo '<img src="../image/building2.jpeg" class="buildings1">';
echo '<img src="../image/building2.jpeg" class="buildings2">';
echo '<img src="../image/car5.png" class="car">';
echo '<img src="../image/wheal4.png" class="wheel1">';
echo '<img src="../image/wheal4.png" class="wheel2">';
 echo '</div><center></div></div></div></div></div>';

//personal information

echo '<div class="container  position-absolute" id="container2" style="background-color: white; transform: scale(0);top:110px">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-6 offset"  style="background-color: white;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">Personal Information</label>';
echo '<div class="card-circle offset-2" style="border-color:yellow:10px;background:#388ed1;width:300px;height:400px;border-radius:7px;margin-top:10px;">';
echo '<div class="card-body">';
echo '<h1><i class="fa fa-user offset-5"></i></h1>';
echo '<div class="table-responsive" style="background:white;border-radius:5px"><br>';
echo '<table class="table table-borderless" style="background:#388ed1;">';
$select="select * from AdminTable where UserName='$username'";
$result=mysqli_query($connection,$select);
if(mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_assoc($result))
    {
      echo '<thead >';
      echo '<tr><center><h3 style="color:#388ed1;font-weight:bold; 
      text-shadow:0px 0px 1px black;
      font-family:abel;
      font-size:13px">Personal Information</h3></center></tr><br>';
      echo '<tr><th id="columns">UserName</th><td>' .$row['UserName'].'</td></tr>';
      echo '<tr><th id="columns">FullName</th><td>' .$row['FullName'].'</td></tr>';
      echo '<tr><th id="columns">Phone Number</th><td>' .$row['PhoneNo'].'</td></tr>';
      echo '<tr><th id="columns">Address</th><td>' .$row['Address'].'</td></tr>';
      echo '<tr><th id="columns">Age</th><td>' .$row['Age'].'</td></tr>';
      echo '<tr><th id="columns">Sex</th><td>' .$row['Gender'].'</td></tr>';
      echo '</thead>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

//about

echo '<div class="container  position-absolute" id="container14" style="background-color: white; transform: scale(0);top:110px">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-6 offset"  style="background-color: white;">';
echo '<div class="card-circle offset-2" style="border-color:yellow:10px;background:#388ed1;width:350px;height:400px;border-radius:7px;margin-top:10px;">';
echo '<div class="card-body">';

// echo '<nav class="navbar fixed-top navbar-expand-md   mb-3 offset- py-5" style="background:red;width:330px;margin-left:340px;margin-top:20px;">';

// echo '</nav>';
echo '<div class="table-responsive" style="background:white;border-radius:5px;">';
echo '<table class="table table-borderless" style="background:#388ed1;">';
echo '<center><img id="image" src="../image/smart.jpg" style="height:100px;width:310px;margin-top:5px;";></center>
<center><h3 id="db">Deveoped By</h3></center>
<tr id="db" style="background-color:white"><th>No</th><th>FullName</th><th>Id</th><th>Department</th></tr></thead><tbody><tr>
<tr style="background-color:white"><th>1</th><th>Hiluf Meressa</th><th>1463/10</th><th>Software</th></tr></thead><tbody><tr>
<tr style="background-color:white"><th>2</th><th>Bewket Dereje</th><th>0965/10</th><th>Software</th></tr></thead><tbody><tr>
<tr style="background-color:white"><th>3</th><th>Getnet Begashaw</th><th>1315/10</th><th>Software</th></tr></thead><tbody><tr>
<tr style="background-color:white"><th>4</th><th>Misganaw Getahun</th><th>0586/10</th><th>Software</th></tr></thead><tbody><tr>
<tr style="background-color:white"><th>5</th><th>Wallelgn Workie</th><th>2195/10</th><th>Software</th></tr></thead><tbody><tr>';

echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


//View Passengers
    echo '<div class="">';
    echo '<div class="container " id="container3" style="background-color: red; transform: scale(0);margin-top:130px;;">';
    echo '<div class="row" style="background-color: white">';

    echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
    // echo '<center><img id="image" src="../image/smart.jpg" style="height:200px;width:1265px;";></center>';
    echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List all Registered Passengers</label>';
echo '<div class="input-group search-box offset-1" style="margin-top:20px;" class="offset-1">';						
echo '<input type="text" class="form-control" placeholder="Search here..."  onkeyup="searchpassenger()" id="searchpass">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';
echo '<div class="table-responsive offset-1">';
    echo '<table class="table table-striped table table-bordered" id="passenger">';
    echo '<thead class="thead-light align-center" style="background-color:red" >
    <tr style="background-color:red"><th>No</th><th>UserName</th><th>FullName</th><th>PhoneNo</th>
    <th>Address</th><th>Age</th><th>Gender</th><th colspan="2" align="center">Actions</th>
    </tr></thead><tbody><tr>';
    $select="select * from PassnegerTable";
    $reslut=mysqli_query($connection,$select);
    if(mysqli_num_rows($reslut)>0)
    {
        $counter=0;
        while($row=mysqli_fetch_assoc($reslut))
        {
        $counter++;
        echo '<tr>';
        echo '<td>'.$counter.'</td>';
        echo '<td>'.$row['UserName'].'</td>';
        echo '<td>'.$row['FullName'].'</td>';
        echo '<td>'.$row['PhoneNo'].'</td>';
        echo '<td>'.$row['Address'].'</td>';
        echo '<td>'.$row['Age'].'</td>';
        echo '<td>'.$row['Gender'].'</td>';
        echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
        // echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';

            
        echo '</tr>';
        }
    }
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

////view Drivers
echo '<div class="offset-1">';
echo '<div class="container " id="container4" style="background-color: red; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List all Registered Drivers</label>';

echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..."  onkeyup="searchdriver()" id="searchdri">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="driver">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>UserName<th>FullName</th><th>PhoneNo</th>
<th>Address</th><th>Age</th><th>Gender</th><th colspan="2" align="center">Actions</th>
</tr></thead><tbody><tr>';
$select="select * from DriverTable";
$reslut=mysqli_query($connection,$select);
if(mysqli_num_rows($reslut)>0)
{
    $counter=0;
    while($row=mysqli_fetch_assoc($reslut))
    {
    $counter++;
    echo '<tr>';
    echo '<td>'.$counter.'</td>';
    echo '<td>'.$row['UserName'].'</td>';
    echo '<td>'.$row['FullName'].'</td>';
    echo '<td>'.$row['PhoneNo'].'</td>';
    echo '<td>'.$row['Address'].'</td>';
    echo '<td>'.$row['Age'].'</td>';
    echo '<td>'.$row['Sex'].'</td>';
    echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>'; 
    echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


//view  all busses

echo '<div class="offset-1">';
echo '<div class="container " id="container9" style="background-color: red; transform: scale(0);margin-top:30px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<img id="imgbus" src="../image/bus1.jpeg" class="offset-1" style="width:100%;height:200px;margin-top:-10px;border-radius:5px;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List of all Busses</label>';

echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..."  onkeyup="allbus()" id="allbus">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="allbustable" class="editable_table">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>BusName<th>Total Seat No</th><th>SideNo</th>
<th>PaleteNo</th><th colspan="2" align="center">Actions</th>
</tr></thead><tbody><tr>';

$select="select * from AddBuss";
$reslut=mysqli_query($connection,$select);

if(mysqli_num_rows($reslut)>0)
{
    $counter=0;
    while($row=mysqli_fetch_assoc($reslut))
    {
    $counter++;
    echo '<tr>';
    echo '<td>'.$counter.'</td>';
    echo '<td class="busname" data-id1="'.$row['BusName'].'" contenteditable>'.$row['BusName'].'</td>';
    echo '<td class="seatno"  data-id2="'.$row['SeatNo'].'"  contenteditable>'.$row['SeatNo'].'</td>';
    echo '<td class="sideno"  data-id3="'.$row['SideNo'].'" contenteditable>'.$row['SideNo'].'</td>';
    echo '<td class="targano" data-id4="'.$row['PaleteeNo'].'"  contenteditable>'.$row['PaleteeNo'].'</td>';
    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';   
    echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

//view available bus 

echo '<div class="offset-1">';
echo '<div class="container " id="container10" style="background-color: red; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
// echo '<img id="imgbus" src="../image/bus1.jpeg" class="offset" style="width:100%;height:200px;margin-top:-10px;border-radius:5px;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List of available Busses</label>';

echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="availablebus()" id="availablebus">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="availablebustable">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>BusName<th>Available Seat</th><th>SideNo</th>
<th>PaleteNo</th><th colspan="2">Actions</th>
</tr></thead><tbody><tr>';
$select="select * from AddBuss";
$reslut=mysqli_query($connection,$select);
if(mysqli_num_rows($reslut)>0)
{
    $counter=0;
    while($row=mysqli_fetch_assoc($reslut))
    {
    $counter++;
    // $remain=$row['Seat']
    echo '<tr>';
    echo '<td>'.$counter.'</td>';
    echo '<td>'.$row['BusName'].'</td>';
    echo '<td>'.$row['SeatNo'].'</td>';
    echo '<td>'.$row['SideNo'].'</td>';
    echo '<td>'.$row['PaleteeNo'].'</td>';
    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';

        
    echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

//view route detail

echo '<div class="offset-1">';
echo '<div class="container " id="container11" style="background-color: white; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
// echo '<img id="imgbus" src="../image/bus1.jpeg" class="offset" style="width:100%;height:200px;margin-top:-10px;border-radius:5px;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List of route details</label>';

echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="routedetailbus()" id="routedetailbus">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="routetable">';
echo '<thead class="thead-light align-center" style="background-color:white">
<tr style="background-color:white"><th>No</th><th>Side No<th>Starting</th><th>Destination</th><th>Price</th><th>Arrival Time</th><th>Distance</th>
<th colspan="2">Actions</th>
</tr></thead><tbody><tr>';
$select="select * from RouteDetail";
$reslut=mysqli_query($connection,$select);
if(mysqli_num_rows($reslut)>0)
{
    $counter=0;
    while($row=mysqli_fetch_assoc($reslut))
    {
    $counter++;
    // $remain=$row['Seat']
    echo '<tr>';
    echo '<td>'.$counter.'</td>';
    echo '<td class="sideno"   data-id1="'.$row['SideNo'].'" contenteditable>'.$row['SideNo'].'</td>';
    echo '<td class="start"    data-id2="'.$row['Start'].'"  contenteditable>'.$row['Start'].'</td>';
    echo '<td class="end"      data-id3="'.$row['Destination'].'" contenteditable>'.$row['Destination'].'</td>';
    echo '<td class="price"    data-id4="'.$row['DepPrice'].'"  contenteditable>'.$row['DepPrice'].'</td>';
    echo '<td class="time"     data-id5="'.$row['ArrivalTime'].'" contenteditable>'.$row['ArrivalTime'].'</td>';
    echo '<td class="distance" data-id6="'.$row['Distance'].'"  contenteditable>'.$row['Distance'].'</td>';

    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    echo '<td><div align="center"><a href="#" id="' . $row['SideNo'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';

        
    echo '</tr>';
    }
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

//view Booked passengers

echo '<div class="offset-1">';
echo '<div class="container " id="container5" style="background-color: white; transform: scale(0);margin-top:120px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List of Booked passengers</label>';
echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="searchbooked()" id="searchbooked">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';
    // echo '<i class="fa fa-search"></i>';
    // echo '<div class="col-sm-2">';
    // echo '<input type="text" name="search" class="form-control offset-1" onkeyup="searchbooked()" id="searchbooked" placeholder="Search item here by username">';
    echo '</div></div>';
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped  table-bordered" id="bookedpassenger">';
    echo '<thead class="thead-light align-center" style="background-color:red">
    <tr style="background-color:red"><th>No</th><th>UserName</th><th>Started</th>
    <th>Destination</th><th>SeatNo</th><th>SideNo</th><th>Price</th><th>AccountNo</th><th>Date</th><th>PhoneNo</th><th>Actions</th>
    </tr></thead><tbody><tr>';
    $select="select * from Booking";
    $reslut=mysqli_query($connection,$select);
    if(mysqli_num_rows($reslut)>0)
    {
        $counter=0;
        while($row=mysqli_fetch_assoc($reslut)){
        $counter++;
        echo '<tr class="record">';
        echo '<td>'.$counter.'</td>';
        echo '<td>'.$row['UserName'].'</td>';
        echo '<td>'.$row['Started'].'</td>';
        echo '<td>'.$row['Destination'].'</td>';
        echo '<td>'.$row['SeatNo'].'</td>';
        echo '<td>'.$row['SideNo'].'</td>';
        echo '<td>'.$row['Price'].'</td>';
        echo '<td>'.$row['AccountNo'].'</td>';
        echo '<td>'.$row['Date'].'</td>';
        echo '<td>'.$row['Phone'].'</td>';
        echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
        // echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';
            
        echo '</tr>';
        }
    }
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    //update profiles
    echo '<br><br><br><br>';
    echo '<div class="container offset position-absolute" id="container6" style=" transform: scale(0);margin-top:50px">';
    echo '<div class="row" style="background-color: white;">';  
    echo '<div class="col-lg-6 offset" style="margin-top:0px;background-color: white">';
    echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
    font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">Change your account</label>';
    echo '<div class="form-group row">';
    echo '<div class="col-sm-6">';
    echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="oldusername" class="form-control offset-1" id="username" placeholder="Enter your username" required>';
    echo '</div></div>';
    
    // echo '<div class="form-group row" >';
    // echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Password</label>';
    // echo '<div class="col-sm-6">';
    // echo '<input type="password" name="oldpassword" class="form-control offset-1" id="inputEmail" placeholder="Enter total no of seats" required>';
    // echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">NUserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="newusername" class="form-control offset-1" id="newusername" placeholder="Enter your Full Name" required>';
    echo '</div></div>';
    
    // echo '<div class="form-group row" >';
    // echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">NPassword</label>';
    // echo '<div class="col-sm-6">';
    // echo '<input type="password" name="newpassword" class="form-control offset-1" id="inputEmail" placeholder="Enter total no of seats" required>';
    // echo '</div></div>';
    
    // echo '<div class="form-group row" >';
    // echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Confirmpass</label>';
    // echo '<div class="col-sm-6">';
    // echo '<input type="password" name="confirmpassword" class="form-control offset-1" id="inputEmail" placeholder="Enter total no of seats" required>';
    // echo '</div></div>';
    
    echo '<div class="form-group row col-12">';
    echo '<div class="col-sm-12">';
    echo '<input  name="update" type="button" class="form-control btn-primary" id = "update1" value="Update" style="height:40px">';
    echo '<center><h6 id="msg"></h6></center>';
    echo '</div></div></div></div></div>';
    echo '</div></div></div>';


//add bus


echo '<div class="container offset position-absolute" id="container7" style=" transform: scale(0);margin-top:80px">';
echo '<div class="row" style="background-color: white;margin-top:-0px">';  
echo '<div class="col-lg-6 offset" style="margin-top:0px"><br><br>';

echo '<div class="form-group row">';
echo '<center><img id="image" src="../image/goldentwo.jpeg" style="height:60px;width:480px;border-radius:100%;;margin-top:-40px";></center>';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black"for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Add New Bus</label>';
echo '<div class="col-sm-6">';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">BusName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="busname" class="form-control" id="busname" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Start</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="start" class="form-control" id="start" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Destination</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="destination" class="form-control" id="end" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Price</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="price" class="form-control" id="price" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Time</label>';
echo '<div class="col-sm-6">';
echo '<input type="date" name="time" class="form-control" id="time" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1"><abrr title="kilo meter"> KM </abrr></label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="km" class="form-control" id="km" placeholder="enter bus name" required>';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">TotalSeat</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="seat" class="form-control offset-1" id="seat" placeholder="enter  total seat number" required>';
echo '</div></div>';


echo '<div class="form-group row col-12">';
echo '<div class="col-sm-12">';
echo '<input type="button" name="add1" class="form-control btn-primary" id="add" value="Add Bus" style="height:30px"><br>';
echo '<center><h6 id="msgbus" style="color:green; font-weight:bold;font-family:abel;
font-size:12px;text-shadow:1px 3px 4px red"></h6></center><br>
  <center><h6 id="msg1" style="color:green; font-weight:bold;font-family:abel;
font-size:20px;text-shadow:1px 3px 4px red"></h6></center>';
echo '</div></div>';
echo '</div>';

echo '</div></div></div>';
// echo '</form>';


  //payment for driver payment

echo '<div class="container offset position-absolute" id="container13" style=" transform: scale(0);margin-top:80px">';
echo '<div class="row" style="background-color: white;">';  
echo '<div class="col-lg-6 offset" style="margin-top:0px">';
echo '<div class="form-group row">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black"  for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Payment driver</label>';
echo '<div class="col-sm-6">';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="username" class="form-control offset-1" id="username1" placeholder="Enter your user name" >';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">PhoneNo</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="phone" class="form-control offset-1" id="phone1" placeholder="Enter phone no" >';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Fee</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="fee" class="form-control offset-1" id="fee" placeholder="Enter fee of driver" >';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Accountno</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="account" class="form-control offset-1" id="account" placeholder="Enter your account number" >';
echo '</div></div>';

echo '<div class="form-group row col-12">';
echo '<div class="col-sm-12">';
echo '<input  name="register" type="button" class=" form-control btn-primary" id="payment1" value="payment"style="height:30px">';
echo '</div></div>';
echo '<center><h6 id="driverpayment" style="color:green; font-weight:bold;font-family:abel;
font-size:12px;text-shadow:1px 3px 4px red"></h6></center><br>';
echo '</div></div></div></div></div></div>';


//add drivers
echo '<div class="container offset position-absolute" id="container8" style=" transform: scale(0);margin-top:80px">';
echo '<div class="row" style="background-color: white;">';  
echo '<div class="col-lg-6 offset" style="margin-top:0px">';
echo '<div class="form-group row">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black"  for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Add New Driver</label>';
echo '<div class="col-sm-6">';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">FullName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="fullname" class="form-control offset-1" id="fullname" placeholder="Enter your username" required>';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Age</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="age" class="form-control offset-1" id="age" placeholder="Enter total no of seats" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<div class="form-check form-check-inline">';
echo '<label for="inputEmail" class="col-sm-2 col-form-label offset-4">Gendor</label>';
echo '<input class="form-check-input col-sm-6 offset-3" type="radio" name="gender" value="Male"/><label for="">Male</label>';
echo '</div>';
echo '<div class="form-check form-check-inline">';
echo '<input class="form-check-input col-sm-10" type="radio" name="gender"  value="Female"/><label for=""> Female</label>';
echo '</div>';
echo '</div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">PhoneNo</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="phone" class="form-control offset-1" id="phone" placeholder="Enter total no of seats" required>';
echo '</div></div>';

echo '<div class="form-group row" >';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Address</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="address" class="form-control offset-1" id="address" placeholder="Enter total no of seats" required>';
echo '</div></div>';

echo '<div class="form-group row col-12">';
echo '<div class="col-sm-12">';
echo '<input  name="register" type="button" class=" form-control btn-primary" id="register" value="Register"style="height:40px">';
echo '</div></div>';
echo '<center><h6 id="msgdriver" style="color:green; font-weight:bold;font-family:abel;
font-size:12px;text-shadow:1px 3px 4px red"></h6></center><br>
  <center><h6 id="msg1" style="color:green; font-weight:bold;font-family:abel;
font-size:12px;text-shadow:1px 3px 4px red"></h6></center>';
echo '</div></div></div></div></div></div>';


//view available seats

echo '<div class="offset-1">';
echo '<div class="container " id="container12" style="background-color: red; transform: scale(0);margin-top:60px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">List available seats</label>';

echo '<div class="input-group search-box" style="margin-top:20px;">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="availableseats()" id="availableseats">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

// echo '<i class="fa fa-search"></i>';
// echo '<div class="col-sm-2">';
// echo '<input type="text" name="search" class="form-control offset-1" onkeyup="availableseats()" id="availableseats" placeholder="Search item here by username">';
// echo '</div></div>';
echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="availableseattable">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No<th>Side No</th><th>Booked Seat</th><th>Total Seat</th><th colspan="2">Actions</th>
</tr></thead><tbody><tr>';
$select="select SideNo,SeatNo from Booking";
$select1="select SeatNo from AddBuss";
$addbus=mysqli_query($connection,$select1);
if(mysqli_num_rows($addbus) > 0){
    while($row=mysqli_fetch_assoc($addbus)){
        $seatnumber=$row['SeatNo'];
    }
}
$reslut=mysqli_query($connection,$select);
if(mysqli_num_rows($reslut)>0)
{
    $counter=0;
    while($row=mysqli_fetch_assoc($reslut))
    {
    $counter++;
    echo '<tr>';
    echo '<td>'.$counter.'</td>';
    echo '<td>'.$row['SideNo'].'</td>';
    echo '<td>'.$row['SeatNo'].'</td>'; 
    echo '<td>'. $seatnumber.'</td>'; 
    echo '<td><div align="center"><a href="#" id="' . $row['BusName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    echo '<td><div align="center"><a href="#" id="' . $row['BusName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';
    echo '</tr>';
    }
    
}
echo '</table>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font_awesome/css/all.css">
    <script type="text/javascript" src="../jquary/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="jquery.js"></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../datetimepicker-master/build/jquery.datetimepicker.min.css">
    <script src="../datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
   <link rel="stylesheet" href="../css/Adminpage.css">

   
   <!-- <link rel="stylesheet" href="../vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/css/app.min.css">
    <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css"> -->
    <!-- <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"> -->
    <!-- <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/animate.css/animate.min.css"> -->

    <!-- <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/jquery/jquery.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/popper.js/popper.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables-buttons/buttons.print.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/jszip/jszip.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables-buttons/buttons.html5.min.js"></script>
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/js/app.min.js"></script>
    <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/CSS/app.min.css"> -->
    <title>Document</title>
</head>
<style>
tr 
{
    font-size:15px;
    background-color:whitesmoke;
    padding-top: 1em;
}
td{
    font-size:10px;
    text-align:left;
    text-transform:capitalize;
}
th
{
    font-size:12px;
    padding:3px;
    font-family:'Times New Roman', Times, serif;
    text-transform:capitalize;
    text-align:left;
    font-weight:bold;
    /* background:#388ed1; */
    
}
.search-box {
	position: relative;
}	
.search-box input.form-control {		
	padding-right: 35px;
	border-radius: 0;
	padding-left: 0;
	border-width: 0 0 3px 0;
	box-shadow: none;
}
.search-box input.form-control:focus {		
	border-color: red;		
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px 0 7px 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.col-form-label{
       font-size:13px;
       color:black;
       font-weight:bold;
   }
#image
{
box-shadow: 0px 0px 1px black;
background-color: red;
}
#columns{
 color:black;
  font-family:abel;
  font-size:12px;
}
#inputEmail
{
    height: 30px;
    margin-top: 12px;
    -webkit-box-shadow:inset 0 0 4px #000;
    margin-left: 10px;
  
}
#db
{
  color: #388ed1;
  font-weight: bold;
  /* font-size: 12px; */
}
#datetime,#fullname,#phone,#sex,#address,#register,#age,#fee,#account,#phone1,#username1
{
    height: 27px;
     font-size:10px;
     margin-top: 12px;
     border-color:#000; 
     text-align:center;
     border-top-style:none;
     border-left-style:none;
     border-right-style:none; 
     margin-left: 10px;color:black;;
}
#search
{
    height: 30px;
    margin-top: 12px;
    border-color:#000;
    -webkit-box-shadow:inset 0 0 4px #000;
    box-shadow:inset 0 0 7px #000;
    border-radius:20px;

}
#search:hover{
width:300px;
transition:0.5s;
height:35px;
}
#inputEmail:hover
{
   border-style: solid;;
}
.form-control {
    border: 0;
}
.navbar-nav a
{
font-weight:bold;
font-size:17px;
color:white;
}
.navbar-nav a:active
{
color:blue;
}
input[type="text"]
{
  color:black;
}
#username,#newusername,#update1,#busname,#price,#time,#km,#seat,#end,#start 
{
     height: 25px;
     margin-top: 12px;
     margin-left: 10px;
     font-size:12px;
     height: 27px;
     font-size:12px;
     margin-top: 12px;
     border-color:#000; 
     color:#388ed1;
     text-align:center;
     border-top-style:groove;
     border-left-style:none;
     border-right-style:none; 
     margin-left: 10px; 
}
#imgbus
{
    border-color:#000;
    -webkit-box-shadow:inset 0 0 4px #000;
    box-shadow:inset 0 0 7px #000;
    color:red;
}
#passengers,#drivers,#bus,#booked,#payment,#addbus,#viewbus,#adddriver,#route,#home,#help,
#logout,#profile,#viewseat,#viewavailablebus,#fb,#about,#setting,#more,#update
{
    font-size:12px;
    color:black;;
}
body
{
    /* padding: 0px;
    margin: 0px; */
    overflow-x: hidden;
}
.road1
{
    position: absolute;
    top: 65%;
    left: -5139px;
    animation: road1 10s infinite linear reverse;
}
.road2
{
    position: absolute;
    top: 65%;
    left: 0px;
    animation: road2 10s infinite linear reverse;
}
.buildings1
{
    position: absolute;
    top: -10%;
    left: -100%;
    width: 100%;
    animation: building1 10s infinite linear reverse;
}
.buildings2
{
    position: absolute;
    top: -10%;
    left: 0px;
    width: 100%;
    animation: building2 10s infinite linear reverse;
}
.car
{
    position: absolute;
    top: 280px;
    width: 80%;
    left: 14%;   
}
.wheel1
{
    position: absolute;
    top: 430px;
    left: 19.0%;
    width: 18%;
    animation: wheel 3s infinite linear;
}
.wheel2
{
    position: absolute;
    top: 430px;
    left: 68.0%;
    width: 18%;
    animation: wheel 3s infinite linear;
}

@keyframes road1
{
    from
    {
        left: -5139px;
    }
    to
    {
        left: 0px;
    }
}
@keyframes road2
{
    from
    {
        left: 0px;
    }
    to
    {
        left: 5139px;
    }
}

@keyframes building1
{
    from
    {
        left: -100%;
    }
    to
    {
        left: 0px;
    }
}
@keyframes building2
{
    from
    {
        left: 0px;
    }
    to
    {
        left: 100%;
    }
}
@keyframes wheel
{
    from
    {
        transform: rotate(0deg);
    }
    to
    {
        transform: rotate(360deg);
    }
}
.dropdown:hover .dropdown-menu{
  display: block;
}
</style>
<body bgcolor="gold">
<form action="AdminPage.php" method="POST">
<div class="container-fluid" style="background-color: red;">
<nav class="navbar fixed-top navbar-expand-md   mb-3 ">
        <button id="menu" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon color-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav navbar-nav ml-auto" style="margin-top:50px;margin-left:1000px"> 
             <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i>Home</a>

           <div class="dropdown-menu">
                <a href="#" class="dropdown-item" id="profile" class="hiluf">Personal information</a>
                <!-- <a href="#" class="dropdown-item" id="help" class="hiluf">Help</a> -->
                <a href="#" class="dropdown-item" id="home" class="hiluf">Menu</a>
                <a href="../php/Wellcome.php" class="dropdown-item" id="logout" class="hiluf">Logout</a>
           </div>

        </div>


            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i>Users </a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item" id="passengers" class="hiluf"> View Passengers</a>
                <a href="#" class="dropdown-item" id="drivers" class="hiluf">View Drivers</a>
                <a href="#" class="dropdown-item"  id="booked" class="hiluf">View Booked Passengers</a>
                <a href="#" class="dropdown-item" id="adddriver">Add Drivers</a>
                <a href="#" class="dropdown-item" id="payment">payment</a>

            </div>
        </div>


        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bus"></i>Manage Bus</a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item" id="addbus" class="hiluf">add new bus</a>
                <a href="#" class="dropdown-item" id="viewbus" class="hiluf">view all bus</a>
                <a href="#" class="dropdown-item" id="route" class="hiluf">View Routes</a>
                <a href="#" class="dropdown-item" id="viewavailablebus" class="hiluf">View available bus</a>
                <a href="#" class="dropdown-item" id="viewseat" class="hiluf">View available seats</a>

            </div>
        </div>

                <!-- <a href="#" data-toggle="tooltip" title="update your profile!" class="nav-item nav-link" id="update">Update</a> -->

            </div>
            <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-top:50px">Setting</a>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item" id="update">Change account</a>
                <a href="#" class="dropdown-item" id="about">About</a>
                <a href="#" class="dropdown-item" id="more">More</a>
            </div>
           </div>
          </div>
         </div>
       </div>    
</nav>
<br><br><br>
</form>
<!-- <form action="../php/Comment.php" method="POST">
<center><div id="feedback" style="width: 400px;
    height:300px;background:gray;transform:scale(0);position:absolute; margin-left: 
        auto;margin-top:-50px;
    margin-right: auto;left: 0; right: 0;">
<div class="col-sm-11">
<br><br>
       <div class="form-group">
        <input type="text" name="subject" id="email" class="form-control" placeholder="Enter your Email">
       </div>
       <div class="form-group">
        <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Enter your Comment"></textarea>
       </div>
    <div class="form-group row col-12">
    <div class="col-sm-12">
    <input type="submit" name="post" class=" form-control btn btn-info" id="inputEmail" value="Post"style="height:40px">
    </div></div>
       </div>
  </div></center>
</form> -->
<center>
<div id="ab" style="width: 400px;height:400px;background:gold;margin-top:50px;
   transform:scale(0);position:absolute; margin-left: auto;
   margin-right: auto;left: 0;right: 0;">
   <h1>this is about a page</h1>
</div></center>
<center><div id="set" style="width: 400px;height:400px;background:blue;margin-top:50px;
transform:scale(0);position:absolute; margin-left: auto;
    margin-right: auto;left: 0;right: 0;">
<h1>this is about page page</h1>
</div></center>

<script type="text/javascript">

history.pushState(null, null, window.location.href);
history.back();
window.onpopstate = () => history.forward();

function edit(id,text,column_name){

$.ajax({
  url:"../php/EditbyAdmin.php",
  method:"POST",
  data:{id:id,text:text,column_name:column_name},
  dataType:"text",
  success:function(data){
    // alert(data);
  }
});
}
// if(confirm("Are you sure you want to delete this Record?")){
$(document).on('blur','.sideno',function(){
var id=$(this).data("id1");
var sideno=$(this).text();
edit(id,sideno,"SideNo");
})
$(document).on('blur','.start',function(){
var id=$(this).data("id2");
var start=$(this).text();
edit(id,start,"Start");
})
$(document).on('blur','.end',function(){
var id=$(this).data("id3");
var end=$(this).text();
edit(id,end,"Destination");
})
$(document).on('blur','.price',function(){
var id=$(this).data("id4");
var price=$(this).text();
edit(id,price,"DepPrice");
})
$(document).on('blur','.time',function(){
var id=$(this).data("id5");
var time=$(this).text();
edit(id,time,"ArrivalTime");
})
$(document).on('blur','.distance',function(){
var id=$(this).data("id6");
var distance=$(this).text();
edit(id,distance,"Distance");
})
// }

function edit(id,text,column_name){

  $.ajax({
    url:"../php/EditbyAdmin.php",
    method:"POST",
    data:{id:id,text:text,column_name:column_name},
    dataType:"text",
    success:function(data){
      // alert(data);
    }
  });
}
// if(confirm("Are you sure you want to delete this Record?")){

$(document).on('blur','.busname',function(){
  var id=$(this).data("id1");
  var busname=$(this).text();
  edit(id,busname,"BusName");
})
$(document).on('blur','.seatno',function(){
  var id=$(this).data("id2");
  var seatno=$(this).text();
  edit(id,seatno,"SeatNo");
})
$(document).on('blur','.sideno',function(){
  var id=$(this).data("id3");
  var sideno=$(this).text();
  edit(id,sideno,"SideNo");
})
$(document).on('blur','.targano',function(){
  var id=$(this).data("id4");
  var targa=$(this).text();
  edit(id,targa,"PaleteeNo");
})
// }

$(document).ready(function(){
       $('#update1').click(function(){

         var username=$("#username").val();
         var newusername=$("#newusername").val();
         var usernamevalidate = /^[0-9a-zA-Z\s]+$/; 
         var newusernamevalidate = /^[0-9a-zA-Z\s]+$/; 

 if($.trim(username).length == 0 || $.trim(newusername).length == 0){
      $("#msg").html("fill all fileds");
      $("#msg").css("color","red");
 }
 else if(!username.match(usernamevalidate)){
    $("#msg").html("Please enter valid username");
    $("#msg").css("color","red");
}
else if(!newusername.match(newusernamevalidate)){
    $("#msg").html("Please enter valid new username");
    $("#msg").css("color","red");
}
else{
      $.ajax({  
      url: "../php/UpdateAdmin.php",
      method: "POST",
      data: {username:username,newusername:newusername},
      success: function(data){ 
          alert(data);
          if(data == 1)
          {
              $("#msg").html("successfully Updated");
          }
          else if(data==2)
           {
              $("#msg").html("Not Updated");
           }
          
           } 
      });
    }
         
    });
     }) ;

//add driver


$(document).ready(function(){
       $('#register').click(function()
       {
         var fullname=$("#fullname").val();
         var phone=$("#phone").val();
         var age=$("#age").val();
         var address=$("#address").val();
         var sex = $("input[name='gender']:checked").val();

         var fullnamevalidate = /^[a-zA-Z\s]+$/; 
         var phonevalidate= /^[0-9]+$/; 
         var phoneno = /^\d{10}$/;
         var sexvalidate= /^[a-zA-Z\s]+$/; 
         var agevalidate= /^[1-9]+$/; 
         var agelength = /^\d{2}$/;
         var validateaddress= /^[a-zA-Z\s]+$/; 

 if($.trim(fullname).length == 0 || $.trim(phone).length == 0 || $.trim(address).length == 0 || $.trim(age).length == 0 || $.trim(sex).length == 0 )
 {
      $("#msgdriver").html("Fill all fileds");
      $('#msgdriver').css("color","red");
 }
else if(!fullname.match(fullnamevalidate)){
    $("#msgdriver").html("Please enter valid Name");
    $("#msgdriver").css("color","red");
}

else if(!age.match(agevalidate) || !age.match(agelength))
{
    $("#msgdriver").html("Please enter valid age");
    $("#msgdriver").css("color","red");
}  
// else if(sex.match(sexvalidate))
// {
//     $("#msgdriver").html("Please enter valid sex");
//     $("#msgdriver").css("color","red");
// } 
 
else if( phone.charAt(0)!=0 && phone.charAt(1)!=9)
{ 
    $("#msgdriver").html("Please enter valid phone");
    $("#msgdriver").css("color","red");
} 
else if(!phone.match(phoneno) )
{ 
    $("#msgdriver").html("Please enter valid phone");
    $("#msgdriver").css("color","red");
} 
else if(!phone.match(phonevalidate) )
{ 
    $("#msgdriver").html("Please enter valid phone");
    $("#msgdriver").css("color","red");
}  
 else if(!address.match(validateaddress))
{ 
    $("#msgdriver").html("Please enter valid address");
    $("#msgdriver").css("color","red");
}  

    
 else{
      $.ajax({  
      url: "../php/RegistrationpageDriver.php",
      method: "POST",
      data: {fullname:fullname,age:age,phone:phone,address:address,sex:sex},  
      success: function(data){ 
          if(data == 1)
          {
              $("#msgdriver").html("database error");
              $("#msgdriver").css("color","red");
          }
          if(data==2)
           {
              $("#msgdriver").html("successfully Registered");
              $("#msgdriver").css("color","black");
              $('#fullname').val('');
              $('#age').val('');
              $('#phone').val('');
              $('#address').val('');
              $('#sex').val('');
          
           }
         else if(data==3)
           {
            $("#msgdriver").html("Not Registered");
            $("#msgdriver").css("color","red");
           }
          
           } 
      });
    }
         
    })
     }) 

     //payment for drivers

     $(document).ready(function(){
       $("#payment1").click(function(){
         var username1=$("#username1").val();
         var phone1=$("#phone1").val();
         var fee=$("#fee").val();
         var account=$("#account").val();

         var usernamevalidate1 = /^[0-9a-zA-Z\s]+$/; 
         var phonevalidate= /^[0-9]+$/;
         var phonelength=/^\d{10}$/;
         var feevalidate= /^[0-9]+$/;
         var accountvalidate= /^[0-9]+$/;
        //  var accountlength=/^\d{13}$/;

 if($.trim(username1).length == 0 || $.trim(phone1).length == 0 || $.trim(fee).length == 0 || $.trim(account).length == 0 )
 {
      $("#driverpayment").html("Fill fileds");
      $("#driverpayment").css("color","red");
 }
  else if(!username1.match(usernamevalidate1))
 {
    $("#driverpayment").html("Fill valid user name");
    $("#driverpayment").css("color","red");
 }
 else if(!phone1.match(phonevalidate))
 {
    $("#driverpayment").html("fill valid phone");
    $("#driverpayment").css("color","red");  
 }
 else if(!phone1.match(phonelength))
 {
    $("#driverpayment").html("fill valid phone");
    $("#driverpayment").css("color","red");  
 }
 else if(!fee.match(feevalidate))
 {
    $("#driverpayment").html("fill valid birr");
    $("#driverpayment").css("color","red");  
 }
 else if(!account.match(accountvalidate))
 {
    $("#driverpayment").html("fill valid account number");
    $("#driverpayment").css("color","red");  
 }
//  else if(!account.match(accountlength))
//  {
//     $("#driverpayment").html("fill valid account number");
//     $("#driverpayment").css("color","red");  
//  }

else{
      $.ajax({  
      url: "../php/PaymentDriver.php",
      method: "POST",
      data1: {username1:username1,phone1:phone1,fee:fee,account:account},
      success: function(data1){ 
       
          if(data1==1)
          {
              alert(data1);
              $("#driverpayment").html("successfully paied");
              $("#driverpayment").css("color","black");

              $('#username1').val('');
              $('#phone1').val('');
              $('#fee').val('');
              $('#account').val('');
          }
          else if(data1==2)
           {
              $("#driverpayment").html("Not paied");
           }
           } 
      });
    }
         
    })
     }) 

     //add bus 

$(document).ready(function(){
       $("#add").click(function(){
         var busname=$("#busname").val();
         var price=$("#price").val();
         var start=$("#start").val();
         var end=$("#end").val();
         var totalseat=$("#seat").val();
         var km=$("#km").val();
         var time=$('#time').val();


         var busnamevalidate = /^[a-zA-Z\s]+$/; 
         var pricevalidate= /^[0-9]+$/;
         var startvalidate= /^[a-zA-Z\s]+$/; 
         var endvalidate= /^[a-zA-Z\s]+$/; 
         var seatvalidate= /^[0-9]+$/; 
         var kmvalidate=  /^[0-9]+$/;  
         var timevalidate= /^[0-9]+$/; 

 if($.trim(busname).length == 0 || $.trim(price).length == 0 || $.trim(start).length == 0 || $.trim(end).length == 0 || $.trim(totalseat).length == 0 || $.trim(km).length == 0 || $.trim(time).length == 0 ){
         $("#msgbus").html("Fill fileds");
         $("#msgbus").css("color","red");
         $("#msgbus").fadeOut("20000");
         $("#add").click(function(){
         $("#msgbus").fadeIn(); });
     
 }
 else if(!busname.match(busnamevalidate))
 {
    $("#msgbus").html("Fill valid bus name");
      $("#msgbus").css("color","red");
 }
 else if(!start.match(startvalidate))
 {
    $("#msgbus").html("fill valid start");
      $("#msgbus").css("color","red");  
 }
 else if(!end.match(endvalidate))
 {
    $("#msgbus").html("fill valid end");
      $("#msgbus").css("color","red");
 }
 else if(!price.match(pricevalidate))
 {
    $("#msgbus").html("fill valid price");
      $("#msgbus").css("color","red"); 
 }
 else if(!km.match(kmvalidate))
 {
    $("#msgbus").html("fill valid km");
      $("#msgbus").css("color","red");
 }
 else if(!totalseat.match(seatvalidate))
 {
    $("#msgbus").html("fill seat no");
      $("#msgbus").css("color","red");
 }
else{
      $.ajax({  
      url: "../php/AddBus.php",
      method: "POST",
      data: {busname:busname,price:price,start:start,end:end,totalseat:totalseat,km:km,time:time},
      success: function(data){ 
          alert(data);
          if(data == 1)
          {
              $("#msgbus").html("successfully Register");
              $("#msgbus").css("color","black");
              $('#busname').val('');
              $('#price').val('');
              $('#start').val('');
              $('#end').val('');
              $('#km').val('');
              $('#time').val('');
              $('#seat').val('');
          }
          else if(data==2)
           {
              $("#msgbus").html("Not Registered");
           }
           else if(data==3)
           {
              $("#msgbus").html("seat no number is not valid");
           }
           } 
      });
    }
         
    });
     }) ;

function searchpassenger() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchpass");
  filter = input.value.toUpperCase();
  table = document.getElementById("passenger");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchdriver() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchdri");
  filter = input.value.toUpperCase();
  table = document.getElementById("driver");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchbooked() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchbooked");
  filter = input.value.toUpperCase();
  table = document.getElementById("bookedpassenger");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function allbus() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("allbus");
  filter = input.value.toUpperCase();
  table = document.getElementById("allbustable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function availablebus() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("availablebus");
  filter = input.value.toUpperCase();
  table = document.getElementById("availablebustable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function routedetailbus() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("routedetailbus");
  filter = input.value.toUpperCase();
  table = document.getElementById("routetable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function availableseats() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("availableseats");
  filter = input.value.toUpperCase();
  table = document.getElementById("availableseattable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


$(function() {
        $(document).on('click','.delbutton',function(e){
            e.preventDefault();
            var username=$(this).attr('id');
            var tr=$(this).closest("tr");
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
                url: "../php/DeleteByAdmin.php",
                type: "POST",
                data: {id:username},    
                success: function(data){ 
                    if(data==1)
                    {
                        tr.fadeOut(500,function()
                        {
                            tr.remove();
                        });
                    }
                 } 
            });
            
        }
        });
        });
     

$(function()
{
$("#datetime").datetimepicker();
});

//     $('#fb').click(function()
// {
//       document.getElementById("feedback").style.transform="scale(1)";
//       document.getElementById("ab").style.transform="scale(0)";
//       document.getElementById("set").style.transform="scale(0)";

// });
// $('#about').click(function()
// {
//     document.getElementById("feedback").style.transform="scale(0)";
//     document.getElementById("ab").style.transform="scale(1)";
//     document.getElementById("set").style.transform="scale(0)";
// });

// $('#setting').click(function()
// {
// document.getElementById("feedback").style.transform="scale(0)";
// document.getElementById("ab").style.transform="scale(0)";
// document.getElementById("set").style.transform="scale(1)";
// });
// $('#logout').click(function()
// {
//     location.href=('../php/Loginpage.php');
// })
$('#help').click(function()
{
    // document.getElementById("card1").style.visibility="visible";
})
    $('.navbar-collapse a').click(function(){
 $('.navbar-collapse').collapse('hide');
        });


        $('#home').click(function(){
           document.getElementById("container1").style.transform="scale(1)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        }
        );
        $('#payment').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(1)";
           document.getElementById("container14").style.transform="scale(0)";
        }
        );

        $('#profile').click(function(){

           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(1)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";
        }
        );
        $('#passengers').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(1)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";
        }
        );
        $('#drivers').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(1)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";
        }
        );
        $('#booked').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(1)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";
        }
        );
        $('#update').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(1)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        }
        );
        $('#addbus').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(1)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });

        $('#adddriver').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(1)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });
        $('#viewbus').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(1)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });
        $('#viewavailablebus').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(1)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });
        $('#route').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(1)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });
        $('#viewseat').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(1)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(0)";

        });
        $('#about').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
           document.getElementById("container11").style.transform="scale(0)";
           document.getElementById("container12").style.transform="scale(0)";
           document.getElementById("container13").style.transform="scale(0)";
           document.getElementById("container14").style.transform="scale(1)";

        });
    
    
    

</script>
</body>
</html>