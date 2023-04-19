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
    <script src="../javascript/Loginpage.js"></script>
    <title>www.bss.loginpage.php</title>
</head>
<style>
  input[type='text'],input[type='password']
  {
    font-family: 'Times New Roman', Times, serif;
    font-size: 12px;
    font-weight: bold;
    border:none;
    border-bottom:1.8px solid #388ed1;  
    margin-left: 10px;
    height: 30x;
    font-size:11px;
     margin-top: 6px;
     text-align:center;
     color:black;
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
    /* opacity: 0.8; */
  
  }
  #usernam,#password:focus + placeholder
  {
transform:translateY(-18px);
color:red;
font-size:8rem;
  }
  span
  {
      font-size:16px;
  }
  #about
  {
      background-image: url('../image/design.jpeg');
  }
  </style>

</style>
     <body onload="onload()" style="background: white;"><br><br><br><br><br>
      <center><h2 style="color:#388ed1;font-weight:bold; 
       ;
        font-family:abel;margin-top:10px;
        font-size:20px;text-transform: capitalize;" id="webdevpagehead"> </h2></center>
      <div clalss="" style="background-color: white;">
      <nav class="navbar navbar-expand-md navbar-light fixed-top py-4" style="background-color:#388ed1;box-shadow: 2px 2px 2px black;">
      <center><span style="color:white;padding-left:520px;padding-right:5px;margin-top:-30px;font-weight:bold;font-family:abel;text-transform:uppercase">AUTHENTICATE</span></center>
</nav><br><br><br>
       <div class="container" style="background-color:red;margin-top: 50px;">
         <div class="row" style="background-color:white">
          <div class="col-lg-5 offset-3" id=""> 
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
             <input type="button" name="login" class="col-lg-12 form-control btn btn-primary" style="font-weight:bold;color:white;font-weight:bold;font-family:abel;text-transform:uppercase" id="login" value="Sign In" onclick="login()">
            </div><br>

           <div class="form-group row" style="margin-top: 0px;">
           <a class="offset-8" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiiy4ya6_DwAhVDSxUIHfytBboQFnoECBYQAA&url=https%3A%2F%2Fhelp.surveymonkey.com%2Farticles%2Fen_US%2Fkb%2FHow-do-I-reset-my-password-if-I-ve-forgotten-it&usg=AOvVaw0CEgRMzm4AoCvv6DWortrd" style="color:#388ed1;padding-left:5px;padding-right:5px;font-weight:bold;font-family:abel;font-weight:bold;color:#388ed1;font-weight:bold;font-family:abel;">Forget Password</a>
           <a class="offset-8" href="../php/RegistrationpagePassenger.php" style="color:#388ed1;padding-left:5px;padding-right:5px;font-weight:bold;font-family:abel;font-weight:bold;color:#388ed1;font-weight:bold;font-family:abel;margin-left:40px;margin-top:-20px">Create account</a>
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
      <div id="about">
          <!-- <h3 style="transform:capitalize;"> Developers</h3>
<img src="../image/design.jpeg" alt="">
<img src="../image/bewket.jpg" alt="">
<h4>Hiluf</h4><br>
<img src="../image/golderone.jpg" alt="">
<img src="../image/golderone.jpg" alt="">
<img src="../image/golderone.jpg" alt=""> -->


</div></div></div></div></div></div>

    <script>


history.pushState(null, null, window.location.href);
history.back();
window.onpopstate = () => history.forward();


$(document).ready(function(){

    // Toggles paragraphs display

    $(".toggle-btn").click(function(){
     $("#about").slideToggle("slow");
     $("#login").fadeOut(function()
     {
        $("#login").fadeIn();
     });
    
    });
});


     $(document).ready(function(){
       $('#login').click(function(){
         var username=$("#username").val();
         var password=$("#password").val();
        if($.trim(username).length==0 || $.trim(password).length==0)
        {
            $('#msg').html("Field is Empity");
            animateimage();
            $('#icon').css("color","red");
            $('#msg').css("color","red");
        }
        else{
          $.ajax({
          
          url: "../php/Loginpage.php",
          method: "POST",
          data: {name:username,pass:password,login:login},  
          success: function(data){ 
    //   alert(data);
            if(data==1)
            {
              location.href=('../php/Userpage.php');
              $('#username').val('');
              $('#password').val('');
            }
            else if(data==2)
            {
              location.href=('../php/AdminPage.php');
              $('#username').val('');
              $('#password').val('');
            }
            else if(data==3)
            {
              location.href=('../php/DriverPage.php');
              $('#username').val('');
              $('#password').val('');
            }
            else if(data==4)
            {
            $('#msg').html("User Not Found !");
             animateimage();
            $('#icon').css("color","red");
            $('#msg').css("color","red");
            }
           
          
           } 
      });
    }
         
       })
     }) 
     function onload()
     {
        var username=$("#username").val()="";
         var password=$("#password").val()="";
     }
     function animateimage(){
    $('#icon').animate({
        marginLeft: '30px'
    }, 100);
    $('#icon').animate({
        marginLeft: '0px'
    }, 100);
    $('#icon').animate({
        marginLeft: '30px'
    }, 100);
    $('#icon').animate({
        marginLeft: '0px'
    }, 100);
 }
      var counter = 0;
        setTimeout(typefirst, 50);
        function typefirst() {
            if (counter == 0) {
                document.getElementById("webdevpagehead").style.visibility = "visible";
                counter++;
                document.getElementById("webdevpagehead").innerHTML = "W";
                setTimeout(typefirst, 50);
            } else if (counter == 1) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "e";
                setTimeout(typefirst, 50);
            } else if (counter == 2) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "l";
                setTimeout(typefirst, 50);
            }else if (counter == 3) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            } 
            else if (counter == 4) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "C";
                setTimeout(typefirst, 50);
            } else if (counter == 5) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "o";
                setTimeout(typefirst, 50);
            } else if (counter == 6) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "m";
                setTimeout(typefirst, 50);
            } else if (counter == 7) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "e";
                setTimeout(typefirst, 50);
            }else if (counter == 8) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            } 
            
            else if (counter == 9) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " T";
                setTimeout(typefirst, 50);
            }   
            else if (counter == 10) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "o";
                setTimeout(typefirst, 50);
            }else if (counter == 11) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            } 
            
            else if (counter == 12) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "L";
                setTimeout(typefirst, 50);
            } else if (counter == 13) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "o";
                setTimeout(typefirst, 50);
            } else if (counter == 14) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "g";
                setTimeout(typefirst, 50);
            } 
            else if (counter == 15) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "i";
                setTimeout(typefirst, 50);
            }
            else if (counter == 16) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "n";
                setTimeout(typefirst, 50);
            }
                else if (counter == 17) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            }
             else if (counter == 18) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "P";
                setTimeout(typefirst, 50);
            } else if (counter == 19) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "a";
                setTimeout(typefirst, 50);
            } else if (counter == 20) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "g";
                setTimeout(typefirst, 50);
            } else if (counter == 21) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "e";
                setTimeout(typefirst, 50);
            } 
            else if (counter == 22) {
                setTimeout(wait, 2500);
                counter = 0;
            }
            clearTimeout(timeout1);
        }
            function wait() {
            document.getElementById("webdevpagehead").style.visibility = "hidden";
            setTimeout(typefirst, 0);
        }
    
        function onloadfunction() {
            $("#downhand").animate({
                "paddingTop": "20px"
            }, "slow");
            $("#downhand").animate({
                "paddingTop": "-20px"
            }, "slow");
            setTimeout(onloadfunction, 2000);
        }
    </script>
     </body>
      </html>

