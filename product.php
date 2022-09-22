<?php
   $id=$_GET['id'];
   $sql="Select * from bat where id='$id'";
   $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'aswin');
 
  $featured = $con->query($sql);
  $product = mysqli_fetch_assoc($featured);

  echo $product["b_name"];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
       body {
            background: #e9ebeb;
            margin: 100px 0px auto;
            margin-left: 130px;

        }

        #start {
            position: absolute;
           
            margin: 0;
            padding: 0;
            opacity: 1;
            font-size: 75px;

            color: #342c2a;
            -webkit-animation: slide 1.5s ease-in-out forwards;
            animation: slide 1.5s ease-in-out forwards;

        }

        #slide1,
        #slide2,
        #slide3,
        #slider4 {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            opacity: 0;

            color: #342c2a;
            font-size: 75px;
        }

        img {
            margin: 0;
            height: 350px;
            width: 450px;
        }

        .wrapper {
            width: 200px;
            width: 40%;
            margin-top: 60px;
        }
        .right1{
            width: 60%;
            height: auto;
            background-color: wheat;
            padding-left: 15px;
            margin-top: -100px;
            height: 655px;
        }

        .container {
            position: relative;
            top: 0;
            left: 0;
            width: 450px;
            height: 350px;
            margin: 10;
            padding: 0;
            background: white;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.6);
            border: 1px solid #fff;
        }

        .navigation {
            position: absolute;
            bottom: 0px;
            left: -110px;

            padding: 0;
            margin:100px;
            margin-left: -20px;
        }

        li {
            color: transparent;
        }

        .btn {
            float: left;
            margin: 6px;
            width: 80px;
            height: 50px;
            border: 1px solid #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            -webkit-transition: 0.1s ease-in;
            transition: 0.1s ease-in;
        }

        .btn a img {
            display: block;
            text-decoration: none;
            height: 50px;
            width: 80px;
        }

        .btn:hover {
            -webkit-transition: 0.1s ease-in;
            transition: 0.1s ease-in;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            background: #00aff9;

        }


        #slide1:target,
        #slide2:target,
        #slide3:target,
        #slide4:target {
            -webkit-animation: slide 1.5s ease-in-out forwards;
            animation: slide 1.5s ease-in-out forwards;
        }

        @-webkit-keyframes slide {
            0% {
                font-size: 0px;
                opacity: 1;
            }

            100% {
                font-size: 75px;
                opacity: 1;
            }
        }

        @keyframes slide {
            0% {
                font-size: 0px;
                opacity: 1;
            }

            100% {
                font-size: 75px;
                opacity: 1;
            }
        }
        .main1{
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>

<div class="main1">
    <div class="wrapper">

        <div class="container">
            <!-- <div id="start"><img src="ceat1.jpeg" alt=""></div> -->
            <div id="slide1"><img style="width:50px; margin-left:185px" src="ceat1.jpeg" alt=""></div>
            <div id="slide2"><img style="width:50px; margin-left:185px" src="ceat2.jpeg" alt=""></div>
            <!-- <div id="slide3"><img src="https://wallpapercave.com/wp/wp2609960.jpg" alt=""></div>
            <div id="slide4"><img src="https://wallpaperaccess.com/full/546726.jpg" alt=""></div> -->

            <div class="navigation">

                <li>
                    <div class="btn">
                        <a href="#slide1" style="width:20px"><img style="width:20px; margin-left:25px" src="ceat1.jpeg" alt=""></a>
                    </div>
                </li>

                <li>
                    <div class="btn">
                        <a href="#slide2"><img style="width:20px; margin-left:25px" src="ceat2.jpeg" alt=""></a>
                    </div>
                </li>

                 <!-- <li>
                    <div class="btn">
                        <a href="#slide3"><img src="" alt=""></a>
                    </div>
                </li> -->
<!--
                <li>
                    <div class="btn">
                        <a href="#slide4"><img src="https://wallpaperaccess.com/full/546726.jpg" alt=""></a>
                    </div>
                </li> -->



            </div>
        </div>

    </div>
    <div class="right1">
        <h2>SG KLR-1 English Willow Cricket Bat</h2>
        <div class="r1">
            <h4>General:</h4>
        <table>
            <tr>
                <td>Part Number</td>
                <td>KLR-1</td>
            </tr>
            <tr>
                <td>Ideal For</td>
                <td>Men</td>
            </tr>
            <tr>
                <td>Cover Included</td>
                <td>Yes</td>
            </tr>
        </table>


        </div>

            <div class="r2">
                <h4>Product Details:</h5>
                    <table>
                        <tr>
                            <td>Wood</td>
                            <td>English Willow</td>
                        </tr>
                        <tr>
                            <td>Weight</td>
                            <td>1-1.2kg</td>
                        </tr>
                    </table>
            </div>
            <div>
                <h4>Reviews</h4>
            </div>


    </div>
</div>

</body>

</html>