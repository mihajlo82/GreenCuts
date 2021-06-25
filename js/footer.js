let loader = document.querySelector('.loader');
let headerSiteStart = document.querySelector('.header-site-start');

//loader...
window.addEventListener('load', function(){
    loader.style.display = 'none';
});

//scroll
window.addEventListener('scroll', function(){
    if(window.pageYOffset > 50){
         headerSiteStart.classList.add('scroll-header');
         headerSiteStart.style.height = '10%;'
    }
    else{
         headerSiteStart.classList.remove('scroll-header');
    }
});


//hamburger menu header
let hambMenu = document.querySelector(".hambMenu");
let hamb1MenuWrapper = document.querySelector(".hamb1-menu-wrapper");
let closeBtn = document.querySelector('.close-button');


//navigating hrefs
let homeInnerBtn = document.querySelector(".inner-home-btn");
let aboutInnerBtn = document.querySelector(".inner-about-btn");
let serviceInnerBtn = document.querySelector(".inner-service-btn");
let galleryInnerBtn = document.querySelector(".inner-gallery-btn");
let contactInnerBtn = document.querySelector(".inner-contact-btn");

homeInnerBtn.addEventListener("click", function(){
    hamb1MenuWrapper.style.display = 'none';
    hambMenu.style.display = 'block';
    location.href = "#home";
    
});

aboutInnerBtn.addEventListener("click", function(){
    hamb1MenuWrapper.style.display = 'none';
    hambMenu.style.display = 'block';
    location.href = "#about";
});

serviceInnerBtn.addEventListener("click", function(){
    hamb1MenuWrapper.style.display = 'none';
    hambMenu.style.display = 'block';
    location.href = "#service";
});

galleryInnerBtn.addEventListener("click", function(){
    hamb1MenuWrapper.style.display = 'none';
    hambMenu.style.display = 'block';
    location.href = "#gallery";
});

contactInnerBtn.addEventListener("click", function(){
    hamb1MenuWrapper.style.display = 'none';
    hambMenu.style.display = 'block';
    location.href = "#contact";
});
//navigating hrefs END


// footer YEAR holder
let footerDate = document.querySelector(".date-holder");
let time= new Date();
let year = time.getFullYear().toString();
footerDate.innerHTML = year;




// functional part
hambMenu.addEventListener("click", open);
closeBtn.addEventListener('click', close);

function open(){
    hambMenu.style.display = 'none';
    hamb1MenuWrapper.style.display = 'block';
}

function close(){
    hambMenu.style.display = 'block';
    hamb1MenuWrapper.style.display = 'none';
}



//on resize close hamb menu 
window.addEventListener('resize', function(){
    if(window.innerWidth > 850){
        hamb1MenuWrapper.style.display = 'none';   
    }
});