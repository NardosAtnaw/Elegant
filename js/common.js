function header(){
   const header = document.querySelector('.service-header')
   header.innerHTML = `  <div class="container">
   <section class="nav">
     <a href="index.html"><img class="logo" src="./Image/Logo.svg" alt="" /></a>

     <div class="nav-container">
       <div class="close-btn">
         <i class="bx bx-x bx-md"></i>
       </div>
       <ul >
         <li><a href="whoweare.html">Who We Are</a></li>
         <li><a href="service.html">Service</a></li>
         <li><a href="project.html">Our Designs</a></li>
         <li><a href="contact.html">Contact Us</a></li>
       </ul>
     </div>
     <div class="menu">
       <img src="./Image/menu.svg" alt="" />
     </div>
   </section>
   <div class="moto">
     <h1>Your <b class="big">Design</b> & Printing Solution !</h1>
     <a class="btn btn-primary" href="project.html">View Our Works </a>
   </div>
 </div>`
}
function footer(){
    const footer = document.querySelector('.footer-down')
   footer.innerHTML =  ` 
   <div class="container">
     <div class="footer-service">
       <h2>Services</h2>
       Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet
       <div>
         <a href="service.html"><img src="./Image/Service1.svg" alt="" /></a>
         <a href="service.html"><img src="./Image/Service4.svg" alt="" /></a>
         <a href="service.html"><img src="./Image/Service3.svg" alt="" /></a>
         <a href="service.html"><img src="./Image/Service2.svg" alt="" /></a>
         <a href="service.html"><img src="./Image/Service5.svg" alt="" /></a>
       </div>
       

     </div>
     <div class="footer-logo">

       <img src="./Image/footerlogo.svg" alt="">
     </div>
     <div class="footer-service">
       <h2>Contact Us</h2>
       Lorem ipsum dolor sit amet consectetur adipisicing elit.amet consecteturamet consecteturamet 
       <div>
         <a href="https://www.facebook.com/designelias">
           <i class="bx bxl-facebook"></i>
         </a>
         <a href="https://www.behance.net/eli-has">
           <i class="bx bxl-behance"></i>
         </a>
         <a href="mailto:infooelias@gmail.com">
           <i class="bx bx-envelope"></i>
         </a>
         <a href="https://t.me/Elegant_Design_Print">
           <i class="bx bxl-telegram"></i>
         </a>
         <a href="#">
           <i class="bx bx-phone"></i
           >
         </a>
       </div>
       

     </div>
     
   
   </div>
   <div class="footer-copyright">
     <div class="container ">
       <div>

         Copyright 2021 Designed by Versavvy Media
       </div>
       
     </div>


   </div>`  
}
export {header , footer }