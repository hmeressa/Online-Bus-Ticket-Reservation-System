<?php
session_start();
$username=$_SESSION['username'];
// if(!isset($_POST['UserName']))
// {
// header('location:../html/Loginpage.php');
// }
$connection=new mysqli("localhost","root","","Bus_Ticket_System");

//home

 echo '<div class="container position-absolute" id="container1" style="background-image:url("../image/goldentwo.jpeg");width:400px; transform: scale(1);">';
 echo '<div class="row offset">';
 echo '<div class="col-sm-6">';

 echo '</div></div></div>';

//personal information

// echo '<br><br><br><br>';
echo '<div class="container  position-absolute" id="container2" style="background-color: white; transform: scale(0);top:110px">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-6 offset"  style="background-color: white;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="">Personal Information</label>';
// echo '<img id="imgbus" src="../image/bus1.jpeg" class="offset" style="width:450px;height:100px;;border-radius:5px;margin-top:10px;">';
echo '<div class="card-circle offset-2" style="border-color:yellow:10px;background:#388ed1;width:300px;height:400px;border-radius:7px;margin-top:10px;">';
echo '<div class="card-body">';
echo '<h1><i class="fa fa-user offset-5"></i></h1>';
echo '<div class="table-responsive" style="background:white;border-radius:5px"><br>';
echo '<table class="table table-borderless" style="background:#388ed1;">';
$select="select * from DriverTable where UserName='$username'";
// echo $select;
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
      echo '<tr><th id="columns">Sex</th><td>' .$row['Sex'].'</td></tr>';
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


//Reporting from driver to admin

echo '<br><br><br>';
echo '<div class="container offset position-absolute" id="container3" style=" transform: scale(0);margin-top:60px">';
echo '<div class="row" style="background-color: white;margin-top:-0px">';  

echo '<div class="col-lg-6 offset" style="margin-top:0px"><br>';
echo '<div class="form-group row">';

echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black"for="inputEmail"  class="col-sm-6 offset-4 col-form-label" id="">Report</label>';
echo '<div class="col-sm-6">';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="username" class="form-control" id="username" placeholder="enter your username" required>';
echo '</div></div>';


echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">BusName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="busname" class="form-control" id="busname" placeholder="enter your bus name" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">PaletteNo</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="paleteeno" class="form-control" id="paleteeno" placeholder="Enter your palatee number " required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Place</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="place" class="form-control" id="place" placeholder="enter the place where an accident happend" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">AccidentType</label><br>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="accident" class="form-control" id="accident" placeholder="enter your accident type" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Date</label><br>';
echo '<div class="col-sm-6">';
echo '<input id="datetime" name="date" class="form-control" placeholder="Enter the time that accident happend"  required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Phone</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>';
echo '</div></div>';


echo '<div class="form-group row col-12">';
echo '<div class="col-sm-12">';

echo '<input type="button" name="reporting" class=" form-control btn-primary" id="reporting" value="Send Report"style="height:30px">';
echo '</div></div>';

echo '<center><h6 id="msgreport" style="color:green; font-weight:bold;font-family:abel;
font-size:13px;text-shadow:1px 3px 4px red"></h6></center><br>';
echo '</div><br>';
echo '</div></div></div>';

    //update profiles
    
    echo '<br><br><br><br>';
    echo '<div class="container offset position-absolute" id="container4" style=" transform: scale(0);margin-top:-20px">';
    echo '<div class="row" style="background-color: white;">';  
    echo '<div class="col-lg-6 offset" style="margin-top:0px;background-color: white">';
    echo '<div class="form-group row">';
    echo '<label style="color:black;font-weight:bold;font-family:abel;
    font-size:15px"" for="inputEmail"  class="col-sm-6 offset-3 col-form-label">Fill Form</label>';
    echo '<div class="col-sm-6">';
    echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="oldusername" class="form-control offset-1" id="username1" placeholder="Enter your username" >';
    echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">NUserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="newusername" class="form-control offset-1" id="newusername1" placeholder="Enter your Full Name" >';
    echo '</div></div>';
    
    
    echo '<div class="form-group row col-12">';
    echo '<div class="col-sm-12">';
    echo '<input  name="update" type="button" class="form-control btn-primary" id = "updateDriver" value="Update" style="height:40px">';
    echo '<center><h6 id="updated"></h6></center>';
    echo '</div></div></div></div></div>';
    echo '</div></div></div>';


