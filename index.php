<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cavicchioli php-snacks-b1 7gennaio</title>
  <link rel="stylesheet" href="style.css">
  <?php
    require_once "data.php";



  ?>


</head>
<body>
<!--

GOAL:
Partiamo da questo array di hotel.
https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Avremo un file PHP con il nostro "database" e un file con tutta la logica.

-->
<div class="container">

  <?php
    foreach ($hotels as $key => $value) {
  ?>
    <div class="hotel">
      <h1><?php echo $value['name']; ?></h1>
      <h2><?php echo $value['description']; ?>:</h2>
      <h3>Vote:&nbsp;<?php echo $value['vote']; ?></h3>
      <h3>Distance to center:&nbsp;<?php echo $value['distance_to_center']; ?></h3>

      <h3>
        Parking:&nbsp;
        <?php
          if ($value['parking'] == true) {
            echo 'Yes';
          }  else {
            echo 'No';
          }

        ?>

      </h3>
    </div>
  <?php
    }
  ?>


</div>



</body>
</html>
