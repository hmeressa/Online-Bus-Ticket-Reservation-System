<?php
session_start();
$username=$_SESSION['username'];
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
//home

echo '<div class="offset-1">';
echo '<div class="container position-absolute" id="container1" style="; transform: scale(1);margin-top:80px;background-image:url("../image/bus1.jpeg")">';
echo '<div class="row offset">';
echo '<div class="col-sm-12" style="background-image:url("../image/bus1.jpeg")">';

echo '<div class="container-lg my-5">';
echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">';

echo '<ol class="carousel-indicators">';
echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
echo '<li data-target="#myCarousel" data-slide-to="1"></li>';
echo '<li data-target="#myCarousel" data-slide-to="2"></li>';
echo '</ol>';

echo '<div class="carousel-inner">';

echo '<div class="carousel-item active">';
echo '<img src="../image/bus1.jpeg" alt="First Slide"  style="width:100%">';
echo '</div>';

echo '<div class="carousel-item">';
echo '<img src="../image/tesafari.jpg" alt="First Slide"  style="width:100%">';
echo '</div>';

echo '<div class="carousel-item">';
echo '<img src="../image/im3.jpg" alt="First Slide" style="width:100%">';
echo '</div>';

echo '</div>';
echo '<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">';
echo '    <span class="carousel-control-prev-icon"></span>';
echo '</a>';
echo '<a class="carousel-control-next" href="#myCarousel" data-slide="next">';
echo '<span class="carousel-control-next-icon"></span>';
echo '</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div><center>';

echo '</div></div></div>';
//personal information

echo '<div class="container  position-absolute" id="container2" style="background-color: white; transform: scale(0);top:110px">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-6 offset"  style="background-color: white;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-8 offset-3 col-form-label" id="ticket">Personal Information</label>';
// echo '<img id="imgbus" src="../image/bus1.jpeg" class="offset" style="width:450px;height:100px;;border-radius:5px;margin-top:10px;">';
echo '<div class="card-circle offset-2" style="border-color:yellow:10px;background:#388ed1;width:300px;height:400px;border-radius:7px;margin-top:10px;">';
echo '<div class="card-body">';
echo '<h1><i class="fa fa-user offset-5"></i></h1>';
echo '<div class="table-responsive" style="background:white;border-radius:5px"><br>';
echo '<table class="table table-borderless" style="background:#388ed1;">';
$select="select * from PassnegerTable where UserName='$username'";
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

//view all bus 

echo '<div class="offset-1">';
echo '<div class="container " id="container7" style="background-color: red; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">List Of all Busses</label>';

echo '<div class="input-group search-box offset-1" style="margin-top:20px;" class="offset-1">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="viewallbus1()" id="viewallbus1">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="viewallbus2">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>BusName<th>Total Seat No</th><th>SideNo</th>
<th>PaleteNo</th>
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
    echo '<td>'.$row['BusName'].'</td>';
    echo '<td>'.$row['SeatNo'].'</td>';
    echo '<td>'.$row['SideNo'].'</td>';
    echo '<td>'.$row['PaleteeNo'].'</td>';
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

//view available bus 

echo '<div class="offset-1">';
echo '<div class="container " id="container8" style="background-color: red; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">List Of available Busses</label>';


echo '<div class="input-group search-box offset-1" style="margin-top:20px;" class="offset-1">';						
echo '<input type="text" class="form-control" placeholder="Search here..." onkeyup="viewavailablebus1()" id="viewavailablebus1">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="viewavailablebus2">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>BusName<th>Available Seat</th><th>SideNo</th>
<th>PaleteNo</th>
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
    echo '<td>'.$row['BusName'].'</td>';
    echo '<td>'.$row['SeatNo'].'</td>';
    echo '<td>'.$row['SideNo'].'</td>';
    echo '<td>'.$row['PaleteeNo'].'</td>'; 
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
echo '<div class="container " id="container9" style="background-color: red; transform: scale(0);margin-top:130px;">';
echo '<div class="row" style="background-color: white">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">View Route detail</label>';

echo '<div class="input-group search-box offset-1" style="margin-top:20px;" class="offset-1">';						
echo '<input type="text" class="form-control" placeholder="Search here..."  onkeyup="viewallroute1()" id="viewallroute1"">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';

// echo '<i class="fa fa-search"></i>';
// echo '<div class="col-sm-6">';
// echo '<input type="text" name="search" class="form-control offset" onkeyup="viewallroute1()" id="viewallroute1" placeholder="Search item here by username">';
// echo '</div></div>';