//Booking details
    // echo '<div class="offset-1">';
    // echo '<div class="container " id="container5" style="background-color: red; transform: scale(0);margin-top:60px">';
    // echo '<div class="row" style="background-color: white">';
    // echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
    // echo '<h1><i class="fa fa-user offset-6"></i></h1>';
    // echo '<div class="table-responsive">';
    // echo '<table class="table table-striped table-hover table-bordered">';
    // echo '<thead class="thead-light align-center" style="background-color:red">
    // <tr style="background-color:red"><th>UserName<th>FullName</th><th>Started</th>
    // <th>Destination</th><th>SeatNo</th><th>SideNo</th><th>Price</th><th>AccountNo</th><th>SideNo</th><th colspan="2" align="center">Actions</th>
    // </tr></thead><tbody><tr>';
    // $select="select * from Booking where UserName='$username'";
    // $reslut=mysqli_query($connection,$select);
    // if(mysqli_num_rows($reslut)>0)
    // {
    //     $counter=0;
    //     while($row=mysqli_fetch_assoc($reslut))
    //     {
    //     $counter++;
    //     echo '<tr>';
    //     echo '<td>'.$row['UserName'].'</td>';
    //     echo '<td>'.$row['FullName'].'</td>';
    //     echo '<td>'.$row['Started'].'</td>';
    //     echo '<td>'.$row['Destination'].'</td>';
    //     echo '<td>'.$row['SeatNo'].'</td>';
    //     echo '<td>'.$row['SideNo'].'</td>';
    //     echo '<td>'.$row['Price'].'</td>';
    //     echo '<td>'.$row['AccountNo'].'</td>';
    //     echo '<td>'.$row['Datee'].'</td>';
    //     echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    //     echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';

            
    //     echo '</tr>';
    //     }
    // }
    // echo '</table>';
    // echo '</div>';
    // echo '</div>';
    // echo '</div>';
    // echo '</div>';
    // echo '</div>';
    // echo '</div>';

    //help

echo '<div class="offset">';
echo '<div class="container position-absolute" id="container6" style="transform: scale(0);background-color:white">';
echo '<div class="row offset">'; 

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '<div class="col-sm-6">';
echo '<div class="card-circle" style="border-color:yellow;border-width:10px;background:gray;">';
echo '<center><img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">';
echo '<div class="card-body">';
echo  '<h5 class="card-title">Bus Level one</h5>';
echo '<p>Buss Name  : Golden one</p>';
echo '<p>Palatee number : 1234</p>';
echo '<p>Targa  : 1234</p>';
echo '<p>Started from  : Addis Abeba</p>';
echo '<p>Destination  : Mekele</p>';
echo '<p>Price   : $100</p>';
echo '</div>';
echo '<center></div></div>';

echo '</div></div></div>';


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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../datetimepicker-master/build/jquery.datetimepicker.min.css">
    <script src="../datetimepicker-master/build/jquery.datetimepicker.full.js"></script>
   <link rel="stylesheet" href="../css/Userpage.css">
    <title>Document</title>
</head>
<style>
body
{    height: 100%;
   height: 100%;
   margin-top: 0px;;
    width:100%;
    padding:0;
    margin:0;
    overflow-x: hidden;
    /* background-image:url("../image/driver.jpeg"); */
}
#passengers,#drivers,#bus,#booked,#fb,#about,#setting,#more,#addbus,#viewallbus,#viewavailablebus,
#booking,#bookingdetail,#routedetail,#viewavailableseat,#about,#update,#fb,#help,#profile,#menu,#logout
{  font-size:11px;
    color:#388ed1;
}
.dropdown:hover .dropdown-menu{
  display: block;
}
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

