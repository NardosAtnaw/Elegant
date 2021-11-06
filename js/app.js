import {footer} from './common.js'


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



  
const client1 = document.querySelector('.client1')
const client2 = document.querySelector('.client2')
const client3 = document.querySelector('.client3')
const client4 = document.querySelector('.client4')
const client5 = document.querySelector('.client5')

client1.addEventListener('mouseover', () =>{
  client1.setAttribute('src','./Image/c6.png')
})
client1.addEventListener('mouseleave', () =>{
    client1.setAttribute('src','./Image/c3.png')
  })

  client2.addEventListener('mouseover', () =>{
    client2.setAttribute('src','./Image/c5.png')
  })
  client2.addEventListener('mouseleave', () =>{
      client2.setAttribute('src','./Image/c2.png')
    })

    client3.addEventListener('mouseover', () =>{
      client3.setAttribute('src','./Image/c4.png')
    })
    client3.addEventListener('mouseleave', () =>{
        client3.setAttribute('src','./Image/c1.png')
      })

      client4.addEventListener('mouseover', () =>{
        client4.setAttribute('src','./Image/client5.png')
      })
      client4.addEventListener('mouseleave', () =>{
          client4.setAttribute('src','./Image/client6.png')
        })
    
        client5.addEventListener('mouseover', () =>{
          client5.setAttribute('src','./Image/client8.png')
        })
        client5.addEventListener('mouseleave', () =>{
            client5.setAttribute('src','./Image/client7.png')
          })