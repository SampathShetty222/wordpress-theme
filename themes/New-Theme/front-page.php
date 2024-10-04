<?php get_header(); ?>

<section class="banner">
    <div class="flex">
        <div class="w-[5%] bg-black h-[calc(100vh-108px)] justify-center gap-y-24 flex flex-col social-icons">
            <div class="-rotate-90 flex items-center gap-1.5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg" alt="Linkedin" class="w-[10px]">
            <p class="text-white text-[11px]">Linkedin</p>
             </div>
             <div class="-rotate-90 flex items-center gap-1.5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg" alt="Linkedin" class="w-[10px]">
            <p class="text-white text-[11px]">Linkedin</p>
             </div>
             <div class="-rotate-90 flex items-center gap-1.5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.jpg" alt="Linkedin" class="w-[10px]">
            <p class="text-white text-[11px]">Linkedin</p>
             </div>
              </div>
    <div class="relative Banner-slider bg-[url('<?php echo get_template_directory_uri(); ?>/images/bannerone.jpg')] w-[90%] bg-cover h-[calc(100vh-108px)] bg-center">
        <div class="absolute bottom-[50px] left-[50px]">
            <p class="text-[14px] font-normal leading-[21px] text-white banner-subheading flex items-center gap-[20px]">Portrais</p>
            <h1 class="text-[48px] font-bold leading-[58px] text-white ">You Imagin <br> We Create</h1>
            <button class="text-[12px] font-medium leading-[10px] text-[#c48f56]">Contact Us</button>
    </div>

    <!--start About us pop up section -->
    <div class="relative Banner-slider w-[100%] h-[calc(100vh-108px)] mx-auto transition-all duration-200 delay-500 show" id="slide-section">
    <div class="flex h-full">
        <div class="w-[50%] h-100% bg-[url('<?php echo get_template_directory_uri(); ?>/images/abouts.jpg')] bg-cover h-[calc(100vh-108px)] bg-center">
        </div>
        <div class="w-[50%] h-full bg-[#111111] h-full px-[65px] py-[40px]">
            <p class="text-[14px] text-bold mb-4 text-[#c48f56]">ABOUT ME</p>
            <h1 class="text-[36px] font-bold text-white leading-[46px]">Picture This! <br> Productions</h1>
            <p class="text-[18px] text-white leading-[30px] mt-5">Our group of gifted designers, photographers, videographers, and artists are masters at transforming concepts into powerful and captivating visual content. We have the knowledge and experience to produce results that are captivating and memorable, whether you need branding materials, marketing collateral, social media content, website design, or any other visual elements.</p>
            <button class="text-[#c48f56] pt-5">Read More ></button>
        </div>
    </div>
    </div>
    <!--End About us pop up section -->

    <!-- start Service pop up section -->
    <div class="relative Banner-slider w-full h-[calc(100vh-108px)] mx-auto show" id="service-slide">
    <div class="flex h-full">
        <div class="w-[25%] h-100% bg-[url('<?php echo get_template_directory_uri(); ?>/images/service1.jpg')] bg-cover h-[calc(100vh-108px)] bg-center">
        <h3 class="flex items-end h-full p-10 text-white text-[35px] font-medium home-service"><span class="number">01</span>&nbsp Services</h3>
        </div>
        <div class="w-[25%] h-100% bg-[url('<?php echo get_template_directory_uri(); ?>/images/service2.jpg')] bg-cover h-[calc(100vh-108px)] bg-center">
        <h3 class="flex items-end h-full p-10 text-white text-[35px] font-medium home-service "><span class="number">02</span>&nbsp Services</h3>
        </div>
        <div class="w-[25%] h-100% bg-[url('<?php echo get_template_directory_uri(); ?>/images/service3.jpg')] bg-cover h-[calc(100vh-108px)] bg-center">
        <h3 class="flex items-end h-full p-10 text-white text-[35px] font-medium home-service"><span class="number">03</span>&nbsp Services</h3>
        </div>
        <div class="w-[25%] h-100% bg-[url('<?php echo get_template_directory_uri(); ?>/images/service4.jpg')] bg-cover h-[calc(100vh-108px)] bg-center">
        <h3 class="flex items-end h-full p-10 text-white text-[35px] font-medium home-service"><span class="number">04</span>&nbsp Services</h3>
        </div>
    </div>
    </div>
    <!-- end Service pop up section -->


    </div>
        <div class="w-[5%] h-auto bg-black overflow-hidden flex h-[calc(100vh-108px)] justify-center gap-y-60 flex-col">
            <div class="info -rotate-90 flex gap-[20px]">
            <img src="<?php echo get_template_directory_uri(); ?>/images/x-button.png" alt="Cross-mark" class="cross w-[20px]" id="cross-img-service">
                <h3 class="text-white cursor-pointer" id="banner-service">SERVICES</h3>
            </div>
            <div class="info -rotate-90 flex gap-[20px]">
                <img src="<?php echo get_template_directory_uri(); ?>/images/x-button.png" alt="Cross-mark" class="cross w-[20px]" id="cross-img">
                <h3 class="text-white cursor-pointer about-text" id="banner-top">ABOUT</h3>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>