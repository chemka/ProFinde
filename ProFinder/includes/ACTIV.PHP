<?php
require "/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../favicon.ico">
  <title>Jumbotron Template for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
 <?php include "/sidebar.php" ?>
 <?php 
 $activ = mysqli_query($connaction,"SELECT * FROM `active` WHERE `id` = " . (int) $_GET["id"]);

 if (mysqli_num_rows($activ) <= 0) {
  ?>
   <div class="jumbotron">
    <div class="container">
      <h2 class="display-6">ere!</h2>
      <p>Перейтя по этой ссылке, Вы сможете узнать информацию о команде, которая разработала этот сайт.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Узнать &raquo;</a></p>
    </div>
  
          <?php
        }else{
        
           $art = mysqli_fetch_assoc($activ)
      ?>
      <div class="jumbotron">
        <div class="container">
          <h2 class="display-4"><?php echo $art['title']?></h2>
        </div>
      </div>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-7">
            <p><?php echo $art["text"]?>
            </p>
          </div>
          <?php
        }
        ?>
 
      <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
      </body>
      </html>