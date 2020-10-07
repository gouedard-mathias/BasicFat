const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');
const navLinks = document.querySelectorAll('.nav-links li');
const navA= document.querySelectorAll('.nav-links a');

const navSlide = () => {

    burger.addEventListener('click',() => {
        nav.classList.toggle('nav-active');
        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index/5 +0.1}s`;
            }
        });
        burger.classList.toggle('toggle');
    });
    navA.forEach((link) => {
        link.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            burger.classList.toggle('toggle');
            navLinks.forEach((link, index) => {
                if (link.style.animation){
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index/5 +0.1}s`;
                }
            });
        });
    });
}

navSlide();