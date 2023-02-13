const mobile_icon = document.getElementById('mobile-icon');
const mobile_menu = document.getElementById('mobile-menu');
const hamburger_icon = document.querySelector("#mobile-icon i");

function openCloseMenu() {
  mobile_menu.classList.toggle('block');
  mobile_menu.classList.toggle('active');
}

function changeIcon(icon) {
  icon.classList.toggle("fa-xmark");
}

mobile_icon.addEventListener('click', openCloseMenu);

var sideMenu = document.getElementById('side-menu');
function openMenu() {
    sideMenu.classList.remove('left-[-250px]');
    sideMenu.classList.add('left-0');
}

function closeMenu() {
    sideMenu.classList.remove('left-0');
    sideMenu.classList.add('left-[-250px]');
}

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});

    
function toggleSlideover(){
    document.getElementById('slideover-container').classList.toggle('invisible');
    document.getElementById('slideover-bg').classList.toggle('opacity-0');
    document.getElementById('slideover-bg').classList.toggle('opacity-50');
    document.getElementById('slideover').classList.toggle('translate-x-full');
}

const mySlider = document.querySelectorAll(".mySlider"),
  index = document.querySelectorAll(".index");
let counter = 1;
var timer = setInterval(autoslide, 10000);

slideFun(counter);

function autoslide() {
  counter += 1;
  slideFun(counter);
}
function resetTimer() {
  if (typeof timer !== "undefined") {
    clearInterval(timer);
  }
  timer = setInterval(autoslide, 10000);
}

function plusSlides(n) {
  counter += n;
  slideFun(counter);
  resetTimer();
}
function currentSlide(n) {
  counter = n;
  slideFun(counter);
  resetTimer();
}
function slideFun(n) {
  let i;
  for (i = 0; i < mySlider.length; i++) {
    mySlider[i].style.display = "none";
    mySlider[i].classList.add("hidden");
  }
  for (i = 0; i < index.length; i++) {
    index[i].classList.remove("action");
  }
  if (n > mySlider.length) {
    counter = 1;
  }
  if (n < 1) {
    counter = mySlider.length;
  }
  if (mySlider[counter - 1].style.removeProperty) {
    mySlider[counter - 1].style.removeProperty("display");
  } else {
    mySlider[counter - 1].style.removeAttribute("display");
  }
  mySlider[counter - 1].classList.remove("hidden");
  mySlider[counter - 1].classList.add("md:grid", "md:grid-cols-3", "md:gap-4");
  index[counter - 1].classList.add("action");
}
