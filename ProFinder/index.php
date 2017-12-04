<?php
require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <title><?php echo $config['title']; ?></title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <!-- Custom Stlyes -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Custom styles for this template -->
  <!-- <link href="jumbotron.css" rel="stylesheet"> -->
</head>
<body>

  <?php include "includes/sidebar.php" ?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-6">Здравствуйте!</h2>
      <p>Перейтя по этой ссылке, Вы сможете узнать информацию о команде, которая разработала этот сайт.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Узнать &raquo;</a></p>
    </div>
  </div>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <?php 
      $art_cat = false;
      foreach ($categoty as $cat) 
      {
       if ($cat['id'] == $act['id_categori']) {
          $art_cat = $cat;
          break;
       }
      }
       ?>
      <?php 
      $actives = mysqli_query($connaction, "SELECT *  FROM active ORDER BY `date` LIMIT 3");
      ?>
      <?php
      while ( $act = mysqli_fetch_assoc($actives) ) 
      {
        ?>
        <div class="col-md-4">
          <h2><?php echo $act['title']; ?></h2>
         <a href="/CAT.PHP?id=<?php echo $art_cat['id']?>"> <h4><?php echo $art_cat['name'] ?> </h4></a><br>
          <p><?php echo mb_substr( $act['text'], 0, 200, 'utf-8') ?></p>
          <p><a class="btn btn-secondary" href="includes/ACTIV.PHP?id=<?php echo $act['id']?>" role="button">Подробнее &raquo;</a></p>
        </div>
        <?php
      }
      ?>

     
    <?php include "includes/footer.php" ?>


  </div> <!-- /container -->
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
