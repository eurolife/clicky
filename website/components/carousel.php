
<section class="owl-carousel">
  <?php for ($i = 1; $i <= 5; $i++) { ?>
    <div class="relative image-wrapper" style="background-image: url(images/carousel-bg.jpg); background-size: cover;">
    <div class="relative p-4 xl:p-8 lg:absolute inset-0 flex flex-col items-center justify-center z-50">
      <img src="images/avatar<?=$i?>.jpg" alt="Photo of person" class="avatar border-white border-8 rounded-full" />
      <div class="w-full mt-4 text-white text-center xl:leading-loose xl:tracking-wide font-sb xl:font-lg">
        <div class="">“<?= $i ?>. Praesent id congue magna. Duis vitae fermentum sem, id dignissim augue. Nullam ullamcorper nibh magna, et lacinia nulla efficitur in. Donec eros est, varius ut nibh in. Hendrerit pharetra orci. Vivamus orci urna, dictum sed orci mattis, eleifend varius ante.”</div>
        <div class="uppercase mt-4">Name / Role / Company</div>
      </div>
    </div>
    <div class="tint-30 absolute inset-0 bg-black z-40"></div>
    <img src="images/carousel-bg.jpg"
     srcset="images/carousel-bg@2x.jpg 2x,
             images/carousel-bg@3x.jpg 3x"
     class="bg-image" alt="Decorative background image">
  </div>
 <?php } ?>
</section>

