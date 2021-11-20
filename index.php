<?php include "./includes/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/vue@next"></script>
  <title>Home</title>
</head>

<body>
  <header class="home-header">
    <!-- <video class="video" src="./Image/Abstract_Red.mp4" loop muted autoplay> -->
    <!-- <video class="video" src="./Image/Orange Abstract (720p).mp4" loop muted autoplay>
    </video> -->
    <div id="bg">

</div>
    <div class="container">
      <section class="nav ">
        <a class="logo" href="index.php"><img src="./Image/logo2.svg" alt="Elias Logo" /></a>

        <div class="nav-container">
          <div class="close-btn">
            <i class="bx bx-x bx-md"></i>
          </div>
          <ul>
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
        <h4>Every design process has a solution that we provide.</h4>
        <h1>Your <span> </span> Solution!</h1>
        <h5>We're Elegant Design </h5>
        <div class="btn-flex">
          <a class="btn btn-outline-secondary " href="project.php">VIEW WORKS</a>
          <a class="btn btn-outline-secondary " href="contact.html">CONTACT US</a>
        </div>

      </div>
    </div>
  </header>
  <section class="we-do">
    <div class="container">
      <div class="row align-center">
        <div class="img-container col-12 col-md-6">
          <!-- <img src="./Image/illust1.svg" alt="" /> -->
        </div>
        <div class="cont-desc">
          <h1> </h1>
          <p>
            We offer a wides range of graphic design in small quantity
            catalogue, brochures, business card, greeting card, magazine
            services to clients. We offer a wide range of graphic design in
            small quantity catalogue, brochure, business card, greeting card,
            magazine services to clients.
          </p>
        </div>
      </div>

      <div class="btn-flex">
        <a class="btn btn-outline-primary " href="whoweare.html">OUR STORY</a>

      </div>
    </div>
  </section>
  <section class="offer">
    <div class="container">
      <h1>
        What We Offer
        <p>
          In order to reach our clients, we provide a variety of services.
          Please see the list below and contact us if you have any queries.
        </p>
      </h1>
      <div class="offer-des" id="offerApp">
        <div class="offer-links">
          <button class="" @click="toggleVisiblity(1)"><img src="./Image/Service1.svg" alt="" /></button>
          <button class="" @click="toggleVisiblity(2)"><img src="./Image/service2.svg" alt="" /></button>
          <button class="" @click="toggleVisiblity(3)"><img src="./Image/service3.svg" alt="" /></button>
          <button class="" @click="toggleVisiblity(4)"><img src="./Image/service4.svg" alt="" /></button>
          <button class="" @click="toggleVisiblity(5)"><img src="./Image/service5.svg" alt="" /></button>
        </div>

        <div class="offer-des-container" v-for="offer in offers" :key="offer.id">
          <div class="offer2" v-if="offer.show">
            <div class="offer-desc-list">
              <span class="offer3" v-for="title in offer.titles" :key="title">

                <span>{{ title }}</span>
                <span v-if="!offer.titles.length - 1">

                  <img src="./Image/circle.svg" alt="">
                </span>



              </span>

            </div>
            <div class="offer-desc-full">
              <p>
                {{ offer.desc1 }}
              </p>
            </div>
            <div class="offer-desc-letter">
              <p>
                {{ offer.desc2 }}
              </p>
            </div>
          </div>


        </div>
      </div>
      <div class="btn-flex">
        <a class="btn btn-outline-primary " href="project.php">VIEW WORKS</a>

      </div>

    </div>
  </section>

  <section class="gallery">
    <div class="container">
      <h1>
        Some of Our Work
        <p>
          We've wide range of services we offer. To see a description of our
          services under each media, click on the pictures.
        </p>
      </h1>
    </div>
    <div class="gallery-container">

      <?php include "./includes/posts.php"; ?>

    </div>
  </section>
   
  <section class="call-to-action3">
  
  <div class="call-title">
  PLEASE CONTACT US IF YOU WANT TO ORDER.
     
    </div>
    <div class="call-btn">
    <a class="btn btn-outline-secondary " href="contact.html">CONTACT US</a>
    </div>
  </section>
  <section class="img-portfoilo">
  <img src="./Image/portfoilo.svg" alt="">
  </section>
 
  <section class="call-to-action2 ">
  
    <div class="call-title ">
    WE DO DIFFERENT DESIGNS AND PRINTING, VIEW OUR WORKS.
    <p>
      We  convey our clients their brand is a target  to market on the internet.
      Take a look at some of our works!
    </p>
    </div>
    <div class="call-btn">
    <a class="btn btn-outline-secondary " href="contact.html">View Works</a>
    </div>
  </section>
  <section class="client">
    <div class="container">
      <h1>
        Our Clients
        <p>
          We've done a lot of designs for different firms, and these are a few
          of or clients.
        </p>
      </h1>
      <div class="client-image">
        <div class="client-logo3">
          <img src="./Image/c1.png" class="client3" alt="" />
        </div>
        <div class="client-logo1">
          <img src="./Image/c3.png" class="client1" alt="" />
        </div>
        <div class="client-logo2">
          <img src="./Image/c2.png" class="client2" alt="" />
        </div>
        <div class="client-logo4">
          <img src="./Image/client6.png" class="client4" alt="" />
        </div>
        <div class="client-logo5">
          <img src="./Image/client7.png" class="client5" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="container">
      <h1>
        Contact Us
        <p>Contact us at any time using the information below.</p>
      </h1>
    </div>
    <div class="contact-container row">
      <div class="contact-list col-12">
        <div>
          <a href="https://www.behance.net/eli-has">
            <!-- <i class="bx bxl-behance"></i> -->
            <img src="./Image/co2.svg" alt="" />
            <span>behance.net/eli-has</span>
          </a>
        </div>

        <div>
          <a href="https://www.facebook.com/designelias">
            <img src="./Image/co1.svg" alt="" /><span>designelias</span>
          </a>
        </div>
        <div>
          <a href="https://t.me/Elegant_Design_Print">
            <img src="./Image/co3.svg" alt="" /><span>Elegant Design</span>
          </a>
        </div>
        <div>
          <a href="mailto:infooelias@gmail.com">
            <img src="./Image/co5.svg" alt="" /><span>infooelias@gmail.com</span>
          </a>
        </div>
        <div>
          <a href="#">
            <img src="./Image/co4.svg" alt="" /><span>
              +251 11 888 9960
            </span>
          </a>
        </div>
        <div>
          <a href="#">
            <img src="./Image/co4.svg" alt="" /><span> +251 913 121812</span>
          </a>
        </div>
      </div>

      <div class="contact-btn">
        <a class="btn btn-primary" href="#">Contact Us </a>
      </div>
    </div>
  </section>
  
  <section class="call-to-action1">
    <div class="call-title">
    Please contact us if you would like to order or for additional
      information.
    </div>
    <div class="call-btn">
      <a href="contact.html" class="btn btn-outline-secondary" href="#">Contact Us
      </a>
    </div>
  </section>

  <!-- <section class="map1">
    <div class="location">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7881.425883314249!2d38.749138648132856!3d8.998539770849385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85b8f94377a5%3A0x85a927d87a61e06f!2sElegant%20Design%20and%20Print!5e0!3m2!1sen!2set!4v1634731467017!5m2!1sen!2set" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section> -->

  <footer class="footer-down"></footer>
  <script src="./js/animate.js"></script>
  <script src="./js/app.js" type="module"></script>
</body>

</html>