echo '<div class="table-responsive">';
echo '<table class="table table-striped table-bordered" id="viewallroute2">';
echo '<thead class="thead-light align-center" style="background-color:red">
<tr style="background-color:red"><th>No</th><th>Side No<th>Starting</th><th>Destination</th><th>Price</th><th>Arrival Time</th><th>Distance</th>
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
    echo '<td>'.$row['SideNo'].'</td>';
    echo '<td>'.$row['Start'].'</td>';
    echo '<td>'.$row['Destination'].'</td>';
    echo '<td>'.$row['DepPrice'].'</td>';
    echo '<td>'.$row['ArrivalTime'].'</td>';
    echo '<td>'.$row['Distance'].'</td>';
    // echo '<td><div align="center"><a href="#" id="' . $row['BusName'] . '" class="delbutton" title="Click To Delete"><i class="fa fa-trash" style="color:red"></i></a></div></td>';
    // echo '<td><div align="center"><a href="#" id="' . $row['BusName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';
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


//booking
echo '<br><br><br>';
echo '<div class="container offset position-absolute" id="container3" style=" transform: scale(0);margin-top:60px">';
echo '<div class="row" style="background-color: white;margin-top:-0px">';  

echo '<div class="col-lg-6 offset"><br><br>';
echo '<div class="form-group row">';
echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Pay Ticket Form</label>';
echo '<div class="col-sm-6">';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="username" class="form-control" id="username" placeholder="enter your username" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1";>SideNo</label><br>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="sideno" class="form-control" id="sideno"  placeholder="enter your side no" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Started</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="start" class="form-control" id="start" placeholder="enter your place" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Destination</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="destination" class="form-control" id="end"  placeholder="enter your Destination" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">SeatNo</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="seatno" class="form-control" id="seatno" placeholder="Enter your  Seat number" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">DepPrice</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="price" class="form-control" id="price" placeholder="enter your price" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">AccountNo</label><br>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="accountno" class="form-control" id="accountno"  placeholder="enter your account number" required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Date</label><br>';
echo '<div class="col-sm-6">';
echo '<input id="datetime" name="date" class="form-control" placeholder="select departure date"  required>';
echo '</div></div>';

echo '<div class="form-group row">';
echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Phone</label>';
echo '<div class="col-sm-6">';
echo '<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>';
echo '</div></div>';

echo '<div class="form-group row col-12">';
echo '<div class="col-sm-12">';
echo '<input type="button" name="pay" class=" form-control btn-primary" id="pay" value="Pay Ticket"style="height:40px">';
echo '</div></div>';
echo '<center><h6 id="msg2" style="color:green; font-weight:bold;font-family:abel;
font-size:13px;text-shadow:1px 3px 4px red"></h6></center><br>
  <center><h6 id="msg1" style="color:green; font-weight:bold;font-family:abel;
font-size:13px;text-shadow:1px 3px 4px red"></h6></center>';
echo '</div><br>';
echo '</div></div></div>';


    //update profiles

    echo '<br><br><br><br>';
    echo '<div class="container offset position-absolute" id="container4" style=" transform: scale(0);margin-top:50px">';
    echo '<div class="row" style="background-color: white;">';  
    echo '<div class="col-lg-6 offset" style="margin-top:0px;background-color: white">';
    echo '<div class="form-group row">';

   echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
   font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Update Your Account</label>';
   echo '<div class="col-sm-6">';
   echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">UserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="oldusername" class="form-control offset-1" id="oldusername" placeholder="Enter your username" required>';
    echo '</div></div>';
    
    // echo '<div class="form-group row" >';
    // echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">Password</label>';
    // echo '<div class="col-sm-6">';
    // echo '<input type="password" name="oldpassword" class="form-control offset-1" id="inputEmail" placeholder="Enter total no of seats" required>';
    // echo '</div></div>';
    
    echo '<div class="form-group row" >';
    echo '<label for="inputEmail"  class="col-sm-2 col-form-label offset-1">NUserName</label>';
    echo '<div class="col-sm-6">';
    echo '<input type="text" name="newusername" class="form-control offset-1" id="newoneusername" placeholder="Enter your Full Name" required>';
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
    echo '<input  name="update" type="button" class="form-control btn-primary" id = "update2" value="Update" style="height:40px"><br>';
    echo '<center><h6 id="msg" style="color:green; font-weight:bold;font-family:abel;
    font-size:13px;text-shadow:1px 3px 4px red"></h6></center>';
    echo '</div></div></div></div></div>';
    echo '</div></div></div>';