.container
{
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
    transition:500ms;

    animation-name: animate;
    animation-direction: alternate-reverse;
    animation-duration:30s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-play-state:running;
    animation-timing-function: ease-in-out;
}

#image
{
box-shadow: 0px 0px 10px black;
background-color: red;
}

#ticket
{
    margin-top: 12px;
    border-color:#000;
    text-align:center;
    -webkit-box-shadow:inset 0 0 4px #000;
    box-shadow:inset 0 0 7px #000; 
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
color:red;
font-size:20px;
color:black;
}
.navbar-nav a:active
{
color:blue;
}
.col-form-label
{
    font-size:13px;
}
nav{
    background-color:  rgb(62, 142, 182);;
    -webkit-box-shadow: 0 0 1px rgb(3, 2, 2);
        box-shadow: 0 0 3px rgb(7, 4, 4);
}
.navbar-nav a
{
    font-size:23px;
    font-weight:bold;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px gold;
}

.col-lg-6{
    margin: auto;
  -webkit-box-shadow: 0 0 1px rgb(139, 126, 126);
  box-shadow: 0 0 1px rgb(158, 146, 146);
  background-color: white; 
}
#username,#busname,#accident,#paleteeno,#place,#phone,#datetime
   {
    
     height: 27px;
     font-size:10px;
     margin-top: 12px;
     border-color:#388ed1; 
     text-align:center;
     border-top-style:none;
     border-left-style:none;
     border-right-style:none; 
     margin-left: 10px; 
   }
</style>
<body bgcolor="gold">
<form action="DriverPage.php" method="POST">
<div class="container-fluid" style="background-color: red;">
<nav class="navbar fixed-top navbar-expand-md   mb-3">
        <button id="menu" type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon color-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav navbar-nav ml-auto" style="margin-top:50px;margin-left:1000px"> 
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home</a>
            <div class="dropdown-menu">
            <a href="#" class="dropdown-item" id="profile" class="hiluf">Personal information</a>
                <a href="#" class="dropdown-item" id="help" class="hiluf">Help</a>
                <a href="#" class="dropdown-item" id="menu" class="hiluf">Menu</a>
                <a href="../php/Logout.php" class="dropdown-item" id="logout" class="hiluf">Logout</a>
            </div>
        </div>
        <a href="#" data-toggle="tooltip" title="report the accident that has been occurred!" class="nav-item nav-link" id="report">Report</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
            <div class="dropdown-menu">
            <a href="#" class="dropdown-item"  id="update">Change account</a>
            <a href="#" class="dropdown-item" id="fb">FeedBack</a>
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
<form action="../php/Comment.php" method="POST">
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
</form>
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

//update driver info

$(document).ready(function(){
       $('#updateDriver').click(function(){

         var username=$("#username").val();
         var newusername=$("#newusername").val();

         var usernamevalidate = /^[0-9a-zA-Z\s]+$/; 
         var newusernamevalidate = /^[0-9a-zA-Z\s]+$/; 

 if($.trim(username).length == 0 || $.trim(newusername).length == 0){
      $("#updated").html("fill all fileds");
      $("#updated").css("color","red");
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
      url: "../php/UpdateDriver.php",
      method: "POST",
      data: {username:username,newusername:newusername},
      success: function(data){ 
          alert(data);
          if(data == 1)
          {
              $("#updated").html("successfully Updated");
              $('#username').val('');
          }
          else if(data==2)
           {
              $("#updated").html("Not Updated");
           }
          
           } 
      });
    }
         
    });
     }) ;

