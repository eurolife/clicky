<div class="card flex flex-col relative cursor-pointer move-up">

  <div class="absolute top-0 left-0 right-0">
    <img src="images/avatar<?=$i?>.jpg" alt="Photo of person" class="avatar border-blue border-8 rounded-full" />
  </div>

  <div class="bg-white shadow-extra flex-grow mt-16 w-full p-5 md:p-8">
    <a href="#">
      <div class="font-sb tracking-wider mt-10 text-center xl:text-lg lg:mt-12">
        <?php if($i === 2 || $i ===6) { ?>
        <?= $i ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget nisi a dui porttitor posuere.
        <?php } else { ?>
          <?= $i ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        <?php } ?>
      </div>
    </a>
  </div>

</div>