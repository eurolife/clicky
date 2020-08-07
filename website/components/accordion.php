<section class="accordion py-4 lg:py-8 xl:py-16">
  <div class="container ac-outer max-w-screen-lg">
    <h2 class="text-white text-2xl sm:text-3xl md:text-4xl xl:text-5xl text-center">Here is a title</h2>

    <div class="accordion-container">
      <?php for ($i = 1; $i <= 5; $i++) { ?>
        <div class="ac">
          <h3 class="ac-q" tabindex="0">Accordion topic <?= $i ?></h3>
          <div class="ac-a">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lacinia nibh.</p>
          </div>
        </div>
      <?php } ?>
    
     
    </div>
  </div>

</section>