//Booking details

    echo '<div class="offset-1">';
    echo '<div class="container " id="container5" style="background-color: red; transform: scale(0);margin-top:30px">';
    echo '<div class="row" style="background-color: white">';
    echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
    echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
    font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">Your Booking detail</label>';
    echo '<div class="col-sm-6">';
    echo '</div></div>';
    echo '<div class="table-responsive">';
    echo ' <table id="data-table" class="table table-bordered">';
    echo '<thead class="thead-default">';
    echo ' <tr>
             <th>No</th>
              <th>UserName</th>
              <th>Starting</th>
              <th>Destination</th>
              <th>SeatNo</th>
              <th>SideNo</th>
              <th>Price</th>
              <th>AccountNo</th>
              <th>Date</th>
              <th>PhoneNo</th>
              <th colspan="2" align="center">Actions</th></tr></thead><tbody><tr>';;

    $select="select * from Booking where UserName='$username'";
    $reslut=mysqli_query($connection,$select);
    if(mysqli_num_rows($reslut)>0)
    {
        $counter=0;
        while($row=mysqli_fetch_assoc($reslut))
        {
        $counter++;
        echo '<tr class="record1">';
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
        echo '<td><div align="center"><a href="#" id="' . $row['UserName'] . '" class="editbutton " title="Click To Delete"><i class="fa fa-edit" ></i></a></div></td>';

            
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
    


    //view avalilbel seats 

    echo '<div class="offset-1">';
    echo '<div class="container " id="container10" style="background-color: red; transform: scale(0);margin-top:60px">';
    echo '<div class="row" style="background-color: white">';
    echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
    echo '<div class="col-lg-12 offset"  style="background-color: white;margin:auto;">';
    echo '<label style="color:#388ed1; font-weight:normal;font-family:abel;
font-size:20px;text-shadow:1px 1px 1px black" for="inputEmail"  class="col-sm-6 offset-3 col-form-label" id="ticket">View Available Seats</label>';
    
echo '<div class="input-group search-box offset-1" style="margin-top:20px;" class="offset-1">';						
echo '<input type="text" class="form-control" placeholder="Search here..."  onkeyup="viewavailableseats1()" id="viewavailableseats1">';
echo '<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>';
echo '</div>';


    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-hover table-bordered" id="viewavailableseats2">';
    echo '<thead class="thead-light align-center" style="background-color:red">
    <tr style="background-color:red"><th>No<th>Side No</th><th>Booked Seat</th>
    </tr></thead><tbody><tr>';
    $select1="select * from Booking";
    $select2="select * from AddBuss";
    $booking=mysqli_query($connection,$select1);
    $addbus=mysqli_query($connection,$select2);
    if(mysqli_num_rows($addbus) > 0){
        while($row=mysqli_fetch_assoc($addbus)){
            $seatnumber=$row['SeatNo'];
            
        }
        // echo $seatnumber;
    }
    if(mysqli_num_rows($booking)>0)
    {
        $counter=0;
        while($row=mysqli_fetch_assoc($booking))
        {
        $counter++;
        echo '<tr>';
        echo '<td>'.$counter.'</td>';
        echo '<td>'.$row['SideNo'].'</td>';
        echo '<td>'.$row['SeatNo'].'</td>'; 
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

    //help
echo '<div class="offset-1">';
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

   <!-- <link rel="stylesheet" href="../vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/css/app.min.css">
    <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <<link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"> -->
    <!-- <link rel="stylesheet" href="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/animate.css/animate.min.css"> -->
<!-- 
    <script src="../assets/byrushan.com/projects/material-admin/app/2.6/vendors/datatables/jquery.dataTables.min.js"></script>
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
body
{  
  background: url(images/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
   background-size: cover;
   height: 100%;
   width:100%;
   padding:0;
   margin:0;
   overflow-x: hidden;
    /* background-image:url("../image/sky.jpeg"); */
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

#image
{
box-shadow: 0px 0px 10px black;
background-color: red;
}
#columns{
     color:black;
     font-weight:bold; 
      font-family:abel;
      font-size:20px"
}
#datetime,#accountno,#phone,#seatno,#sideno,#username,#price,#start,#end,#newusername
{
    height: 27px;
     font-size:10px;
     margin-top: 12px;
     border-color:#000; 
     text-align:center;
     border-top-style:none;
     border-left-style:none;
     border-right-style:none; 
     margin-left: 10px; 
     text-align:center;
    
  
}
#update1
{
    height: 25px;
    margin-top: 12px;
    -webkit-box-shadow:inset 0 0 4px #000;
    margin-left: 10px;
    font-size:10px;
}
#datetime
{
    margin-left: 10px;   
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
.col-form-label
{
    font-size:14px;
    color:#388ed1;
    
}
nav{
    background-color:  rgb(62, 142, 182);;
    -webkit-box-shadow: 0 0 1px rgb(3, 2, 2);
        box-shadow: 0 0 3px rgb(7, 4, 4);
}
.navbar-nav a
{
font-weight:bold;
font-size:17px;
color:white;
}


.col-lg-6{
 margin: auto;
-webkit-box-shadow: 0 0 1px rgb(170, 135, 135);
box-shadow: 0 0 1px rgb(158, 146, 146);
background-color: white;
/* border-radius: 20px; */
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
    top: 250px;
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
#passengers,#drivers,#bus,#booked,#fb,#about,#setting,#more,#addbus,#viewallbus,#viewavailablebus,
#booking,#bookingdetail,#routedetail,#viewavailableseat,#about,#update,#fb,#help,#profile,#menu,#logout
{  font-size:11px;
    color:#388ed1;
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
body
{
    /* background-color:red; */
}
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel-item{
    text-align: center;

    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
img{
    text-align: center;
    height:300px;
    margin-top:100px;
    min-height: 280px;  
    border-image: round;
    /* width: 600px; */
}
.dropdown:hover .dropdown-menu{
  display: block;
}
#viewallbus1:hover{
     border-color:#388ed1; 
     border-top-style:none;
     border-left-style:none;
     border-right-style:none; 
     border-right-style:red; 
     color:black;
     font-weight: bold;
}
</style>
<body bgcolor="gold" id="hidden">
<form action="Userpage.php" method="POST">
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
                <a href="../php/Wellcome.php" class="dropdown-item" id="logout" class="hiluf">Logout</a>
            </div>
        </div>

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Transactions</a>
             <div class="dropdown-menu">
                <a href="#" class="dropdown-item" id="viewallbus" class="hiluf">View bus</a>
                <!-- <a href="#" class="dropdown-item" id="viewavailablebus" class="hiluf">view available bus</a> -->
                <a href="#" class="dropdown-item" id="booking" class="hiluf">Book ticket</a>
                <a href="#" class="dropdown-item" id="bookingdetail" class="hiluf">Booking detail</a>
                <a href="#" class="dropdown-item" id="routedetail" class="hiluf">Route detail</a>
                <a href="#" class="dropdown-item" id="viewavailableseat" class="hiluf">View available seat</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
            <div class="dropdown-menu">
            <!-- <a href="#" class="dropdown-item" id="fb">FeedBack</a> -->
                <!-- <a href="#" class="dropdown-item" id="about">About</a> -->
                <a href="#" class="dropdown-item"  id="update">Change account</a>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwic9cezgPHwAhXPa8AKHYA2BmEQFnoECAYQAA&url=https%3A%2F%2Fwww.researchgate.net%2Fpublication%2F334490986_Automated_Bus_Ticket_Reservation_System_for_Ethiopian_Bus_Transport_System&usg=AOvVaw2C7cKyFvJ4dgO285GJYYpy" class="dropdown-item" id="more">More</a>
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
  </div></center> -->
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

$(document).ready(function(){
       $('#update2').click(function(){

         var username=$("#oldusername").val();
         var newusername=$("#newoneusername").val();

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
              $("#msg").css("color","black");
          }
          else if(data==2)
           {
              $("#msg").html("UserName Not Found");
              $("#msg").css("color","red");
           }
        //    else if(data==3)
        //    {
        //       $("#msg").html("Not Updated");
        //       $("#msg").css("color","red");
        //    }
          
           } 
      });
    }
         
    });
     }) ;

history.pushState(null, null, window.location.href);
history.back();
window.onpopstate = () => history.forward();

$(document).ready(function(){
       $('#pay').click(function(){

         var username=$("#username").val();
        //  var fullname=$("#fullname").val();
         var phone=$("#phone").val();
         var start=$("#start").val();
         var end=$("#end").val();
         var accountno=$("#accountno").val();
         var price=$("#price").val();
         var sideno=$("#sideno").val();
         var seatno=$("#seatno").val();
         var date=$("#datetime").val();

         var usernamevalidate = /^[0-9a-zA-Z\s]+$/; 
        //  var fullnamevalidate = /^[a-zA-Z\s]+$/; 
         var phonevalidate= /^[0-9]+$/;
         var startvalidate= /^[a-zA-Z\s]+$/; 
         var endvalidate= /^[a-zA-Z\s]+$/; 
         var accountnovaliate= /^[0-9]+$/; 
         var pricevalidate=  /^[0-9]+$/;  
         var seatnovalidate= /^[0-9]+$/; 
         var sidenovalidate= /^[0-9]+$/; 
         var phoneno = /^\d{10}$/;

 if($.trim(username).length == 0 || $.trim(phone).length == 0 
 || $.trim(start).length == 0 || $.trim(end).length == 0 || $.trim(seatno).length == 0 
 || $.trim(sideno).length == 0 || $.trim(accountno).length == 0 || $.trim(price).length ==0){
      $("#msg2").html("Fill all fileds");
      $("#msg2").css("color","red");
 }
 else if(!username.match(usernamevalidate)){
    $("#msg2").html("Please enter valid username");
    $("#msg2").css("color","red");
}
 else if(!start.match(startvalidate)){ 
    $("#msg2").html("Please enter valid stated country");
    $("#msg2").css("color","red");
}  
else if(!end.match(endvalidate)){ 
    $("#msg2").html("Please enter valid end country");
    $("#msg2").css("color","red");
}  
else if(!seatno.match(seatnovalidate)){
    $("#msg2").html("Please enter valid seat no");
    $("#msg2").css("color","red");
}    
else if(sideno < 0 || sideno.length != 4|| !sideno.match(sidenovalidate)){
    $("#msg2").html("Please enter valid side no");
    $("#msg2").css("color","red");
}  
else if(!price.match(pricevalidate)){
    $("#msg2").html("Please enter valid price");
    $("#msg2").css("color","red");
}      
 
else if(accountno < 1 || accountno.length !=3 || !accountno.match(accountnovaliate)){
    $("#msg2").html("Please enter valid account no");
    $("#msg2").css("color","red");
}  
else if( phone.charAt(0)!=0 && phone.charAt(1)!=9)
{ 
    $("#msg2").html("Please enter valid phone");
    $("#msg2").css("color","red");
} 
else if(!phone.match(phoneno) )
{ 
    $("#msg2").html("Please enter valid phone");
    $("#msg2").css("color","red");
} 
else if(!phone.match(phonevalidate) )
{ 
    $("#msg2").html("Please enter valid phone");
    $("#msg2").css("color","red");
} 
else{
      $.ajax({  
      url: "../php/PassengerBooking.php",
      method: "POST",
      data: {username:username,start:start,end:end,seatno:seatno,sideno:sideno,price:price,accountno:accountno,date:date,phone:phone},  
      success: function(data){ 

           if(data == 1)
           {
            $("#msg2").html("suceessfully  paied");
            $("#msg2").css("color","black");
           }
          else if(data == 2)
           {
            $("#msg2").html("Not Registered");
            $("#msg2").css("color","red");
           }
           else if(data == 3)
           {
            $("#msg2").html("insufficent balance");
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
            $(this).parents(".record1").animate({ backgroundColor: "#fbc7c7" }, "fast")
            .animate({ opacity: "hide" }, "slow");
        }
        });
        });


  function viewallbus1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("viewallbus1");
  filter = input.value.toUpperCase();
  table = document.getElementById("viewallbus2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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

function viewavailablebus1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("viewavailablebus1");
  filter = input.value.toUpperCase();
  table = document.getElementById("viewavailablebus2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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

function viewallroute1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("viewallroute1");
  filter = input.value.toUpperCase();
  table = document.getElementById("viewallroute2");
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

function viewavailableseats1() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("viewavailableseats1");
  filter = input.value.toUpperCase();
  table = document.getElementById("viewavailableseats2");
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
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
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
        }
        );
        $('#booking').click(function(){
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
           document.getElementById("container7").style.transform="scale(0)";
           document.getElementById("container8").style.transform="scale(0)";
           document.getElementById("container9").style.transform="scale(0)";
           document.getElementById("container10").style.transform="scale(0)";
        }
        );
        $('#bookingdetail').click(function(){
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
        }
        );
        $('#help').click(function(){
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
        }
        );
        $('#viewallbus').click(function(){
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
        });
        $('#viewavailablebus').click(function(){
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
        });
        $('#routedetail').click(function(){
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
        });
        $('#viewavailableseat').click(function(){
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
        });
    
//   function GetDetail(str){ 
//   var xhttp = new XMLHttpRequest();
// //   alert("hhh");
// alert(this.status)
//   xhttp.onreadystatechange = function() {
    
//     if (this.status== 200) {
//             // var myobj=JSON.parse(this.responseText);
//             // document.getElementById("start").value=myobj[0];
//             // document.getElementById("end").value=myobj[1];
//     }
//   alert(xhttp.responseText)
//     }
//   xmlhttp.open("GET","../php/fill.php?sideno=" +str,true);
//   xmlhttp.send();
// }

</script>


</body>
</html>