<?php 

$date = new DateTime();
$timestamp = $date->getTimestamp();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clicky Test</title>
  <meta name="description" content="Website description">
  <link href="css/app.css?v=<?=$timestamp?>" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="shortcut icon" type="image/png" href="favicon.png">


</head>
<body>
<div id="app" class="app-wrapper">
  <?php include 'includes/header.php' ?>
  <main>

    <!-- Hero image -->
    <div class="lg:mt-24" data-aos="fade-in">
      <?php include 'components/hero.php' ?>
    </div>

    <!-- Text / image -->
    <div class="mt-8 lg:mt-24" data-aos="fade-up">
      <?php include 'components/text-image.php' ?>
    </div>

    <!-- Carousel -->
    <div class="mt-8 lg:mt-24">
      <?php include 'components/carousel.php' ?>
    </div>

    <!-- Video -->
    <div class="mt-8 lg:mt-24" data-aos="fade-up">
      <?php include 'components/hero-video.php' ?> 
    </div>

    <!-- Accordion -->
    <div class="" data-aos="fade-in">
      <?php include 'components/accordion.php' ?> 
    </div>

    <!-- Cards grid -->
    <div class="mt-8 lg:mt-24" data-aos="fade-in" data-aos-duration='1000'>
      <?php include 'components/cards-grid.php' ?> 
    </div>

    <!-- Logos grid -->
    <div class="mt-8 lg:mt-24">
      <?php include 'components/logo-grid.php' ?> 
    </div>

    <!-- Images grid -->
    <div class="mt-8 lg:mt-24" data-aos="fade-in" data-aos-duration='1000'>
      <?php include 'components/image-grid.php' ?> 
    </div>

    <div class="mt-8 lg:mt-24">
      
    </div>

  </main>
  
  <?php include 'includes/footer.php' ?>
</div>
  
<script src="js/app.js?v=<?=$timestamp?>"></script>
</body>
</html>