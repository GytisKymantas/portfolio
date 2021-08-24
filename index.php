<?php
  require __DIR__ . '/src/app.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
   
    <title>Document</title>
  </head>
  <body>
    <!-- <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Portfolio</a></li>

        </ul>
    </nav> -->
    <main>
      <div class="main__header">
        <!-- <div class="element">
        </div> -->
        <div class="element-content">
          <h1>Full-Stack Web Developer</h1>
          <h2>Gytis Kymantas</h2>
          <ul>
            <li>✔ Front-end</li>
            <li>✔ Back-end</li>
            <li>✔ Database</li>
          </ul>

          <div class="element-logo">
            <img src="images/certify.png" alt="">
          </div>
        </div>
      </div>

      <div class="main__content">
        <!-- <img src="images/background.jpg" alt="computer" > -->
      </div>
    </main>
    <section class="gallery">
      <div class="gallery__wrapper">
        <div class="gallery__container">
          <img src="images/natours.png" alt="">
        </div>
        <div class="gallery__container">
          <img src="images/trillo.png" alt="">
        </div>
        <div class="gallery__container">
          <img src="images/gymcrop.png" alt="">
        </div>
        <div class="gallery__container">
          <img src="images/omnifod.png" alt="">
        </div>
        <div class="gallery__container">
          <img src="images/nexter.png" alt="">
        </div>
        <div class="gallery__container">
          <img src="images/candles.png" alt="">
        </div>

      </div>

    </section>

    <section class="core-skills">
      <div class="core-container">
        <!-- <div class="core-header">
          <h3>Core skills</h3>
        </div> -->
        <div class="core">
          <img src="images/html.png" alt="html" />
        </div>
        <div class="core">
          <img src="images/css.png" alt="css" />
        </div>
        <div class="core">
          <img src="images/javascript.png" alt="javascript" />
        </div>
        <div class="core">
          <img src="images/jquery.png" alt="jquery" />
        </div>
        <div class="core">
          <img src="images/php.png" alt="php" />
        </div>
        <div class="core">
          <img src="images/mysql.png" alt="mysql" />
        </div>
      </div>
    </section>

    <section class="form__section">
      <div class="container__header">
        <h2>Contact me below for more information!</h2>
      </div>
    <ul class="contact__options">
        <li> 
            <a href="mailto:gkymantas@gmail.com" target="_BLANK">Email
              <ion-icon name="mail-open-outline"></ion-icon>
            </a>
        </li>
        <li> 
          <a href="#" target="_BLANK">LinkedIn
            <ion-icon name="logo-linkedin"></ion-icon>          </a>
        </li>
        <li> 
          <a href="#" target="_BLANK">Github
            <ion-icon name="logo-github"></ion-icon>          </a>
        </li>
        <li>
          <a href="#" target="_BLANK">Twitter
            <ion-icon name="logo-twitter"></ion-icon>          </a>
        </li>


    </ul>        




    <div class="form__container">
      <form id="contact" action="index.php" method="post">
        <input
          class="input"
          type="text"
          placeholder="Your Name"
          id="name"
          required="required"
          name="vardas"
        />
        <input
          class="input-1"
          type="email"
          placeholder="Your Email"
          id="email"
          required="required"
          name="email"
        />
        <textarea
          placeholder="Your Message..."
          name="message"
          required
        ></textarea>
        <div class="knopke">
          <button class="btn" type="submit" name="submit" id="contact-submit">
            Submit
          </button>
        </div>
      </form>
    </div>
    </section>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="../portfolio/jquery/index.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
