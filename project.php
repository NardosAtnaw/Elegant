<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title>Project</title>
  </head>

  <body>
    <header class="service-header">
      
    </header>
    <section class="links">
      
        <div class="links-list">
          <ul>
            <li class="">
              <a class="active" href="#" id="all">All Works</a>
            </li>
            <li>
              <a href="#" id="print">Printing</a>
            </li>
            <li>
              <a href="#" id="logo">Logo Solution</a>
            </li>
            <li>
              <a href="#" id="packaging">Packaging</a>
            </li>

            <li>
              <a href="#" id="graphics">Design Solution</a>
            </li>
            <li>
              <a href="#" id="brand"> Branding</a>
            </li>
          </ul>
        </div>
        <div class="filter-link"></div>
        <!-- <div class="divide">
          <img src="./Image/divide.svg" alt="" />
        </div>
        <div class="divide2">
          <img src="./Image/divide2.svg" alt="" />
        </div> -->
     
    </section>


    <section class="gallery">
      <div class="container">
      <!-- <h1>
        Some of Our Work
        <p>
          We've wide range of services we offer. To see a description of our
          services under each media, click on the pictures.
        </p> -->
      </h1>
      </div>
        <div class="gallery-container">
        <?php include "./includes/posts.php"; ?>
        </div>
      
    </section>
    <section class="call-to-action1">
    <div class="call-title">
      Please contact us if you would like to order a design or for additional
      information.
    </div>
    <div class="call-btn">
      <a href="contact.html" class="btn btn-outline-secondary" href="#">Contact Us
      </a>
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
              <!-- <span>behance.net/eli-has</span> -->
            </a>
          </div>
  
          <div>
            <a href="https://www.facebook.com/elegantdesignandprint">
              <img src="./Image/co1.svg" alt="" />
              <!-- <span>designelias</span> -->
            </a>
          </div>
          <div>
            <a href="https://t.me/Elegant_Design_Print">
              <img src="./Image/co3.svg" alt="" />
              <!-- <span>Elegant Design</span> -->
            </a>
          </div>
          <div>
            <a href="mailto:infooelias@gmail.com">
              <img src="./Image/co5.svg" alt="" />
              <!-- <span>infooelias@gmail.com</span> -->
            </a>
          </div>
      
        </div>
        <div class="phone">
        <div>
            <a href="#">
              <img src="./Image/co4.svg" alt="" />
              <span>
                +251 11 888 9960
              </span>
            </a>
          </div>
          <div>
            <a href="#">
              <img src="./Image/co6.svg" alt="" />
              <span> +251 913 121812</span>
            </a>
          </div>
        </div>
       
   
      </div>
  
    </section>
    <footer class="footer-down">

    </footer>
    <script src="./js/pages.js" type="module"></script>
  </body>
</html>
