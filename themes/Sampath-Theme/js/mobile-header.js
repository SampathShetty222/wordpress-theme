
let hamberger = document.getElementById("hamberger");
let menuBlock = document.getElementById('menu-block');

hamberger.addEventListener('click',()=>{
    menuBlock.classList.toggle('hidden');
    hamberger.classList.toggle('active');
})

