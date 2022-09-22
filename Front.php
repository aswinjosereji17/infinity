
<?php

session_start();
    include_once('db.php');
            $msg = '';
            // echo "test";
            if (isset($_POST['login'])) {   
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  // $_SESSION['username'] = 'tutorialspoint';
                  $username=$_POST['username'];
                  $password=$_POST['password'];
                  $sql = "select * from user1 where username = '$username' and password = '$password'";
                  $result = mysqli_query($conn, $sql);  
                 
                  $count = mysqli_num_rows($result); 
                  echo $count;
                  if($count==1){
                    include 'about.html';
                    
                  }
                  elseif($count==0){
                    echo "f";
                  }
                  // echo $msg;
               }
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/front1.css">
  <link rel="stylesheet" href="css/mp.css">

  <script src="jquery-3.6.0.js"></script>
  <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


</head>




<body>
  <div class="topp">
    <!-- <h1 class="h1">INF IN ITY</h1> -->
    <img class="logo" src="img\front\in_logo.jpeg" alt="" srcset="">
    <div class="icon">
        <!-- <a href="mp.html"><button id="b1">Register</button></a> -->
        <div>
          <img class="rg" onclick="document.getElementById('id01').style.display='block'" src="img\front\regi.png" alt="" srcset="">
          <p>Sign In</p>
        </div>
        <!-- <a href="login.html"><button id="b2">Sign in</button></a> -->
        <div><img class="rg" src="img\front\cart.gif" alt="" srcset="">
        <p>cart</p></div>
    </div>
    
  </div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
      <img src="acnt.png" alt="Avatar" class="avatar">
    </div>
    
       
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name='login'>Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button  type="button" 
       class="cancelbtn"><a href="samp.php">Create an account</a> </button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
      <img src="acnt.png" alt="Avatar" class="avatar">
    </div>

    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" id="a1" /></td>
      </tr>
      <tr>
        <td>Age</td>
        <td><input type="date" id="a2" /></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><input type="text" id="a1" /></td>
      </tr>
      
      <tr></tr>
      <tr>
        <td>Mobile No.</td>
        <td><input type="text" id="a3" placeholder="10-digit number"</td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <select name="choose" id="file">
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Other</option></select>
        </td>
        


        <!-- <td></td> -->
      </tr>
      <tr>
        <td></td>
        <td><input type="" id="a4"</td>
      </tr>
      <tr>
        <td>Email id</td>
        <td><input type="email" id="a5" placeholder="example@gmail.com"</td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input type="password" id="a6" placeholder="A@1w-min 8 characters"
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
    </table>

    <div class="container" style="background-color:#f1f1f1">
      <button  type="button" 
       class="cancelbtn"><a href="mp.php">Create an account</a> </button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


  <div class="mid">

  
  

<br>
    <div class="w3-content w3-section" style="max-width:500px">
    
      <img class="mySlides " src="img\front\slide.gif" >
      <img class="mySlides " src="slide22.gif" >
      
    </div>
    
    <script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 3000);    
    }
    </script>
    



  </div>

  <div class="nar1">

  </div>



  <div class="mid1">
    <div class="m1_1">
      <h3 class="mh1_1">C</h1><br>
      <h3 class="mh1_1">A</h1><br>
      <h3 class="mh1_1">T</h1><br>
      <h3 class="mh1_1">E</h1><br>
      <h3 class="mh1_1">G</h1><br>
      <h3 class="mh1_1">O</h1><br>
      <h3 class="mh1_1">R</h1><br>
      <h3 class="mh1_1">Y</h1><br>

    </div>

    <div  class="m1_2">
      
      <div class="row">
        <div class="column">
            <a href="cricket.php"><img src="img\front\cric.jpg" ></a>
            <div class="t1"><h3>CRICKET</h4></div>
            
        </div>
        <!-- <div class="column">
          <img src="rugby.jpg" alt="Forest">
        </div> -->
        <div class="column">
          <a href="football_org.php"><img  src="img\front\footb.jpg"></a>
          <div class="t1"><h3>FOOTBALL</h4></div>
        </div>
        <div class="column">
          <a href="badminton.html"><img  src="img\front\badm.jpg"></a>
          <div class="t1"><h3>BADMINTON</h4>
        </div>
      </div>

        <div class="column">
          <a href="img\bask\ball\basketball.html"><img  src="img\front\bas.jpg"></a>
          <div class="t1"><h3>BASKETBALL</h4>
        </div>
      </div>
        <div class="column">
          <a href="volleyball.html"><img  src="img\front\voll.jpg"></a>
          <div class="t1"><h3>VOLLEYBALL</h4>
        </div>
      </div>
        <div class="column">
          <a href="hockey.html"><img  src="img\front\hock.jpg"></a>
          <div class="t1"><h3>HOCKEY</h4>
        </div>
      </div>
        
        <!-- <div class="column">
          <img src="tenn.jpg" alt="categ">
        </div> -->
      </div>
      
    </div>
      
      
  </div>

  <div class="nar1">

  </div>
  <div class="mid2">
    <div class="m2_1" style="padding-top:150px ;">
      <h3 class="mh1_1">B</h1><br>
      <h3 class="mh1_1">R</h1><br>
      <h3 class="mh1_1">A</h1><br>
      <h3 class="mh1_1">N</h1><br>
      <h3 class="mh1_1">D</h1><br>
      <h3 class="mh1_1">S</h1><br>
      
    </div>

    <div class="m2_2">
      
      <div class="row">
        <div class="column">
            <img src="cric.jpg" alt="categ" >
        </div>
        <!-- <div class="column">
          <img src="rugby.jpg" alt="Forest">
        </div> -->
        <div class="column">
          <img src="footb.jpg" alt="categ">
        </div>
        <div class="column">
          <img src="badm.jpg" alt="categ">
        </div>
        <div class="column">
          <img src="bas.jpg" alt="categ">
        </div>
        <div class="column">
          <img src="voll.jpg" alt="categ">
        </div>
        <div class="column">
          <img src="hock.jpg" alt="categ">
        </div>
        <!-- <div class="column">
          <img src="tenn.jpg" alt="categ">
        </div> -->
      </div>
      
    </div>
      
      
  </div>



  <div class="bottomm">
    <h4>Contact Us</h4></br>
    <p>Helpline: +91-7028242627(Toll Free-1075)</p>
    <p>Copyright © 2022 INFINITY. All Rights Reserved</p>

  </div>

  <!-- <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script> -->
  <script>
    $(document).ready(function () {
      $('.h1').mouseover(function () {
        $('.h1').css("color", "lightgreen")
      });
      $('.h1').mouseleave(function () {
        $('.h1').css("color", "lightblue")
      });
      $('#b1').click(function () {
        $('#b1').css("background-color", "yellow")
      });
      $('#b2').click(function () {
        $('#b2').css("background-color", "yellow")
      });


    });

  </script>

</body>

</html>