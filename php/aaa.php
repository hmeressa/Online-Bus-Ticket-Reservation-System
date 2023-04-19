<?php
    // $posted=$_SESSION['username'];
   
$connection=new mysqli("localhost","root","","Bus_Ticket_System");
if(isset($_POST["username"] ,$_POST["start"], $_POST["end"],$_POST["seatno"] ,$_POST["sideno"], $_POST["price"], $_POST["accountno"] ,$_POST["date"],$_POST["phone"])){
  $username=$_POST['username'];
  $start=$_POST['start'];
  $destination=$_POST['end'];
  $seatno=$_POST['seatno'];
  $date=$_POST['date'];
  $price=$_POST['price'];
  $sideno=$_POST['sideno'];
  $accountno=$_POST['accountno'];
  $phone=$_POST['phone'];
   if(!$connection)
   {
       echo mysqli_connect_error();
   }
   else {

      $selectAddbus="SELECT * FROM AddBuss";
      $selectRoute="SELECT * FROM RouteDetail";
      $select="select * from Booking";

      $resultAddbus=mysqli_query($connection,$selectAddbus);
      $resultRoute=mysqli_query($connection,$selectRoute);
      $booking=mysqli_query($connection,$select);
     
      if(mysqli_num_rows($booking) ==0){
        $insertInfo="insert into Booking values('$username','$start','$destination','$seatno','$sideno','$price','$accountno','$date','$phone')";
          if (mysqli_query($connection,$insertInfo)) {
           $passengerminus=$passengerbirr - $price;
           $updatepassenger="UPDATE BirrPassenger set Birr='$passengerminus' where UserName='$passengerusername'";  
           echo 1;
          }
      }
          $counter=0;
          $isfound=false;
        while($row=mysqli_fetch_assoc($resultAddbus))  {
             $sidenobus=$row['SideNo'];
             $seatnobus=$row['SeatNo'];
             $isfound=true;
             $counter++;
          if($sidenobus==$sideno) {
              $i=1;
            while($i <= $seatnobus) {
                $select="select * from Booking";
                $result=mysqli_query($connection,$select);
                if(mysqli_num_rows($result) > 0){
                  while($row=mysqli_fetch_assoc($result)){
                    $seatsingle=$row['SeatNo'];

                    if($seatsingle != $seatno && $seatno >0 && $seatno <=$seatnobus){
                      $isfound=true;
                      $selectpassenger="SELECT * FROM BirrPassenger";
                      $resultpassenger=mysqli_query($connection,$selectpassenger);
                      if(mysqli_num_rows($resultpassenger) > 0){
                        while($row=mysqli_fetch_assoc($resultpassenger)){

                          $passengerbirr=$row['Birr'];
                          $passengerusername=$row['UserName'];
                          if($passengerusername==$username){
                          $insertInfo="insert into Booking values('$username','$start','$destination','$seatno','$sideno','$price','$accountno','$date','$phone')";
                          if (mysqli_query($connection,$insertInfo)) {
                           $passengerminus=$passengerbirr - $price;
                           $updatepassenger="UPDATE BirrPassenger set Birr='$passengerminus' where UserName='$passengerusername'";  
                           mysqli_query($connection,$updatepassenger);
                           
                           $selectadmin="SELECT * FROM AdminBirr";
                           $resultadmin=mysqli_query($connection,$selectadmin);
                           if(mysqli_num_rows($resultadmin) > 0){
                            while($row=mysqli_fetch_assoc($resultadmin)){
    
                              $adminbirr=$row['Birr'];
                              $adminusername=$row['UserName'];
                              $adminminus=$adminbirr + $price;
                              $updateadmin="UPDATE AdminBirr set Birr='$adminminus' where UserName='$adminusername'";  
                              mysqli_query($connection,$updateadmin);

                            }
                          }

                          }
                         
                         }
                        }
                        }
                      }
                    }
                $i++;
                  }
                }                        
              }
          }
          if($isfound)
          {
            echo 1;
          }
          else
          {
            echo 2;
          }
       }
}
?>