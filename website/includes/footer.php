<footer>
  <div class="footer-top container p-4 sm:py-8 lg:py-12 text-white text-sm font-sb sm:flex sm:flex-wrap sm:justify-between lg:text-base">

  <div class="mt-4 sm:mt-8 lg:mt-0 order-last lg:w-2/5 xl:w-1/3">
      <?php include './components/newsletter-signup.php' ?>

      <div class="flex mt-4 lg:text-base">
        <div>01234 567 890</div>
        <div class="ml-8">
          <a href="mailto:hello@company.co.uk">hello@company.co.uk</a>
        </div>
      </div>
    </div>
    <?php for ($i = 1; $i <= 3; $i++) { ?>
      <div class="mt-8 sm:mt-0 sm:w-1/3 lg:w-1/5">
        <div><a class="uppercase" href="/">Link <?= $i; ?></a></div>
        <ul>
          <li class="mt-4 xl:mt-8"><a href="/">Here is a long link</a></li>
          <li class="mt-4 xl:mt-8"><a href="/">Short link</a></li>
          <li class="mt-4 xl:mt-8"><a href="/">Short link</a></li>
        </ul>
      </div>
    <?php } ?>
    
  
  </div>

  <div class="bg-blue-navy">
    <div class="container container p-6 text-white text-xs md:text-center lg:leading-none">
      <span class="uppercase font-sb tracking-widest">Copyright Company Name <span class="hidden lg:inline">|</span> <span class="lg:hidden"><br/></span> Website design and development by Clicky</span>
    </div>
    
  </div>

</footer>