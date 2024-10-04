<?php get_header(); ?>

<?php the_content(); ?>

 <!-- Banner -->
 <section class="relative bg-[url('/images/banner.jpg')] bg-cover bg-center top-0 z-0 mx-auto py-[80px]">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="relative md:px-[100px] px-[20px] w-full md:h-[80vh] md:py-0 py-[100px] flex items-center justify-start z-10">
            <div class="grid place-items-start">
                <!-- <p class="text-[#FECA1F80] md:text-2xl text-xl font-bold">Discover, Rent, and Buy Equipment Effortlessly</p> -->
                <h1 class="py-2 font-bold md:text-6xl text-4xl md:leading-[70px] bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-300 md:max-w-3xl">Simplifying Equipment Rental and Sales</h1>
                <p class="md:text-xl text-base text-white md:max-w-3xl">Discover, Rent, and Buy Equipment Effortlessly</p>
                <button class='mt-6 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'><a href="#call-to-action">Get Started</a> <i class="fa-solid fa-arrow-right pl-2 rotate-[-45deg]"></i></button>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section class="w-[90vw] mx-auto md:py-[80px] py-[50px] scroll-mt-20" id="about">
        <div>
            <div class="md:grid grid-cols-2 gap-10">
                <div>
                    <p class="md:text-md text-base uppercase font-medium text-[#5e381b]">Who We Are</p>
                    <h2 class="md:text-5xl text-3xl font-bold md:leading-[50px] md:pb-5 pb-3"> Welcome to <span class="text-[#225b91]">Easy Machines</span></h2>
                    <p class="md:text-xl text-lg text-[#475467]">Easy Machines is your one-stop platform for renting and purchasing a wide range of equipment. Whether you're looking for heavy machinery, construction materials, spare parts, or even second-hand products, we've got you covered. With our user-friendly web app and mobile application, you can easily connect with vendors, franchise owners, and other users to find the equipment you need.</p>
                    <button class='mt-5 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'><a href="#call-to-action">Explore Our Platform</a></button>
                </div>
                <div class="relative grid place-items-center aboutus md:mt-[-150px]">
                    <div class="md:w-[400px] md:ml-0 ml-[-10px] z-[100] border border-8 outline-8 border-white rounded-xl bg-white">
                        <img src="/images/about1.jpg" alt="No-image" class="rounded-xl md:mt-0 mt-5">
                    </div>
                    <div class="grid grid-cols-2 mt-[-130px] z-0">
                        <img src="/images/about2.jpg" alt="No-image" class="border border-[5px] border-white rounded-xl">
                        <img src="/images/about3.jpg" alt="No-image" class="border border-[5px] border-white rounded-xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="md:flex bg-[url('/images/banner2.jpg')] bg-cover bg-center scroll-mt-20" id="machines-works">
        <div class="bg-[rgba(0,0,0,0.8)] md:px-[60px] px-5 md:py-[80px] py-[50px]">
            <div class="md:pb-[40px] pb-5">
                <h2 class="md:text-5xl text-3xl font-bold text-white">How Easy Machines Works</h2>
                <!-- <p class="uppercase text-[16px] text-[#235C93] md:pt-7 pt-4">How it Works</p> -->
                <!-- <button class='mt-6 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'>Start Now</button> -->
            </div>
            <div class="md:flex relative gap-28">
                <div class="md:bg-[url('/images/visionbg.svg')] bg-cover bg-center md:min-w-[433px] md:h-[342px]">
                    <div class="bg-[#F0F0F0] px-6 md:py-8 py-4 rounded-[11px] w-[163px] max-h-[165px]">
                        <h4 class="text-[50px]">20 +</h4>
                        <p class="text-[11px] font-normal">years of experience</p>
                    </div>
                    <div class="bg-[#F0F0F0] px-10 md:py-3 py-4 rounded-[11px] absolute md:left-[250px] max-w-[182px] md:top-[230px] top-[0px] left-[180px] md:block hidden">
                        <h4 class="text-[50px] text-black">1k +</h4>
                        <p class="text-[11px] text-black font-normal">Happy Clients</p>
                    </div>
                </div>
                <div class="">
                    <div class="md:flex gap-16 pb-10 pt-10 md:pt-0 items-center">
                        <h4 class="uppercase text-lg font-semibold text-[#feca1f] pb-3">For Vendors <i class="fa-solid fa-arrow-right bg-clip-text text-transparent bg-gradient-to-r from-[#feca1f] to-white"></i></h4>
                        <div>
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">1. Register Your Business:</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> Sign up and create your vendor profile.</p>
                            </div>
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">2. List Your Products</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> Add your equipment, construction materials, spare parts, and franchise offerings for rent or sale.</p>
                            </div>
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">3. Connect with Customers:</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> Reach a wide audience and manage your listings easily.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex grid md:gap-16 items-center">
                        <div class="order-2 md:order-1">
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">1. BrowseListings:</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> Explore a variety of equipment, construction materials, and parts from trusted vendors.</p>
                            </div>
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">2. Select Your Needs:</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> Choose to rent or purchase based on your requirements.</p>
                            </div>
                            <div class="md:pb-3">
                                <h6 class="font-semibold text-base text-white font-normal">3. MakeaDeal:</h6>
                                <p class="font-normal text-base text-[#dbdbdb] font-normal"> View quotations and finalise your vendor.</p>
                            </div>
                        </div>
                        <h4 class="uppercase text-lg font-semibold text-[#feca1f] order-1 md:order-2 pb-3">For Customers <i class="fa-solid fa-arrow-left bg-clip-text text-transparent bg-gradient-to-r from-white to-[#feca1f]"></i></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>        

    <!-- Second hand Market -->
    <section class="grid md:grid-cols-2 md:scroll-mt-20" id="mission">
        <div class="md:py-[100px] md:pl-[50px] md:me-[-80px] z-[10] md:order-1 order-2">
            <img src="/images/about1.jpg" alt="no-image" class="md:border-[20px] md:border-white md:rounded-xl md:px-0 px-5 md:mt-0 mt-[-15px]">
        </div>
        <div class="md:bg-[url('/images/about2.jpg')] bg-cover relative md:order-2 order-1 md:pt-0 md:pt-[30px]">
            <div class="absolute inset-0 bg-gray-200 md:opacity-95 opacity-0"></div>
            <div class="md:absolute md:left-[120px] md:top-[170px] md:py-0 py-7 md:px-0 px-[20px]">
                <h3 class="md:text-5xl text-3xl font-bold mb-3 ">Discover Our Second-Hand Market</h3>
                <ul class="vision text-xl pt-3">
                    <li class="pb-3 font-normal"><i class="fa-solid fa-star text-[#FECA1F] pe-3"></i>Affordable Equipment and Materials</li>
                    <li class="pb-3 font-normal"><i class="fa-solid fa-star text-[#FECA1F] pe-3"></i>Wide Range of Used Products</li>
                    <li class="pb-3 font-normal"><i class="fa-solid fa-star text-[#FECA1F] pe-3"></i>Quality Equipment and Materials</li>
                    <li class="pb-3 font-normal"><i class="fa-solid fa-star text-[#FECA1F] pe-3"></i>User-Sourced Deals</li>   
                </ul>
                <button class='mt-6 bg-[#FECA1F] text-[#1A1A1A] font-medium rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300' id="openModal"><a href="#call-to-action">Browse Second-Hand Listings</a></button>
            </div>
        </div>
    </section>

    <!-- Heavy Machinery -->
    <section class="bg-[url('/images/machines.svg')] md:px-[50px] px-[20px] w-full md:py-[80px] py-12 md:mt-0 mt-[70px] bg-cover bg-center relative">
        <div class="inset-0 opacity-50 bg-black absolute"></div>
        <div class="opacity-100">
            <div class="md:max-w-[660px] mx-auto md:text-center text-start">
                <h3 class="md:text-5xl text-3xl font-bold text-white md:leading-[60px]">Top Heavy Machinery & Spare Parts Makers</h3>
                <p class="text-xl text-white md:py-7 py-5">Our platform is dedicated to connecting you with the industry's finest, offering a curated selection of companies known for their exceptional innovation, reliability, and performance</p>
            </div>
            <div class="md:grid md:grid-cols-3 gap-4 opacity-95 md:pt-10">
                <div class="bg-[rgba(0,0,0,0.5)] text-center py-10 rounded-xl px-7 md:my-0 my-3">
                    <h4 class="text-white text-2xl font-medium">Robust Equipment:</h4>
                    <p class="text-[rgba(255,255,255,0.6)] pt-3">Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.</p>
                </div>
                <div class="bg-[rgba(0,0,0,0.5)] text-center py-10 rounded-xl px-7 md:my-0 my-3">
                    <h4 class="text-white text-2xl font-medium">Advanced Machinery:</h4>
                    <p class="text-[rgba(255,255,255,0.6)] pt-3">Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.</p>
                </div>
                <div class="bg-[rgba(0,0,0,0.5)] text-center py-10 rounded-xl px-7 md:my-0 my-3">
                    <h4 class="text-white text-2xl font-medium">High quality spare parts:</h4>
                    <p class="text-[rgba(255,255,255,0.6)] pt-3">Featuring industry giants known for their heavy-duty machinery designed to tackle the toughest jobs.</p>
                </div>
            </div>

        </div>
    </section>

     <!-- list -->
     <section class="md:px-[50px] md:py-[80px] py-[50px] px-[20px]">
        <div class="md:flex">
            <div class="md:w-1/2">
                <h2 class="md:text-5xl text-3xl font-bold md:leading-[50px] md:pb-5 pb-3">List Your Equipment and Spare Parts with Us</h2>
                <p class="md:text-xl text-lg text-[#475467]">Welcome to Easy Machines, the premier platform for renting heavy machinery and sourcing spare parts. By registering with us, you can showcase your equipment and spare parts to a broad audience of professionals seeking reliable rental solutions and high-quality components.</p>
            </div>
            <div class="md:w-1/2 place-items-center">
                <div class="md:flex max-w-full mx-auto justify-center">
                    <div>
                        <img src="/images/list-section.svg" alt="list-image-one" class="md:max-w-[290px] md:h-[300px] rounded-xl">
                        <div class="text-center z-100 border border-8 rounded-xl relative bg-white md:w-[200px] border-white md:ml-[20px] md:mt-[-30px]">
                            <h5 class="text-2xl font-bold">20 +</h5>
                            <p class="uppercase text-sm font-normal">Years of Experience</p>
                        </div>
                    </div>
                    <div class="grid place-items-end">
                        <img src="/images/about2.jpg" alt="list-image-two" class="md:max-w-[280px] md:h-[190px] rounded-xl border border-8 border-white md:ml-[-60px] md:mb-[-20px]">
                    </div>
                </div> 
            </div>
        </div>
        <div>
            <h4 class="text-2xl	font-light pb-10">Why List Your Equipment and Spare Parts with Us?</h4>
            <div class="grid gap-10 multiple-items">
                <div class="rounded-xl shadow-lg px-10 py-7 my-5 min-h-[150px]">
                    <i class="fa-solid fa-bars text-[#225B91] pb-5"></i>
                    <h6 class="text-xl">Efficient Management Tools</h6>
                </div>
                <div class="rounded-xl shadow-lg px-10 py-7 my-5 min-h-[150px]">
                    <i class="fa-solid fa-link text-[#225B91] pb-5"></i>
                    <h6 class="text-xl">Expand Your Network</h6>
                </div>
                <div class="rounded-xl shadow-lg px-10 py-7 my-5 min-h-[150px]">
                    <i class="fa-regular fa-eye text-[#225B91] pb-5"></i>
                    <h6 class="text-xl">Increased Visibility</h6>
                </div>
                <div class="rounded-xl shadow-lg px-10 py-7 my-5 min-h-[150px]">
                    <i class="fa-solid fa-globe text-[#225B91] pb-5"></i>
                    <h6 class="text-xl">Broaden Your Reach</h6>
                </div>
                <div class="rounded-xl shadow-lg px-10 py-7 my-5 min-h-[150px]">
                    <i class="fa-solid fa-magnifying-glass text-[#225B91] pb-5"></i>
                    <h6 class="text-xl">Detailed Product Showcases</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose us -->
    <section class="md:my-[140px] mt-[50px] md:mt-20 md:px-[50px] relative scroll-mt-20" id="why-choose-us">
        <div class="absolute md:top-[-100px] top-[-50px] left-[-50px] md:w-[400px] opacity-60">
            <img src="/images/jb.png" alt="">
        </div>
        <div class="text-center md:pb-8 pb-10 md:pt-0 pt-10">
            <!-- <p class="uppercase pb-3 opacity-95">Sub-Heading</p> -->
            <h3 class="text-5xl font-bold opacity-95">Why Choose Easy Machines</h3>
        </div>
        <div class="flex justify-evenly autoplay">
            <div class="md:w-[350px] min-h-[250px] md:my-10 my-5 ">
                <div class="text-center">
                    <img src="images/about1.jpg" alt="No-image" class="rounded-t-2xl shadow-lg">
                </div>
                <div class="text-center py-6 px-4 bg-white shadow-md shadow-[rgba(75, 87, 106, 0.14)] rounded-b-2xl">
                    <h4 class="text-2xl pb-3 font-normal" id="title">Comprehensive Listings</h4>
                    <p class="text-[#475467]" id="description">Find equipment, construction materials, and spare parts from various vendors, including new and second-hand options, all in one place</p>
                </div>
            </div>
            <div class="md:w-[350px] min-h-[250px] md:my-10 my-5">
                <div class="text-center">
                    <img src="images/about2.jpg" alt="No-image" class="rounded-t-xl shadow-lg">
                </div>
                <div class="text-center py-6 px-4 bg-white shadow-md shadow-[rgba(75, 87, 106, 0.14)] rounded-b-2xl">
                    <h4 class="text-2xl pb-3 font-normal">User-Friendly Interface</h4>
                    <p class="text-[#475467]">Our platform is designed for ease of use, ensuring a seamless experience on both our web app and mobile application.</p>
                </div>
            </div>
            <div class="md:w-[350px] min-h-[250px] md:my-10 my-5">
                <div class="text-center">
                    <img src="images/about3.jpg" alt="No-image" class="rounded-t-xl shadow-lg">
                </div>
                <div class="text-center py-6 px-4 bg-white shadow-md shadow-[rgba(75, 87, 106, 0.14)] rounded-b-2xl">
                    <h4 class="text-2xl pb-3 font-normal">Trusted Vendors</h4>
                    <p class="text-[#475467]">Wepartner with reputable vendors and franchise owners to provide you with high-quality equipment, construction materials, and spare parts. </p>
                </div>
            </div>
            <div class="md:w-[350px] min-h-[250px] md:my-10 my-5">
                <div class="text-center">
                    <img src="images/about3.jpg" alt="No-image" class="rounded-t-xl shadow-lg">
                </div>
                <div class="text-center py-6 px-4 bg-white shadow-md shadow-[rgba(75, 87, 106, 0.14)] rounded-b-2xl">
                    <h4 class="text-2xl pb-3 font-normal">Flexible Options</h4>
                    <p class="text-[#475467]"> Whether you want to rent or buy, new or used, Easy Machines offers the flexibility to meet your specific <br> needs</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-[#FECA1F] w-full md:px-[50px] px-7 md:mt-0 mt-10 md:pt-0 pt-[50px] scroll-mt-40" id="call-to-action">
        <div class="md:flex grid">
            <div class="md:w-1/2 w-full md:mt-[-45px] md:px-[90px] md:order-1 order-2 md:pt-0 pt-10">
                <img src="/images/cta2.png" alt="cta-image">
            </div>
            <div class="md:w-1/2 w-full flex flex-col justify-center md:max-w-xl md:order-2 order-1">
                <h3 class="text-4xl text-black font-bold leading-xl pt-4">Get the Easy Machines App</h3>
                <p class="text-black font-normal pt-3 text-xl">Enjoy all the features of Easy Machines on the go! Download our mobile application for convenient access to equipment listings, secure transactions, and more. </p>
                <div class="md:flex gap-8 md:pt-12 pt-7">
                    <img src="images/applestore.svg" alt="apple-store"  class="pb-3 md:pb-0">
                    <img src="images/googlestore.svg" alt="google-store" class="pb-3 md:pb-0">
                </div>
            </div>
        </div>
    </section>

    <!-- Popup form -->
    <dialog class="modal p-10 max-w-4xl bg-white rounded-3xl shadow-xl" id="modal">
        <div class="absolute top-0 right-0 bg-[#FECA1F] rounded-bl-xl px-5 py-3 text-white cursor-pointer" id="closeModal"><i class="fa-solid fa-xmark text-2xl"></i></div>
        <div class="flex">
                <form autocomplete="off" method="post" id="contactForm" action="https://api.web3forms.com/submit">
                    <input type="hidden" name="access_key" value="7e69e00e-b314-44aa-9ddf-bd9312876e47">
                    <p class="text-lg font-medium pt-5 pb-3">Name</p>
                    <input type="text" placeholder="Your Name" class="outline-0 border p-2 md:w-[350px] rounded-lg border-slate-400" name="name" autocomplete="name" id="name" required>
                    <p class="text-lg font-medium pt-5 pb-3">Email</p>
                    <input type="email" placeholder="Your Email" class="outline-0 border p-2 md:w-[350px] rounded-lg border-slate-400" name="email" autocomplete="new-password" id="email" required>
                    <p class="text-lg font-medium pt-5 pb-3">Phone</p>
                    <input type="phone" placeholder="Your Phone Number" class="outline-0 border p-2 md:w-[350px] rounded-lg border-slate-400" name="phone" autocomplete="new-password" id="phone" required><br>
                    <div class="w-full text-center">
                    <button type="submit" class='mt-4 bg-[#FECA1F] text-[#1A1A1A] font-normal rounded-[111px] px-5 py-3 hover:bg-[#225b91] hover:text-white duration-300'>Submit</button>
                    </div>
                </form>
        </div>
    </dialog>


<?php get_footer(); ?>