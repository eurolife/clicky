<!DOCTYPE html>
<html lang="en">

<head>
    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Title</title>
  <meta name="description" content="Website description">
  <link href="css/app.css?v=2" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="shortcut icon" type="image/png" href="favicon.png">


</head>
<body>
<div id="app" class="app-wrapper">
  <?php include 'includes/header.php' ?>
  <main>

    <!-- Hero image -->
    <div class="lg:mt-16">
      <?php include 'components/hero.php' ?>
    </div>

    <!-- Text / image -->
    <div class="mt-8 lg:mt-16">
      <?php include 'components/text-image.php' ?>
    </div>

    <div class="mt-16">
      
    </div>

  </main>
  
  <?php include 'includes/footer.php' ?>
</div>
  
<script src="js/app.js?v=2"></script>
</body>
</html>