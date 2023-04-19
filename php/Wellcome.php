<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../font_awesome/css/all.css">
    <script src="../umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/Welcomepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #signin,#signup 
{
    color:#388ed1;
    font-size:14px;
    text-transform:capitalize;
    font-weight:bold; 
    text-shadow:0px 0px 1px black;
    font-family:abel;
    margin-top:40px;
    

}
</style>
     <body clalss="bg-light" style="background:white">
         <nav class="navbar navbar-expand-md navbar-light fixed-top py-5" style="background:#388ed1;height:200px">
         <center><h2 style="color:white;font-weight:bold; 
            text-shadow:3px 4px 7px black;
            font-family:abel;margin-top:10px;margin-left:200px;
            font-size:40px;" id="webdevpagehead"></h2></center>
            </nav>
<center>
  <p style="text-align:center; text-shadow:1px 0px 0px black;
  color:#388ed1;font-family:abel;font-size:20px;
  font-weight:bold;margin-top:240px;">
    Click here to Cont...

   
     <br> <span  id="downhand" data-toggle="tooltip" title="please sign up or Sign Up!"
      style="position:absolute;cursor:pointer;
      ; color: #388ed1;font-size:50px;margin-top:30px" class="fa fa-hand-point-down"></span></p><br>
                <div class="form-group row" style="margin-top: 0px;">
           <a class="offset-7" href="../php/RegistrationpagePassenger.php" style="color:#388ed1;font-weight:bold;font-family:abel;font-weight:bold;color:#388ed1;font-weight:bold;font-family:abel;margin-top:100px">Sign Up</a>
           <a class="offset-" href="../html/Loginpage.php" style="color:#388ed1;font-weight:bold;font-family:abel;font-weight:bold;color:#388ed1;font-weight:bold;font-family:abel;margin-left:-240px;margin-top:100px">Sign In</a>
           </div>
            </center>
            <!-- <nav style="  background-color: gray;" class="navbar fixed-bottom navbar-expand-sm py-3">

<center><div class="py">
<a href="#"><i style="font-size: 7px;"">@CopyRight2013 Developed By Software Engineeing Students</i></a>
  </div></center>
</nav> -->
      <script>
      history.pushState(null, null, window.location.href);
history.back();
window.onpopstate = () => history.forward();
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
                document.getElementById("webdevpagehead").innerHTML += "E";
                setTimeout(typefirst, 50);
            } else if (counter == 2) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "L";
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
                document.getElementById("webdevpagehead").innerHTML += "O";
                setTimeout(typefirst, 50);
            } else if (counter == 6) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "M";
                setTimeout(typefirst, 50);
            } else if (counter == 7) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "E";
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
                document.getElementById("webdevpagehead").innerHTML += "O";
                setTimeout(typefirst, 50);
            }else if (counter == 11) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            } 
            
            else if (counter == 12) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "B";
                setTimeout(typefirst, 50);
            } else if (counter == 13) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "U";
                setTimeout(typefirst, 50);
            } else if (counter == 14) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "S";
                setTimeout(typefirst, 50);
            } 
            else if (counter == 15) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            }
            else if (counter == 16) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "T";
                setTimeout(typefirst, 50);
            } else if (counter == 17) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "I";
                setTimeout(typefirst, 50);
            } else if (counter == 18) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "C";
                setTimeout(typefirst, 50);
            } else if (counter == 19) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "K";
                setTimeout(typefirst, 50);
            } else if (counter == 20) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "E";
                setTimeout(typefirst, 50);
            } else if (counter == 21) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "T";
                setTimeout(typefirst, 50);
            }else if (counter == 22) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += " ";
                setTimeout(typefirst, 50);
            } 
            else if (counter == 23) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "S";
                setTimeout(typefirst, 50);
            } else if (counter == 24) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "Y";
                setTimeout(typefirst, 50);
            } else if (counter == 25) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "S";
                setTimeout(typefirst, 50);
            }
            else if (counter == 26) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "T";
                setTimeout(typefirst, 50);
            }
            else if (counter == 27) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "E";
                setTimeout(typefirst, 50);
            }
            else if (counter == 28) {
                counter++;
                document.getElementById("webdevpagehead").innerHTML += "M";
                setTimeout(typefirst, 50);
            }
            else if (counter == 29) {
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
    
        function signin()
        {
            alert("this is sign in page")
        }
        $('#signin').click(function()
        {
            location.href=('../php/Loginpage.php');
        })
        $('#signup').click(function()
        {
            location.href=('../php/Registrationpage.php');
        })
      </script>
      </body>
      </html>
