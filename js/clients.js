const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn_hamburger');
const nav = document.querySelector('.nav');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-nav_item');
const logoDiv = document.querySelector('.logo-div');
const openChat = document.getElementById('openChat');


let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){
        openChat.style.zIndex = "1";
        logoDiv.style.display = "none";
        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));

        showMenu = true;
    }else{
        hamburger.classList.remove('open');
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        showLogo();
        showMenu = false;
    }
}

function showLogo(){
    setTimeout(() => {
        openChat.style.zIndex = "10";
        logoDiv.style.display = "block";
    }, 600);
}
