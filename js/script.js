const observer = new IntersectionObserver(entries => {
    entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add("article-transition");
                entry.target.classList.add("playfair-display");
            }, 200 * i)
            return;
        }
        
        entry.target.classList.remove("article-transition");
    })
})

const entries = document.querySelector("main > section:nth-child(2)").children;
const articles = [...entries];
articles.forEach((article) => observer.observe(article));


const days = document.getElementById('day');
const hours = document.getElementById('hour');
const minutes = document.getElementById('minute');
const seconds = document.getElementById('second');

function countdownTimer() {
    const countdownDate = new Date('08/25/2024').getTime();

    const second = 1000;
    const minute = second*60;
    const hour = minute*60;
    const day = hour*24;

    const interval= setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;
    
        days.innerHTML = formatNumber(Math.floor(distance / day));
        hours.innerHTML = formatNumber(Math.floor((distance % day) / hour));
        minutes.innerHTML = formatNumber(Math.floor((distance % hour) / minute));
        seconds.innerHTML = formatNumber(Math.floor((distance % minute) / second));

        if (distance < 0) {
            document.querySelector("main > section:nth-child(3) > article > header > ul").style.display = 'none';
        }
    });

}

function formatNumber(number) {
    if (number < 10) {
        return '0' + number;
    }
    return number;
}

countdownTimer();


// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.querySelectorAll("main > section:nth-child(4) article");
  let dots = document.querySelectorAll("main > section:nth-child(4) > section:nth-of-type(2) > span");

  if (n > slides.length) {slideIndex = 1}

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "flex";
  dots[slideIndex-1].className += " active";
}


let slideIndex = 1;
showSlides(slideIndex);


function openNav() {
  document.querySelector("nav > section:nth-child(3)").style.height = "100vh";
}

function closeNav() {
  document.querySelector("nav > section:nth-child(3)").style.height = "0%";
  document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
  document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
  document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
  document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
}

function openCatalog(id) {

  if (id == 1) {
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "block";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
  } else if (id == 2) {
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "block";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
  } else if (id == 3) { 
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "block";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
  } else if (id == 4){
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "block";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
  }

}


let title = document.querySelector('main > section:nth-child(3) > article > header > h1');
let link = document.querySelector('main > section:nth-child(3) > article > header > a');
let header = document.querySelector('main > section:nth-child(3) > article > header');
let before = document.querySelector('main > section:nth-child(3) > article > header > span:nth-child(2)');
let after = document.querySelector('main > section:nth-child(3) > article > header > span:nth-child(5)');
console.log(after);

header.addEventListener('mouseenter', () => {
  let width = title.offsetWidth;
  before.style.width = width + 'px';
  before.classList.add('after-hover-span');
  before.classList.add('header-before-hover-span');
  width = link.offsetWidth;
  after.style.width = width + 'px';
  after.classList.add('after-hover-span');
  after.classList.add('header-after-hover-span');
});

header.addEventListener('mouseleave', function() {
  before.style.width = 0 + 'px';
  before.classList.remove('after-hover-span');
  before.classList.remove('header-before-hover-span'); 
  after.style.width = 0 + 'px';
  after.classList.remove('after-hover-span');
  after.classList.remove('header-before-hover-span');
});







addUnderline = (title, link, before, after, id) => {
  let width = title.offsetWidth;
  before.style.width = width + 'px';
  before.classList.add('after-hover-span');
  width = link.offsetWidth;
  after.style.width = width + 'px';
  after.classList.add('after-hover-span');

  const lang = document.documentElement.lang;
  if (lang === "fr") {
    switch (id) {
      case 1:
        before.classList.add('fr-first-article-before-underline');
        after.classList.add('fr-first-article-after-underline');
        break;
      case 2:
        before.classList.add('fr-second-article-before-underline');
        after.classList.add('fr-second-article-after-underline');
        break;
      case 3:
        before.classList.add('fr-third-article-before-underline');
        after.classList.add('fr-third-article-after-underline');
        break;
    }
  } else if (lang === "en") {
    switch (id) {
      case 1:
        before.classList.add('en-first-article-before-underline');
        after.classList.add('en-first-article-after-underline');
        break;
      case 2:
        before.classList.add('en-second-article-before-underline');
        after.classList.add('en-second-article-after-underline');
        break;
      case 3:
        before.classList.add('en-third-article-before-underline');
        after.classList.add('en-third-article-after-underline');
        break;
    }
  }
}

removeUnderline = (before, after) => {
  before.style.width = 0 + 'px';
  before.classList.remove('after-hover-span'); 
  after.style.width = 0 + 'px';
  after.classList.remove('after-hover-span'); 
}

const section4asides = document.querySelectorAll('main > section:nth-child(4) > section:first-of-type > article > aside');

const title1 = document.querySelector('main > section:nth-child(4) > section:nth-child(2) > article:first-of-type > aside > h3');
const link1 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:first-of-type > aside > a');
const before1 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:first-of-type > aside > span:first-of-type');
const after1 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:first-of-type > aside > span:nth-of-type(2)');

section4asides[0].addEventListener('mouseenter', () => {
  addUnderline(title1, link1, before1, after1, 1);
});

section4asides[0].addEventListener('mouseleave', () => {
  removeUnderline(before1, after1, 1);
});


const title2 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(2) > aside > h3');
const link2 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(2) > aside > a');
const before2 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(2) > aside > span:first-of-type');
const after2 = document.querySelector('main > section:nth-child(4) > section:nth-child(2) > article:nth-of-type(2) > aside > span:nth-of-type(2)');

section4asides[1].addEventListener('mouseenter', () => {
  addUnderline(title2, link2, before2, after2, 2);
});

section4asides[1].addEventListener('mouseleave', () => {
  removeUnderline(before2, after2, 2);
});


const title3 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(3) > aside > h3');
const link3 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(3) > aside > a');
const before3 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(3) > aside > span:first-of-type');
const after3 = document.querySelector('main > section:nth-child(4) > section:nth-child(2)  > article:nth-of-type(3) > aside > span:nth-of-type(2)');

section4asides[2].addEventListener('mouseenter', () => {
  addUnderline(title3, link3, before3, after3, 3);
});

section4asides[2].addEventListener('mouseleave', () => {
  removeUnderline(before3, after3, 3);
});


