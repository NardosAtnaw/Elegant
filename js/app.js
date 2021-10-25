import {footer} from './common.js'


footer()


const menu = document.querySelector(".menu");
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

  
const client1 = document.querySelector('.client1')
const client2 = document.querySelector('.client2')

client1.addEventListener('mouseover', () =>{
  client1.setAttribute('src','./Image/client2.jpg')
})
client1.addEventListener('mouseleave', () =>{
    client1.setAttribute('src','./Image/client3.jpg')
  })

  client2.addEventListener('mouseover', () =>{
    client2.setAttribute('src','./Image/client1.jpg')
  })
  client2.addEventListener('mouseleave', () =>{
      client2.setAttribute('src','./Image/client4.jpg')
    })