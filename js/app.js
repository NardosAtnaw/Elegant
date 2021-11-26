import { footer } from './common.js'


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

if (window.innerWidth > 1152) {
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
} else {
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

const moreBtn = document.querySelector('.drop')
const dropdownContent = document.querySelector('.drop-down-content')
const moreBtn1 = document.querySelector('.drop1')
const dropdownContent1 = document.querySelector('.drop-down-content1')
const moreBtn2 = document.querySelector('.drop2')
const dropdownContent2 = document.querySelector('.drop-down-content2')
const moreBtn3 = document.querySelector('.drop3')
const dropdownContent3 = document.querySelector('.drop-down-content3')
const moreBtn4 = document.querySelector('.drop4')
const dropdownContent4 = document.querySelector('.drop-down-content4')

moreBtn.addEventListener('click', () =>{
  console.log(moreBtn);
  dropdownContent.classList.toggle('show-dropdown')
  moreBtn.style.transform = 'rotate(0deg)'
  if(dropdownContent.classList.contains('show-dropdown')){
    moreBtn.style.transform = 'rotate(180deg)'
  }
})
moreBtn1.addEventListener('click', () =>{
  console.log(moreBtn1);
  dropdownContent1.classList.toggle('show-dropdown')
  moreBtn1.style.transform = 'rotate(0deg)'
  if(dropdownContent1.classList.contains('show-dropdown')){
    moreBtn1.style.transform = 'rotate(180deg)'
  }
})
moreBtn2.addEventListener('click', () =>{
  console.log(moreBtn2);
  dropdownContent2.classList.toggle('show-dropdown')
  moreBtn2.style.transform = 'rotate(0deg)'
  if(dropdownContent2.classList.contains('show-dropdown')){
    moreBtn2.style.transform = 'rotate(180deg)'
  }
})
moreBtn3.addEventListener('click', () =>{
  console.log(moreBtn3);
  dropdownContent3.classList.toggle('show-dropdown')
  moreBtn3.style.transform = 'rotate(0deg)'
  if(dropdownContent3.classList.contains('show-dropdown')){
    moreBtn3.style.transform = 'rotate(180deg)'
  }
})
moreBtn4.addEventListener('click', () =>{
  console.log(moreBtn4);
  dropdownContent4.classList.toggle('show-dropdown')
  moreBtn4.style.transform = 'rotate(0deg)'
  if(dropdownContent4.classList.contains('show-dropdown')){
    moreBtn4.style.transform = 'rotate(180deg)'
  }
})
const offerApp = Vue.createApp({
  data(){
    return {
      offers: [
        {
          id: 1,
          titles: ["Branding","Banner Printing","Package Printing","Production Paper Printing", "Card Printing"],
          desc1: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          desc2: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          show: true
        },
        {
          id: 2,
          titles: ["Prinintg","Banner Printing","Package Printing","Production Paper Printing", "Card Printing"],
          desc1: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          desc2: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          show: false
        },
        {
          id: 3,
          titles: ["logo design","Banner Printing","Package Printing","Production Paper Printing", "Card Printing"],
          desc1: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          desc2: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          show: false
        },
        {
          id: 4,
          titles: ["packaging","Banner Printing","Package Printing","Production Paper Printing", "Card Printing"],
          desc1: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          desc2: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          show: false
        },
        {
          id: 5,
          titles: ["graphics","Banner Printing","Package Printing","Production Paper Printing", "Card Printing"],
          desc1: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          desc2: `We believe a brand image should be one of your strongest
          assets, communicating the essence of your business. We believe a brand image should be one of your strongest
          assets, communicating the essence of your business.`,
          show: false
        }
        
      ]
    }
  },
  methods: {
    toggleVisiblity(id){
      this.offers.map(offer => {
        
        if(id == offer.id){
          offer.show = true
        }else{
          offer.show = false
        }
        console.log(offer.show);
      })
    },
    lastArray(title){
      this.offers.map(offer => {
        let lastElement = title[title.length - 1] 
        console.log(lastElement);
        if(lastElement){
          return true
        }else{
          console.log("true");
        }
        
      })
      
    }
  }
})

offerApp.mount("#offerApp")

// function desturctTitle(title){
  //   let title2 = title.map(offer => {
    //     return `<li> ${offer} </li>`
    //   }).join('')
    //   console.log(title2);
    //   return title2
    // }
    
    // let offerContent = offers.map(offer => {
      //   return ` <div class="offer-des-container">
      //   <div class="offer-desc-list">
      //     <ul>
      //      ${desturctTitle(offer.titles)}
      //     </ul>
      
      //   </div>
      //   <div class="offer-desc-full">
      //     <p>
      //      ${offer.desc1}
      //     </p>
      //   </div>
      //   <div class="offer-desc-letter">
      //     <p>
      //      ${offer.desc2}
      //     </p>
      //   </div>
      // </div>`
      // })
      // offerDes.innerHTML = offerContent.join('')
      
      const client1 = document.querySelector('.client1')
      const client2 = document.querySelector('.client2')
      const client3 = document.querySelector('.client3')
      const client4 = document.querySelector('.client4')
      const client5 = document.querySelector('.client5')
      
      client1.addEventListener('mouseover', () => {
        client1.setAttribute('src', './Image/c6.png')
      })
      client1.addEventListener('mouseleave', () => {
        client1.setAttribute('src', './Image/c3.png')
      })
      
      client2.addEventListener('mouseover', () => {
        client2.setAttribute('src', './Image/c5.png')
      })
      client2.addEventListener('mouseleave', () => {
        client2.setAttribute('src', './Image/c2.png')
      })
      
      client3.addEventListener('mouseover', () => {
        client3.setAttribute('src', './Image/c4.png')
      })
      client3.addEventListener('mouseleave', () => {
        client3.setAttribute('src', './Image/c1.png')
      })
      
      client4.addEventListener('mouseover', () => {
        client4.setAttribute('src', './Image/client5.png')
      })
      client4.addEventListener('mouseleave', () => {
        client4.setAttribute('src', './Image/client6.png')
      })
      
      client5.addEventListener('mouseover', () => {
        client5.setAttribute('src', './Image/client8.png')
      })
      client5.addEventListener('mouseleave', () => {
        client5.setAttribute('src', './Image/client7.png')
      })


       
      const service1 = document.querySelector('.service1')
      const service2 = document.querySelector('.service2')
      const service3 = document.querySelector('.service3')
      const service4 = document.querySelector('.service4')
      const service5 = document.querySelector('.service5')
      
      service1.addEventListener('click', () => {
        service1.setAttribute('src', './Image/Service1.svg')
      })
      service1.addEventListener('mouseover', () => {
        service1.setAttribute('src', './Image/Service1.svg')
      })
      service1.addEventListener('mouseleave', () => {
        service1.setAttribute('src', './Image/Service1-1.svg')
      })
     
      
      service2.addEventListener('mouseover', () => {
        service2.setAttribute('src', './Image/service2.svg')
      })
      service2.addEventListener('mouseleave', () => {
        service2.setAttribute('src', './Image/Service2-1.svg')
      })
      
      service3.addEventListener('mouseover', () => {
        service3.setAttribute('src', './Image/service3.svg')
      })
      service3.addEventListener('mouseleave', () => {
        service3.setAttribute('src', './Image/service3-1.svg')
      })
      
      service4.addEventListener('mouseover', () => {
        service4.setAttribute('src', './Image/service4.svg')
      })
      service4.addEventListener('mouseleave', () => {
        service4.setAttribute('src', './Image/service4-1.svg')
      })
      
      service5.addEventListener('mouseover', () => {
        service5.setAttribute('src', './Image/service5.svg')
      })
      service5.addEventListener('mouseleave', () => {
        service5.setAttribute('src', './Image/service5-1.svg')
      })
      
  



    



     