


import {header , footer} from './common.js'

header()
footer()

// const print = document.getElementById('print')
// const logo = document.getElementById('logo')
// const pack = document.getElementById('packaging')
// const graphics = document.getElementById('graphics')
// const brand = document.getElementById('brand')

const menu = document.querySelector(".menu");
const sidenav = document.querySelector(".nav-container");
const close = document.querySelector(".close-btn");

menu.addEventListener("click", () => {
  sidenav.classList.add("show-nav");
  links.forEach(link => {
    link.style.color = '#f01f01'
})
});
close.addEventListener("click", () => {
  sidenav.classList.remove("show-nav");
});



const btnContainer = document.querySelector('.links-list')
const galleryImage = document.querySelectorAll('.gallery-image')
btnContainer.addEventListener('click', e => {
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

