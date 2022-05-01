WebFont.load({
    google: {
        families: ['https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap&subset=latin-ext']
    }
});

// Analytics 
// window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config','G-CLHYN8KHT0');
// Analytics

document.querySelector('.js-nav-icon').addEventListener('click', function () {
    let nav = document.querySelector('.js-top-nav');
    if (nav.style.display === "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
});


function sidebar(){
    let sidebar = document.getElementById("sidebar");
    let stop = (sidebar.offsetTop - 60);


    window.onscroll = function (e) {
        if (window.innerWidth > 991)
        {
            let scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
            if (scrollTop >= stop) {
                sidebar.className = 'fixed';
            } else {
                sidebar.className = '';
            }
        }
    }
}

let sidebarControl =  document.getElementById("sidebar");
if (sidebarControl !== null){
    sidebar();
    window.addEventListener('change', sidebar);
}

// İdeal Kilo Hesabı

function hWRatio(){
      let bmi;
      let result = document.getElementById("result");
      let height = parseInt(document.getElementById("height").value);
      let weight = parseInt(document.getElementById("weight").value);
    
      document.getElementById("weight-val").textContent = weight + " kg";
      document.getElementById("height-val").textContent = height + " cm";
    
      bmi = (weight / Math.pow( (height/100), 2 )).toFixed(1);
      result.textContent = "Kilo Endeksin: " + bmi;
    
      if(bmi < 18.5){
          category = "Kilo Alman Lazım 😒";
          result.style.color = "#ffc44d";
      }
    
      else if( bmi >= 18.5 && bmi <= 24.9 ){
          category = "İdeal Kilondasın! 😍";
          result.style.color = "#0be881";
      }
    
      else if( bmi >= 25 && bmi <= 29.9 ){
          category = "Biraz Fazlan Var 😮";
          result.style.color = "#ff884d";
      }
    
      else{
          category = "Acil Kilo Vermen Lazım 😱";
          result.style.color = "#ff5e57";
      }
      document.getElementById("category").textContent = category;
  }


  
// Kalori Hesabı

const form = document.getElementById('form');
form.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
  event.preventDefault();

  const weight = getInputNumberValue("weight");
  const height = getInputNumberValue("height");
  const age = getInputNumberValue("age");
  const gender = getSelectedValue("gender");
  const activityLevel = getSelectedValue("activity__level");

  const basal = Math.round(
    gender === 'female'
      ? (655 + (9.6 * weight) + (1.8 * height) - (4.7 * age))
      : (66 + (13.7 * weight) + (5 * height) - (6.8 * age))
  );

  const maintenance = Math.round(basal * Number(activityLevel));
  const gainWeight = maintenance + 450;
  const loseWeight = maintenance - 450;

  document.getElementById("outBasal");
  outBasal.innerHTML = "Bazal metabolizmanız: " + basal  + " kalori";;

  document.getElementById("outMaintenance");
  outMaintenance.innerHTML = "Kilonuzu korumak için ortalama olarak tüketmeniz gereken: " + maintenance + " kalori" ;

  document.getElementById("outLoseweight");
  outLoseWeight.innerHTML = "Kilo vermek için ortalama olarak tüketmeniz gereken: " + loseWeight + " kalori" ;

  document.getElementById("outGainWeight");
  outGainWeight.innerHTML = "Kilo almak için ortalama olarak tüketmeniz gereken: " + gainWeight + " kalori" ;
}

function getSelectedValue(id) {
  const select = document.getElementById(id);
  return select.options[select.selectedIndex].value;
}

function getInputNumberValue(id) {
  return Number(document.getElementById(id).value);
}



