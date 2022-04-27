WebFont.load({
    google: {
        families: ['https://fonts.googleapis.com/css2?family=Passion+One&family=Poppins:wght@300;400;500&display=swap&subset=latin-ext']
    }
});

// Analytics 
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config','G-CLHYN8KHT0');
// Analytics

document.querySelector('.js-nav-icon').addEventListener('click', function () {
    var nav = document.querySelector('.js-top-nav');
    if (nav.style.display === "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
});