$(document).ready(function(){
       $('#pay').click(function(){

         var username=$("#username").val();
         var fullname=$("#fullname").val();
         var phone=$("#phone").val();
         var start=$("#start").val();
         var end=$("#end").val();
         var accountno=$("#accountno").val();
         var price=$("#price").val();
         var sideno=$("#sideno").val();
         var seatno=$("#seatno").val();
         var date=$("#date").val();

         var usernamevalidate = /^[0-9a-zA-Z\s]+$/; 
         var fullnamevalidate = /^[a-zA-Z\s]+$/; 
         var phonevalidate= /^[0-9]+$/;
         var startvalidate= /^[a-zA-Z\s]+$/; 
         var endvalidate= /^[a-zA-Z\s]+$/; 
         var accountnovaliate= /^[0-9]+$/; 
         var pricevalidate=  /^[0-9]+$/;  
         var seatnovalidate= /^[0-9]+$/; 
         var sidenovalidate= /^[0-9]+$/; 

 if($.trim(username).length == 0 || $.trim(fullname).length == 0 || $.trim(phone).length == 0 
 || $.trim(start).length == 0 || $.trim(end).length == 0 || $.trim(seatno).length == 0 
 || $.trim(sideno).length == 0 || $.trim(accountno).length == 0 || $.trim(price).length ==0){
      $("#msg").html("fill all fileds");
      $("#msg").css("color","red");
 }
 else if(!username.match(usernamevalidate)){
    $("#msg").html("Please enter valid username");
    $("#msg").css("color","red");
}
else if(!fullname.match(fullnamevalidate)){
    $("#msg").html("Please enter valid fullname");
    $("#msg").css("color","red");
}
 else if(!start.match(startvalidate)){ 
    $("#msg").html("Please enter valid stated country");
    $("#msg").css("color","red");
}  
else if(!end.match(endvalidate)){ 
    $("#msg").html("Please enter valid end country");
    $("#msg").css("color","red");
}  
else if(!seatno.match(seatnovalidate)){
    $("#msg").html("Please enter valid seat no");
    $("#msg").css("color","red");
}    
else if(sideno < 0 || sideno.length != 4|| !sideno.match(sidenovalidate)){
    $("#msg").html("Please enter valid side no");
    $("#msg").css("color","red");
}  
else if(!price.match(pricevalidate)){
    $("#msg").html("Please enter valid price");
    $("#msg").css("color","red");
}      
 
else if(accountno < 1 || accountno.length !=13 || !accountno.match(accountnovaliate)){
    $("#msg").html("Please enter valid account no");
    $("#msg").css("color","red");
}  
else if(!phone.match(phonevalidate)){ 
    $("#msg").html("Please enter valid phone");
    $("#msg").css("color","red");
} 

else{
      $.ajax({  
      url: "../php/PassengerBooking.php",
      method: "POST",
      data: {username:username,fullname:fullname,start:start,end:end,seatno:seatno,sideno:sideno,price:price,accountno:accountno,date:date,phone:phone},  
      success: function(data){ 
          alert(data);
          if(data == 1)
          {
              $("#msg").html("database error");
          }
          if(data==2)
           {
              $("#msg").html("successfully Registered");
           }
         else if(data==3)
           {
            $("#msg").html("Not Registered");
           }
          
           } 
      });
    }
         
    });
     }) ;

     $(document).ready(function(){
       $('#reporting').click(function(){

         var username=$("#username").val();
         var busname=$("#busname").val();
         var phone=$("#phone").val();
         var place=$("#place").val();
         var accident=$("#accident").val();
         var paleteeno=$("#paleteeno").val();
         var date=$("#datetime").val();

         var usernamevalidate = /^[0-9a-zA-Z\s]+$/; 
         var busnamevalidate = /^[a-zA-Z\s]+$/; 
         var phonevalidate= /^[0-9]+$/;
         var placevalidate= /^[a-zA-Z\s]+$/; 
         var accidentvalidate= /^[a-zA-Z\s]+$/; 
         var palattevalidate= /^\d{5}$/;
         var phoneno= /^\d{10}$/;

 if($.trim(username).length == 0 || $.trim(busname).length == 0 || $.trim(phone).length == 0 || $.trim(place).length == 0 ||
  $.trim(accident).length == 0 || $.trim(paleteeno).length == 0 || $.trim(date).length == 0 ){
      $("#msgreport").html("fill all fileds");
      $("#msgreport").css("color","red");
 }
 else if(!username.match(usernamevalidate)){
    $("#msgreport").html("Please enter valid username");
    $("#msgreport").css("color","red");
}
else if(!busname.match(busnamevalidate)){
    $("#msgreport").html("Please enter valid busname");
    $("#msgreport").css("color","red");
}
 else if(!place.match(placevalidate)){ 
    $("#msgreport").html("Please enter valid place");
    $("#msgreport").css("color","red");
}  
else if(!paleteeno.match(palattevalidate)){ 
    $("#msgreport").html("Please enter valid paletee number");
    $("#msgreport").css("color","red");
}  
else if( phone.charAt(0)!=0 && phone.charAt(1)!=9)
{ 
    $("#msgreport").html("Please enter valid phone");
    $("#msgreport").css("color","red");
} 
else if(!phone.match(phoneno) )
{ 
    $("#msgreport").html("Please enter valid phone");
    $("#msgreport").css("color","red");
} 
else if(!phone.match(phonevalidate) )
{ 
    $("#msgreport").html("Please enter valid phone");
    $("#msgreport").css("color","red");
}    
else if(!accident.match(accidentvalidate)){
    $("#msgreport").html("Please enter valid accident type");
    $("#msgreport").css("color","red");
}  
else{
      $.ajax({  
      url: "../php/reportByDriver.php",
      method: "POST",
      data: {username:username,busname:busname,place:place,phone:phone,accident:accident,paleteeno:paleteeno,date:date},  
      success: function(data){ 
          alert(data);
          if(data == 1)
          {
            $("#msgreport").html("successfully Reported");
            $("#msgreport").css("color","black");
              $('#username').val('');
              $('#phone').val('');
              $('#place').val('');
              $('#accident').val('');
              $('#paleteeno').val('');
              $('#datetime').val('');
              $('#busname').val('');
          }
          else if(data==2)
           {
              $("#msgreport").html("Not Reported");
           }
           } 
      });
    }
         
    });
     }) ;

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
      url: "../php/UpdatePassenger.php",
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
         
    })
     }) 


