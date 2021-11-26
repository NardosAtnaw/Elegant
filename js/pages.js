


import {header , footer} from './common.js'

header()
footer()




const menu = document.querySelector(".menu");
const nav = document.querySelector(".nav");
const links = document.querySelectorAll('.link')
const logo = document.querySelector(".logo");
const close = document.querySelector(".close-btn");
const sidenav = document.querySelector(".nav-container");
menu.addEventListener("click", () => {
  sidenav.classList.add("show-nav");
  links.forEach(link => {
    link.style.color = '#10284e'
})
});
close.addEventListener("click", () => {
  sidenav.classList.remove("show-nav");
});

if(window.innerWidth > 1152){
  console.log("scroll");
  console.log(window.innerWidth);
  window.addEventListener("scroll", () => {
    const navheight = nav.getBoundingClientRect().height;
    const scorllheight = window.pageYOffset;
    const upperText = document.querySelector('.upper-text')
    const upperImg = document.querySelector(".upper-img")
    if (scorllheight > navheight) {
      menu.innerHTML = `<img src="./Image/menu.svg" alt="" />`;

      logo.innerHTML = `<a href="./index.html"><img src="./Image/logo2.svg" alt="Elias Logo" /> </a>`;
      nav.classList.add("fixed-nav");
      links.forEach(link => {
          link.style.color = '#4D4B4B'
      })
      

    } else {
      logo.innerHTML = `<a href="./index.html"><img src="./Image/logo2.svg" alt="Elias Logo" />  </a>`;
      nav.classList.remove("fixed-nav");
      menu.innerHTML = ` <img src="./Image/menu.svg" class="ham" alt="" />`;
      links.forEach(link => {
          link.style.color = '#4D4B4B'
      })
      
    }
  });
}else{
  window.addEventListener("scroll", () => {
    const navheight = nav.getBoundingClientRect().height;
    const scorllheight = window.pageYOffset;

    if (scorllheight > navheight) {
      menu.innerHTML = `<img src="./Image/menu.svg"  alt="" />`;

      logo.innerHTML = `<a href="./index.html"><img src="./Image/logo2.svg" alt="Elias Logo" /> </a>`;
      nav.classList.add("fixed-nav");
   

    } else {
      logo.innerHTML = `<a href="./index.html"><img src="./Image/logo2.svg" alt="Elias Logo" />  </a>`;
      nav.classList.remove("fixed-nav");
      menu.innerHTML = ` <img src="./Image/menu.svg" alt="" />`;
     
    }
  });
}



// const print = document.getElementById('print')
// const logo = document.getElementById('logo')
// const pack = document.getElementById('packaging')
// const graphics = document.getElementById('graphics')
// const brand = document.getElementById('brand')

const btnContainer = document.querySelector('.links-list')
const galleryImage = document.querySelectorAll('.grid_item')
btnContainer.addEventListener('click', e => {
  console.log(galleryImage);
   e.preventDefault()
  galleryImage.forEach(img =>{
      let id = img.dataset.id
      img.classList.remove('show-img')
      if(e.target.id !== id){
          img.classList.add('show-img')
      }
      
      if(e.target.id === 'all'){
        img.classList.remove('show-img')
      }
  })
})

