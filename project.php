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
      <div class="container">
        <div class="links-list">
          <ul>
            <li class="col-12">
              <a class="active" href="#" id="all">ALL WORKS</a>
            </li>
            <li>
              <a href="#" id="print">PRINTING</a>
            </li>
            <li>
              <a href="#" id="logo">LOGO DESIGNING</a>
            </li>
            <li>
              <a href="#" id="packaging">PACKAGING</a>
            </li>

            <li>
              <a href="#" id="graphics">GRAPHIC DESIGN</a>
            </li>
            <li>
              <a href="#" id="brand"> BRANDING</a>
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
      </div>
    </section>


    <section class="gallery">
      <div class="container">
        <h1>All of Our Works
          <p>
            
    We've wide range of services we offer.
    To see a description of our services under each media, click on the pictures.
          </p>
        </h1>
      </div>
        <div class="gallery-container">
        <?php include "./includes/posts.php"; ?>
        </div>
      
    </section>
<!-- 
    <section class="gallery">
      <div class="container">
        <div class="figure-container">
          <div class="row">
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="logo"
            >
              <img class="grid_image" src="./Image/pic4.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="graphics"
            >
              <img class="grid_image" src="./Image/pic1.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="brand"
            >
              <img class="grid_image" src="./Image/pic3.jpg" alt="" />
            </div>
          </div>
          <div class="row">
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="packaging"
            >
              <img class="grid_image" src="./Image/pic1.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="print"
            >
              <img class="grid_image" src="./Image/pic3.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="logo"
            >
              <img class="grid_image" src="./Image/pic4.jpg" alt="" />
            </div>
          </div>
          <div class="row">
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="packaging"
            >
              <img class="grid_image" src="./Image/pic3.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="print"
            >
              <img class="grid_image" src="./Image/pic4.jpg" alt="" />
            </div>
            <div
              class="gallery-image col-md-3 col-md-offset-1 col-xl-3 col-xxl-3"
              data-id="logo"
            >
              <img class="grid_image" src="./Image/pic1.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section> -->
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
    <footer class="footer-down">

    </footer>
    <script src="./js/pages.js" type="module"></script>
  </body>
</html>
