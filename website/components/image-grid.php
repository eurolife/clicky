<section class="container">
  <div class="image-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
    <?php for ($i = 1; $i <= 8; $i++) { ?>
      <a href="images/gallery<?=$i?>.png" class="block relative image">
        <!-- <a href="images/gallery<?=$i?>.png"> -->
          <img src="images/zoom.svg" class="icon opacity-0 absolute top-0 left-0 z-20" aria-hidden="true" alt="">
          <div class="opacity-0 absolute inset-0 z-10 bg-black hover:opacity-25 transition-opacity duration-300"></div>
          <img src="images/gallery<?=$i?>.png" class="w-full" alt="Gallery image"/>
        <!-- </a> -->
        
      </a>
     <?php } ?>
  </div>
</section>