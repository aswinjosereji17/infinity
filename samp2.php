<?php
    include_once('db.php');
            $msg = '';
            // echo "test";
            if (isset($_POST['login'])) {
				
              
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  // $_SESSION['username'] = 'tutorialspoint';
// if(empty($_POST['name1'])){
//   echo '<script>alert("ff")</script>';
// }
// else{
//   $name1=$_POST['name1'];

// }
// if(empty($_POST[''])){
//   echo '<script>alert("ff")</script>';
// }
// else{

// }
// if(empty($_POST['name1'])){
//   echo '<script>alert("ff")</script>';
// }
// else{
//   $name1=$_POST['name1'];

// }if(empty($_POST['name1'])){
//   echo '<script>alert("ff")</script>';
// }
// else{
//   $name1=$_POST['name1'];

// }if(empty($_POST['name1'])){
//   echo '<script>alert("ff")</script>';
// }
// else{
//   $name1=$_POST['name1'];

// }if(empty($_POST['name1'])){
//   echo '<script>alert("ff")</script>';
// }
// else{
//   $name1=$_POST['name1'];

// }

$name1=$_POST['name1'];
               
                  $username=$_POST['username'];
                  $password=$_POST['password'];
                  $date1=$_POST['date1'];
                  $gend=$_POST['gend'];
                  $email1=$_POST['email1'];
                  $mob_no=$_POST['mob_no'];

                  $sql = "INSERT INTO `user1`(`name1`,`username`, `password`, `date1`,`gend`,`email1`,`mob_no`) VALUES ('$name1','$username','$password','$date1','$gend','$email1','$mob_no')";
                  $result = mysqli_query($conn, $sql);  
                 
                //   $count = mysqli_num_rows($result); 
                //   echo $count;
                //   if($count==1){
                //     include 'about.html';
                    
                //   }
                //   elseif($count==0){
                //     echo "f";
                //   }
                  // echo $msg;
               }
            
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/samp.css">
</head>

<!-- <script>
function submit(){
  var name=document.getElementById("name1").value;

  if(name==""){
    alert("no");
  }
}

</script> -->

<body>
  <!-- <script>
    function submit() {
      var name = document.getElementsById("name1").value;
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
       else if (email == "") {
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
    
  </script> -->

<div class="top_log">
<img class="logo" src="img\front\in_logo.jpeg" alt="" srcset="">

        </div>

        <div>
        <form name="f11" class="form_log" action="" method="POST">
                <table>

                            <tr>
                                <th colspan="4" rowspan="1">Create your account</th>
                            </tr>
                            <tr>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td><label>Name</label></td>
                                <td><input type="text" name="name1" id="name1"></td>
                            </tr>
        
                        <tr>
                            <td><label >Username</label></td>
                            <td>   <input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td><label >Password</label></td>
                            <td>    <input type="password" name="password"></td>
                        </tr>
                        <tr>
                            <td><label >Confirm Password</label></td>
                            <td>    <input type="password" name="c_password"></td>
                        </tr>
                        <tr>
                            <td><label>Date of birth</label></td>
                            <td>    <input type="date" name="date1"></td>
                        </tr>
                        <tr>
                            <td><label >Gender</label></td>
                            <td><select  id="file" name="gend">
                                <option  name="gend1" value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label >Email</label></td>
                            <td>    <input type="text" name="email1"></td>
                        </tr>
                        <tr>
                            <td><label >Mobile Number</label></td>
                            <td>    <input type="text " name="mob_no"></td>
                        </tr>
                        
                </table>
                <button  class="but_log" name="login"><b>Sign up</b></button>

           </form>
        </div>
        
</body>
</html>




<html>

</html>