$(function() {
        $(document).on('click','.delbutton',function(){
        var element = $(this);
        var del_id = element.attr('id');
        var info = del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
                url: "../php/CancelTicket.php",
                type: "POST",
                data: {id:info},  
                success: function(data){ 
                    alert(data);
                 } 
            });
            $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
            .animate({ opacity: "hide" }, "slow");
        }
        });
        });
     



$(function()
{
$("#datetime").datetimepicker();
});

    $('#fb').click(function()
{
      document.getElementById("feedback").style.transform="scale(1)";
      document.getElementById("ab").style.transform="scale(0)";
      document.getElementById("set").style.transform="scale(0)";

});
$('#about').click(function()
{
    document.getElementById("feedback").style.transform="scale(0)";
    document.getElementById("ab").style.transform="scale(1)";
    document.getElementById("set").style.transform="scale(0)";
});

$('#setting').click(function()
{
document.getElementById("feedback").style.transform="scale(0)";
document.getElementById("ab").style.transform="scale(0)";
document.getElementById("set").style.transform="scale(1)";
});
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
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        $('#profile').click(function(){

           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(1)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        $('#report').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(1)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        $('#update').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(1)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(0)";
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        $('#bookingdetail').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(1)";
           document.getElementById("container6").style.transform="scale(0)";
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        $('#help').click(function(){
           document.getElementById("container1").style.transform="scale(0)";
           document.getElementById("container2").style.transform="scale(0)";
           document.getElementById("container3").style.transform="scale(0)";
           document.getElementById("container4").style.transform="scale(0)";
           document.getElementById("container5").style.transform="scale(0)";
           document.getElementById("container6").style.transform="scale(1)";
        //    document.getElementById("container7").style.transform="scale(0)";
        }
        );
        //   document.getElementById("container1").style.transform="scale(1)";
        //    document.getElementById("container2").style.transform="scale(0)";
        //    document.getElementById("container3").style.transform="scale(0)";
        //    document.getElementById("container4").style.transform="scale(0)";
        //    document.getElementById("container5").style.transform="scale(0)";
        //    document.getElementById("container6").style.transform="scale(0)";
        //    document.getElementById("container7").style.transform="scale(0)";
        //    document.getElementById("container8").style.transform="scale(0)";
        //    document.getElementById("container9").style.transform="scale(0)";
    

</script>
</body>
</html>