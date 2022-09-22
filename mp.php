<?php
    include_once('db.php');
            $msg = '';
            // echo "test";
            if (isset($_POST['login'])) {
				
              
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  // $_SESSION['username'] = 'tutorialspoint';
                  $username=$_POST['username'];
                  $password=$_POST['password'];
                  $name=$_POST['name'];
                  // $age=$_POST['age'];
                  $mob_no=$_POST['mob_no'];
                  $email=$_POST['email'];

                  $sql = "INSERT INTO `users` (`name`, `username`, `mob_no`, `email`, `Password`) VALUES ('name', 'age', 'username', 'mob_no', 'email', 'password');
                  $result = mysqli_query($conn, $sql);  
                 
                   $count = mysqli_num_rows($result); 
                   echo $count;
                   if($count==1){
                     include 'about.html';
                    
                   }
                   elseif($count==0){
                     echo "f";
                   }
                  echo $msg;                }
            


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Micro project</title>
    <link rel="stylesheet" href="css/mp.css" />
    <script src="jquery-3.6.0.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head>
  <body class="b1">
    <div class="top">
      <h1 class="one">BOOK YOUR SLOT</h1> <div>      
      </div>

      <a class="helo" href="about.html" style="color: aqua;">about</a>
    </div>
    <div class="he"> <marquee behavior="" direction="left" width=100% style="color: crimson; font-size: medium;"><b>One registration per person is sufficient</b></marquee></div>
   
    
    <div class="mid">

        <img src="success.png" alt="" id="success-logo" class="hide"><br><br>
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" id="a1" name="name" /></td>
        </tr>
        // <tr>
        //   <td>Age</td>
        //   <td><input type="date" id="a2" name="date" /></td>
        // </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" id="a1" name="username" /></td>
        </tr>
        
        <tr></tr>
        <tr>
          <td>Mobile No.</td>
          <td><input type="text" id="a3" placeholder="10-digit number" name="mob_no</td>
        </tr>
        // <tr>
        //   <td>Gender</td>
        //   <td>
        //     <select name="choose" id="file">
        //       <option value="">Male</option>
        //       <option value="">Female</option>
        //       <option value="">Other</option></select>
        //   </td>
          


          <!-- <td></td> -->
        </tr>
        <tr>
          <td></td>
          <td><input type="" id="a4"</td>
        </tr>
        <tr>
          <td>Email id</td>
          <td><input type="email" id="a5" name="email" placeholder="example@gmail.com"</td>
        </tr>
        <tr>
          <td>Password</td>
          <td>
            <input type="password" id="a6" name="password placeholder="A@1w-min 8 characters"
          </td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" id="a7"</td>
        </tr>
        <tr>
        </tr>
        <tr>
          <th colspan="2"></th>
        </tr>
      </table><br>
      <button id="sb" class="submitbtn" onclick="submit()" name="login">Submit</button>
    </div>
    <div class="BottomBox">
      <h4>Follow us on</h4>
      <a class="contactlink" href="https://www.instagram.com/">Instagram</a>
      <a class="contactlink" href="https://www.facebook.com/">Facebook</a>
      <a class="contactlink" href="https://www.twitter.com/">Twitter</a>
    </div>
    <script>
      $(document).ready(function () {
        $(".one").click(function () {
          alert("hello world");
        });
        $("input").focus(function () {
          $(this).css("background-color", "lightgrey");
        });
        $("input").blur(function () {
          $(this).css("background-color", "white");
        });
      });
    </script>
    <script>
      function submit() {
        var name = document.getElementById("a1").value;
        var age = document.getElementById("a2").value;
        var mob = document.getElementById("a3").value;
        // var Adhaar = document.getElementById("a4").value;
        var email = document.getElementById("a5").value;
        var pwd = document.getElementById("a6").value;
        var cpwd = document.getElementById("a7").value;

        var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (name == "") {
          alert("Please enter your name");
        } else if (age == "") {
          alert("Please enter your age");
        } else if (mob == "") {
          alert("Please enter your mobile no.");}
        // } else if (Adhaar == "") {
        //   alert("Please enter your adhaar no.");
        } else if (email == "") {
          alert("Please enter your email id");
        } else if (!filter.test(email)) {
          alert("Invalid email");
        } else if (pwd == "") {
          alert("Please enter Password");
        } else if (cpwd == "") {
          alert("Enter Confirm Password");
        } else if (!pwd_expression.test(pwd)) {
          alert("Choose strong password");
        } else if (pwd != cpwd) {
          alert("Password not Matched");
        } else if (document.getElementById("a7").value.length < 6) {
          alert("Password minimum length is 6");
        } else if (document.getElementById("a7").value.length > 12) {
          alert("Password max length is 12");
        } else {
            document.getElementById("success-logo").className = "show"
            document.getElementById("sb").className="hid"

        }
      }
    </script>
  </body>
</html>
