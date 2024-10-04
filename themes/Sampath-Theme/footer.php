  
  <? wp_footer(); ?>
  <section class="bg-[#171717] text-white border-b-[1px] border-slate-700	">
    <div class="md:px-[50px] px-[30px] md:py-[80px] py-[50px] grid md:grid-cols-3">
      <div>
        <!-- <img src="/images/logoT.png" alt="" class="w-[80px]">
        <p>NVS are leading the charge towards a more sustainable future, offering a thrilling blend of cutting-edge technology, zero emissions, and unparalleled efficiency. Our journey towards a cleaner, #71ca00er world with electric vehicles leading the way.</p> -->
        <?php if( is_active_sidebar('footer-one')){
          dynamic_sidebar('footer-one');
        } ?>
      </div>
      <div>
        <div class="grid md:place-items-center md:py-0 py-[30px]">
        <?php if( is_active_sidebar('footer-two')){
          dynamic_sidebar('footer-two');
        } ?>
        </div>
      </div>
      <div>
        <?php if( is_active_sidebar('footer-three')){
          dynamic_sidebar('footer-three');
        } ?> 
      </div>
    </div>
  </section>
  <section class="bg-[#171717] text-white">
    <div class="md:px-[50px] px-[30px] py-[20px] grid md:grid-cols-2">
      <?php if( is_active_sidebar('bottom-footer-one')){
        dynamic_sidebar('bottom-footer-one');
      } ?>
      <div class="flex md:justify-end justify-start md:pt-0 pt-[20px] gap-10 ">
        <?php if( is_active_sidebar('bottom-footer-two')){
          dynamic_sidebar('bottom-footer-two');
        } ?>
      </div>
    </div>
  </section>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('wpcf7mailsent', function(event) {
        window.history.replaceState(null, null, window.location.pathname);
    }, false);
});
  </script>
</body>
</html>