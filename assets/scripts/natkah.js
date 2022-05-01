WebFont.load({
    google: {
        families: ['https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap&subset=latin-ext']
    }
});

// Analytics 
// window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config','G-CLHYN8KHT0');
// Analytics

document.querySelector('.js-nav-icon').addEventListener('click', function () {
    var nav = document.querySelector('.js-top-nav');
    if (nav.style.display === "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
});


function sidebar(){
    var sidebar = document.getElementById("sidebar");
    var stop = (sidebar.offsetTop - 60);


    window.onscroll = function (e) {
        if (window.innerWidth > 991)
        {
            var scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
            if (scrollTop >= stop) {
                sidebar.className = 'fixed';
            } else {
                sidebar.className = '';
            }
        }
    }
}
sidebar();
window.addEventListener('change', sidebar);