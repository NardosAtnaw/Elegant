function header(){
   const header = document.querySelector('.service-header')
   header.innerHTML = `  <div class="container">
   <section class="nav">
     <a href="index.php"><img class="logo" src="./Image/logo2.svg" alt="Elias Logo"  /></a>

     <div class="nav-container">
       <div class="close-btn">
         <i class="bx bx-x bx-md"></i>
       </div>
       <ul >
         <li><a href="whoweare.html">Who We Are</a></li>
         <li><a href="service.html">Service</a></li>
         <li><a href="project.php">Our Designs</a></li>
         <li><a href="contact.html">Contact Us</a></li>
        
       </ul>
     </div>
     <div class="menu">
       <img src="./Image/menu.svg" alt="" />
     </div>
   </section>
   <div class="moto">
     <h1>Your Design & Printing Solution !</h1>
     <a class="btn btn-primary" href="project.php">View Our Works </a>
   </div>
 </div>`
}
function footer(){
    const footer = document.querySelector('.footer-down')
   footer.innerHTML =  ` 
   <div class="container">
 
     <div class="footer-logo">

       <img src="./Image/ElegantLogo.png" alt="">
       <h1>Your Design & Printing Solution !</h1>
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

       <a href="https://versavvymedia.com/">  Copyright 2021 Designed by Versavvy Media </a>

       </div>
       
     </div>


   </div>`  
}
export {header , footer }