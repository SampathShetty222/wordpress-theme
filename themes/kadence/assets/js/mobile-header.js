document.addEventListener('DOMContentLoaded', function () {
    // Handle Product dropdown toggle in the desktop view
    const productButton = document.querySelector('button[aria-controls="product-menu"]');
    const productMenu = document.querySelector('#product-menu');
  
    productButton.addEventListener('click', function () {
      const isExpanded = productButton.getAttribute('aria-expanded') === 'true';
      productButton.setAttribute('aria-expanded', !isExpanded);
      productMenu.classList.toggle('hidden');
    });

     // Handle Product dropdown toggle two in the desktop view
     const productButtonTwo = document.querySelector('button[aria-controls="product-menu-two"]');
     const productMenuTwo = document.querySelector('#product-menu-two');
   
     productButtonTwo.addEventListener('click', function () {
       const isExpanded = productButtonTwo.getAttribute('aria-expanded') === 'true';
       productButtonTwo.setAttribute('aria-expanded', !isExpanded);
       productMenuTwo.classList.toggle('hidden');
     });

     
  
    // Handle mobile menu toggle
    const mobileMenuButton = document.querySelector('button[aria-controls="mobile-menu"]');
    const mobileMenu = document.querySelector('#mobile-menu');
  
    mobileMenuButton.addEventListener('click', function () {
      const isOpen = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden', !isOpen);
    });
  
    // Close mobile menu when close button is clicked
    const closeMobileMenuButton = document.querySelector('button[aria-controls="close-mobile-menu"]');
    closeMobileMenuButton.addEventListener('click', function () {
      mobileMenu.classList.add('hidden');
    });
  
    // Handle sub-menu toggle in mobile view
    const productMobileButton = document.querySelector('button[aria-controls="product-mobile-menu"]');
    const productMobileMenu = document.querySelector('#product-mobile-menu');
  
    productMobileButton.addEventListener('click', function () {
      const isExpanded = productMobileButton.getAttribute('aria-expanded') === 'true';
      productMobileButton.setAttribute('aria-expanded', !isExpanded);
      productMobileMenu.classList.toggle('hidden');
    });

    // Handle sub-menu toggle in mobile view
    const productMobileButtonTwo = document.querySelector('button[aria-controls="product-mobile-menu-two"]');
    const productMobileMenuTwo = document.querySelector('#product-mobile-menu-two');

    productMobileButtonTwo.addEventListener('click', function () {
        const isExpanded = productMobileButtonTwo.getAttribute('aria-expanded') === 'true';
        productMobileButtonTwo.setAttribute('aria-expanded', !isExpanded);
        productMobileMenuTwo.classList.toggle('hidden');
      });
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    var prevButton = document.querySelector('.slick-prev');
    if (prevButton) {
      prevButton.innerHTML = '';
    }
  });

document.addEventListener('DOMContentLoaded', function() {
    var nextButton = document.querySelector('.slick-next');
    if (nextButton) {
      nextButton.innerHTML = '';
    }
});

$('.multiple-items').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    arrow:false,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
    });

const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuClose = document.getElementById('mobile-menu-close');

mobileMenuButton.addEventListener('click', () => {
  mobileMenu.hidden = !mobileMenu.hidden;
});

mobileMenuClose.addEventListener('click', () => {
  mobileMenu.hidden = true;
});

$('.autoplay').slick({
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });