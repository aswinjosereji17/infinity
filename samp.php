<?php
    include_once('db.php');
            $msg = '';
            // echo "test";
            if (isset($_POST['login'])) {
				
              
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  // $_SESSION['username'] = 'tutorialspoint';
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

    <script>
      function val(){
        var a= document.getElementById("name1").value;
        var b= document.getElementById("username").value;
        var c = document.getElementById("password").value;
        var d= document.getElementById("c_password").value;
        var e= document.getElementById("date1").value;
        var f= document.getElementById("email1").value;
        var g= document.getElementById("mob_no").value;




      if(a==""){
        alert("Enter name!");
        
      }

      else if(b==""){
        alert("enter username!");
      }
      else if(c==""){
        alert("enter password!");
      }else if(d==""){
        alert("enter password once more!");
      }else if(e==""){
        alert("enter date of birth!");
      }else if(f==""){
        alert("enter email id!");
      }else if(g==""){
        alert("enter mobile number!");
      }
      }
      </script>
</head>

<body>
  

<div class="top_log">
<img class="logo" src="img\front\in_logo.jpeg" alt="" srcset="">

        </div>

        <div>
        <form name="f11" class="form_log" action="" method="POST" onsubmit="val()">
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
                            <td>   <input type="text" name="username" id="username"></td>
                        </tr>
                        <tr>
                            <td><label >Password</label></td>
                            <td>    <input type="password" name="password" id="password"></td>
                        </tr>
                        <tr>
                            <td><label >Confirm Password</label></td>
                            <td>    <input type="password" name="c_password" id="c_password"></td>
                        </tr>
                        <tr>
                            <td><label>Date of birth</label></td>
                            <td>    <input type="date" name="date1" id="date1"></td>
                        </tr>
                        <tr>
                            <td><label >Gender</label></td>
                            <td><select  id="file" name="gend">
                                <option  name="gend1" value="male"><a href="football.html">msle</a></option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td><label >Email</label></td>
                            <td>    <input type="text" name="email1" id="email1"></td>
                        </tr>
                        <tr>
                            <td><label >Mobile Number</label></td>
                            <td>    <input type="text " name="mob_no" id="mob_no"></td>
                        </tr>
                        
                </table>
                <button  class="but_log" name="login"><b>Sign up</b></button>

           </form>
        </div>
        
</body>
</html>




<html>

</html>