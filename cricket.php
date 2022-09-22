<?php
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'aswin');
  $sql="select * from bat";
  $featured = $con->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>cricket</title>
  <link rel="stylesheet" href="css\cricket.css">
</head>

<body>

  <div class="top">
    <h2>CRICKET</h2>
</div>

  <div class="main">

    <div class="left">
      <div class="left_bat">
        <h3>BAT</h3>
        
        <div class="responsive">
        <?php
          while($bats= mysqli_fetch_assoc($featured)):
        ?>
          <div class="gallery" onclick="window.location.href='<?='product.php?id=' . $bats['id'];?>'">
          
              <img style="width:<?=$bats['img_width']?>; margin-left:<?=$bats['mar_left']?>; margin-top:10px" src="<?=$bats['src'];?>" alt="Cinque Terre" width="600"
                height="400">
            </a>
            <div class="desc"><?= $bats['b_name'];?> </div>
            <a href="<?='product.php?id=' . $bats['id'];?>">go</a>
          </div>
          <?php endwhile; ?>

        </div>
  
        
      

    </div>

  
  </div>

  <!-- <div class="clearfix"></div> -->

  <!-- <div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div> -->

</body>
<style>

</style>

</html>