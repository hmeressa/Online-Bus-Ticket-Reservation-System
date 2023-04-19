<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font_awesome/css/all.css">
    <link rel="stylesheet" href="../css/Loginpage.css">
    <script src="../jquary/jquery.js"></script>
    <title>www.bss.loginpage.php</title>
</head>
<style>
  input[type='text'],input[type='password']
  {
    font-family: 'Times New Roman', Times, serif;
    font-size: 12px;
    font-weight: bold;
    border:none;
    /* outline:none; */
    border-bottom:1.8px solid #388ed1;
    margin-left: 10px;
    height: 30x;
    font-size:11px;
     margin-top: 6px;
     text-align:center;
  }
  
  .col-lg-5
  {
         background-color:white;
         margin: auto;
          box-shadow: 0px 0px 3px rgb(158, 146, 146);
          border-radius: 4px;
  }
  #one
  {
    margin-top: 14px;
  }
  #about
  {
    width: 500px;
    height:450px;
    display: none;
    position:absolute; 
    margin-left: auto;
    margin-top:40px;
    margin-right: auto;
    left: 0; right: 0; 
    margin-top: -440px;
    box-shadow: 0 0 3px rgb(158, 146, 146);
      border-radius: 10px;
      transition: 1000ms;
      border-color:#000;
      -webkit-box-shadow:inset 0 0 4px #000;
      box-shadow:inset 0 0 7px #000;
      background-color: #388ed1;
  
  }
  #usernam,#password:focus + placeholder
  {
transform:translateY(-18px);
color:red;
font-size:8rem;
  }
  </style>

</style>
     <body onload="onload()" style="background-image: white;"><br><br><br><br><br>
     <img src="../image/00_lead_image_delete_key1.png" style="width:100px;height:100px;margin-top:30px;margin-left:30px;">
      <center><h2 style="color:#388ed1;font-weight:bold; 
       ;
        font-family:abel;margin-top:10px;
        font-size:20px;text-transform: capitalize;" id="webdevpagehead"> </h2></center>
      <div clalss="" style="background-color: white;">
      <nav class="navbar navbar-expand-md navbar-light fixed-top py-5" style="background-color:#388ed1;box-shadow: 2px 2px 2px black;"></nav><br><br><br>
       <div class="container" style="background-color:white;margin-top: -100px;">
         <div class="row" style="background-color:white">

          <div class="col-lg-5 offset-3" id=""> 
          <center><div class="first" style="display: inline-block;font-size:16px;color:red"><h4>*</h4></div>
                <span style="color:#388ed1;padding-left:10px;padding-right:5px;font-weight:bold;font-family:abel;text-transform:uppercase">Authenticate</span>
                <div class="first" style="display: inline-block;font-size:16px;color:red"><h4>*</h4></div><br><br></center>
          <div class="text-center"><i id="icon" class="fa fa-user offset" style="font-size: 50px;color:#388ed1"></i></div><br>
           <div class="form-group row" style="margin-top: 0px;">
            <label for="username" id="one" class="offset-4"><i class="fa fa-user " style="font-size: 20px;color:#388ed1"></i></label>
            <div class="">
             <input type="text"  class="form-control offset-6" id="username" name="username" placeholder="Enter UserName" required>
            </div>
           </div>
           <div class="form-group row" style="margin-top: 0px;">
            <label for="password" id="one" class="offset-4"><i class="fa fa-lock " style="font-size: 20px;color:#388ed1"></i></label>
            <div class="">
              
             <input type="password" class="form-control offset-8" id="password" name="password" placeholder="Enter password" required>
            </div>
           </div>
          
            <div class="col-lg-12" style="margin-top:20px">
             <input type="button" name="login" class="col-lg-12 form-control btn btn-primary" style="font-weight:bold" id="login" value="Sign In" onclick="login()">
            </div><br>

           <div class="form-group row" style="margin-top: 0px;">
           <!-- <a class="offset-" href="../php/RegistrationpagePassenger.php" style="color:#388ed1;padding-left:5px;padding-right:5px;font-weight:bold;font-family:abel;">Forget password</a> -->
           <a class="offset-8" href="../php/RegistrationpagePassenger.php" style="color:#388ed1;padding-left:5px;padding-right:5px;font-weight:bold;font-family:abel;">Create account</a>
           </div>
            
            <center><h6 id="msg" style="color:green; font-weight:bold;font-family:abel;font-size:12px;text-shadow:0px 0px 1px red"></h6></center>
            <br>
           </div>
         </div> 
      </div>
    </div>
    <nav style="  background-color: aliceblue;" class="navbar fixed-bottom navbar-expand-sm">

<div class=" col-lg-12 py">
      <center><button  type="button" class="toggle-btn" style="font-size: 10px;">@CopyRight2013 Developed By Software Engineeing Students</button> </center>
       
    </div>
     
      </nav>
      <img src="../image/00_lead_image_delete_key1.png" style="margin-left:1000px;margin-top:-700px;width:100px;height:100px"> 
      <div id="about">
<div class="card-circle" style="border-color:yellow;border-width:10px;background:#388ed1;">
<img src="../image/00_lead_image_delete_key1.png
" alt="" style="width: 200px;height: 200px;;border-radius:100%">
<h1>this is member one</h1>
</div>
<div class="card-circle" style="border-color:yellow;border-width:10px;background:#388ed1;">
<img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">
</div>
<div class="card-circle" style="border-color:yellow;border-width:10px;background:#388ed1;">
<img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">
</div>
<div class="card-circle" style="border-color:yellow;border-width:10px;background:#388ed1;">
<img src="../image/golderone.jpg" alt="" style="width: 200px;height: 200px;;border-radius:100%">
</div>

</div></div></div></div></div></div>
     </body>
      </html>

