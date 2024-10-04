<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New-Theme Development</title>
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
<header class="bg-[black]">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="mt-[15px]">
    <button id="straight-bar">
        <div class="pr-[30px]">
         <div class="w-[25px] h-[2px] bg-white my-1 duration-200"></div>
         <div class="w-[25px] h-[2px] bg-white my-1 duration-200"></div>
         <div class="w-[25px] h-[2px] bg-white my-1 duration-200"></div>
         </div>
    </button>
    </div>
    <div class="flex lg:flex-1 w-[160px]">
    <?php 
                    if( has_custom_logo()){
                        the_custom_logo();
                    }
                    else{ 
                        ?>
                         <a href="<?php echo home_url(); ?>" class="text-white">Logo</a>
                    <?php } ?>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900 text-white" aria-expanded="true">
                    <?php wp_nav_menu( 
                    array( 'theme_location' => 'newtheme_main_menu' ,'depth' => 2)
                    ); ?>
        </button>
      </div>
    </div>
  </nav>
  <section class="absolute top-0 z-[100] show duration-300" id="sidebar-content">
    <div class="w-[450px] bg-[#111111] py-[80px] h-[100vh] sidebar-scroll overflow-y-auto	">
    <div class="mx-16 pb-10 cursor-pointer" id="cross-mark">
      <div class="w-[25px] h-[2px] bg-white my-1 duration-300 rotate-45 translate-x-[-4px] translate-y-[0px]"></div>
      <div class="w-[25px] h-[2px] bg-white my-1 duration-300 -rotate-45 translate-x-[-7px] translate-y-[-5px]"></div>
    </div>
    <?php 
    if ( is_active_sidebar( 'sidebar' ) ) {
      dynamic_sidebar('sidebar');
      }
      ?> 
    </div>
  </section>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Product
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->
            </div>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>