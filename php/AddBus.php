<?php
    $connection=new mysqli("localhost","root","","Bus_Ticket_System");
    if(isset($_POST["busname"],$_POST["start"],$_POST["end"],$_POST["price"],$_POST["time"],$_POST["km"],$_POST["totalseat"])){
      
    $busname=$_POST['busname'];
    $price=$_POST['price'];
    $seat=$_POST['totalseat'];
    $start=$_POST['start'];
    $destination=$_POST['end'];
    $time=$_POST['time'];
    $km=$_POST['km'];
    $digits = 5;
    $targa=rand(pow(10, $digits-1), pow(10, $digits)-1);
    $digit = 4;
    $sideno=rand(pow(10, $digit-1), pow(10, $digit)-1);
       if(mysqli_connect_error())
      {
        echo "not connected";
      }
    else
    {
        // $select="select * from AddBuss";
        // $addbus=mysqli_query($connection,$select);
      
        // if(mysqli_num_rows($addbus) > 0){
        //   $isfound=false;
        
        //   while($row=mysqli_fetch_assoc($addbus))
        //   {
        //     // echo '<script>alert("yes");</script>';
        //      $name=$row['BusName'];
        //     if($row['BusName'] == $busname)
        //     {

        //       echo '<script>alert("The Bus is already Exist Do you want to update the Existing bus ?");</script>';
        //      $update="UPDATE AddBuss set BusName = '$busname' ,SeatNo='$seat' where BusName=$name";
        //      $newbus=mysqli_query($connection,$update);
        //      echo '<script>location.href = "../php/AdminPage.php"</script>';
        //      $isfound=true;
        //      break;
        //     } 
        //   }
        // }
        // else 
        // {
         
            $insert="insert into AddBuss values('$sideno','$busname','$seat','$targa')";         
            $result=mysqli_query($connection,$insert);
            $route="insert into RouteDetail values('$sideno','$start','$destination','$price','$time','$km')";         
            $result1=mysqli_query($connection,$route);
            if($result1)
            { 
              
              echo 1;
              // echo '<script>alert("registration successfully");</script>';
              // echo '<script>alert($targa);</script>';
              // echo '<script>location.href = "../php/AdminPage.php"</script>';
            }
           else {
               echo 2;
                }
          //  }
      }
    }
?>
