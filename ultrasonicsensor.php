<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motors</title>
    <link rel="stylesheet" href="breadboardonekesath.css" />
    <!-- Icons CDS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script>
      var data = 1;
      var data2 = 60;
      document.getElementById("root").innerText = data;
      document.getElementById("changeprice").innerText = data2;
      function decrement() {
        if (data > 1) {
          data = data - 1;
          document.getElementById("root").innerText = data;
        } else if (data == 1) {
          document.getElementById("root").innerText = data;
        } else {
          document.getElementById("root").innerText = "No data found";
        }
        if (data2 > 60) {
          data2 = data2 - 60;
          document.getElementById("changeprice").innerText = data2;
        } else if (data2 == 60) {
          document.getElementById("changeprice").innerText = data2;
        } else {
          document.getElementById("changeprice").innerText = "No Data Found";
        }
      }
      function increment() {
        data = data + 1;
        document.getElementById("root").innerText = data;

        data2 = data2 + 60;
        document.getElementById("changeprice").innerText = data2;
      }
    </script>
  </head>
  <body>
    <!---- Header Section -------------------------------------------------------------->
    <section id="header">
      <h2 class="headingone">Jayant</h2>
      <input class="serch" type="search" placeholder="search" name="srch" />
      <div class="information">
        <i class="fa-solid fa-phone-volume"></i>
        <p>9671414679</p>
        <i class="fa-sharp fa-solid fa-envelope"></i>
        <p>jayant62644@gmail.com</p>
      </div>
    </section>
    <!-- -------------------------------------------------------------------------------------------------- -->
    <!-- Navigation Section -->
    <section id="navigation-bar">
      <!-- -------------------------------------------------------------------------------------------------- -->
      <!-- Navigation Bar -->
      <nav class="navbar">
        <!-- --------------------------------------------------------------------------------------- -->
        <ul class="unordered-list">
          <!-- First List -->
          <li class="list" id="home-hover">
            <a href="main.php" class="outer-color">Home</a>
          </li>
          <!-- ----------------------------------------------------------------------------------------- -->
          <!-- Second List -->
          <li class="list">
            <a href="#" class="outer-color"
              >Products
              <!-- Sub second List one -->
              <ul class="un">
                <li id="motors-hover">
                  <a href="motors.php"
                    >Motors</a
                  >
                </li>

                <!-- -------------------------------------------------------------------------------------------- -->

                <li><a href="breadboard.php">Bread Board</a></li>

                <!-- ----------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="arduino.php"
                    >Arduino
                  </a>
                </li>

                <!-- ------------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="wires.php"
                    >Wires
                  </a>
                </li>

                <!-- -------------------------------------------------------------------------------------------------- -->
                <li id="list">
                  <a href="sensors.php"
                    >Sensors
                  </a>
                </li>

                <!-- ----------------------------------------------------------------------------------------------------- -->
                <li><a href="tools.php">Tools</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
                <li><a href="wheels.php">Wheels</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
                <li><a href="flyingcontroller.php">Flying Controller</a></li>
                <!-- ------------------------------------------------------------------------------------- -->
              </ul>
            </a>
          </li>
          <!-- ------------------------------------------------------------------------------------------ -->
          <!-- ----------------------------------------------------------------------------------------------- -->
          <!-- Fourth List -->
          <li class="list" id="home-hover">
            <a href="discount.php" class="outer-color">Discount/Sale</a>
          </li>
        </ul>
      </nav>
    </section>
    <!-- -------Configure images------------------------------------------------------------------------- -->
    <section id="insideimage">
      <div class="bigimage">
        <img src="Images/ultrasonic sensor.jpg" alt="No Image Found" />
      </div>
      <div class="imagecontent">
        <span>Ultrasonic Sensor Module - HC-SR04</span>
        <div class="stars">
          <div class="starsrow">
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
            <span class="fa fa-star fa-1x" style="color: orange"></span>
          </div>
          <span style="padding: 2rem 0px">Availability:500 in stock</span>
          <span style="color: orange; padding: 2rem 0px; font: 3rem solid"
            >Rs:60</span
          >
          <span>Quantity</span>

          <div
            style="
              display: flex;
              flex-direction: row;
              font: 30px solid;
              padding: 2rem 0px;
            "
          >
            <button
              onclick="decrement()"
              style="height: 2rem; width: 2rem; font: 30px solid"
            >
              -
            </button>
            <p id="root" style="padding: 0 1rem">1</p>
            <button
              onclick="increment()"
              style="height: 2rem; width: 2rem; font: 30px solid"
            >
              +
            </button>
          </div>

          <span>Subtotal:<span id="changeprice">60</span></span>
          <form action="detailscapturedofuser.php"method=POST>
          <button class="btn">Buy</button>
          <button class="btn">Add to card</button>
          </form>
        </div>
      </div>
    </section>
    <div class="center" style="position: absolute; top: 60rem; z-index: -1">
      <div
        class="symbols"
        style="font: 2rem solid; position: relative; left: 3rem"
      >
        <i class="fa-solid fa-check"></i>
        <span>3-5 days Fast Delivery</span>
        <i class="fa-duotone fa-phone"></i>
        <span>Dedicate Support(10 AM to 10 PM)</span><br />
        <i class="fa-solid fa-sack-dollar"></i>
        <span>Cash On Delivery Available On All Orders</span>
      </div>
      <span style="font: 50px solid; position: relative; left: 3.5rem"
        >Description</span
      ><br />

      <p
        style="
          font: 20px solid;
          position: relative;
          left: 3.5rem;
          padding: 2rem 0px;
        "
      >
        The Ultrasonic Sensor uses Ultrasonic waves to determine the distance of
        an object like Bats, hence it can be used as a distance measuring
        sensor. There are two Ultrasonic Transducers present in which one acts
        as a Transmitter which transmits a high frequency Ultrasonic signal and
        other acts as a receiver which will wait for the receiving of echo
        signal which gets reflected by any object in its path. The time between
        the two signals when divider by speed of sound gives us the distance of
        the object. Theoretically the sensor claims to have a measuring distance
        of 2cm to 400cm. However, a range up to 75-80cm can be easily achieved
        practically. They are cheap, easy to interface and require low power to
        operate. They can be used to measure the depth of water as waves can
        travel in water, detect and avoid obstacles in the path of a robot and
        also as a parking assist sensor.
      </p>
      <span
        style="
          font: 25px solid;
          position: relative;
          left: 3.5rem;
          padding: 10px 0px;
        "
        >Ultrasonic Sensor Specifications</span
      >
      <ul
        style="
          font: 20px solid;
          padding: 20px 0px;
          position: relative;
          left: 4.5rem;
        "
      >
        <li>Operating voltage: +5V</li>
        <li>Operating Current: <15mA</li>
        <li>Theoretical Distance that can be measured: 2cm to 4m</li>
        <li>Practical Distance that can be measured: 2cm to 80cm</li>
        <li>Accuracy: 3mm</li>
        <li>Measuring angle covered:15°</li>
      </ul>
    </div>
    >
    <!------Footer Section ------------------------------------------------------------------------------------------ -->
    <section id="footer">
      <center>
        <p class="footer-para">Thank You For Using This Website</p>
      </center>

      <footer class="foot">
        <!-- Information of developer -->
        <div class="foot-info">
          <i class="fa-solid fa-phone-volume"></i>
          <p>9671414679</p>
          <i class="fa-sharp fa-solid fa-envelope"></i>
          <p>jayant62644@gmail.com</p>
        </div>

        <!-- Iframe used for google map -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.431623139593!2d76.1201770150129!3d28.796208782353485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3912672e389f1817%3A0x94a6410d9a550c6d!2sDurga%20Colony%2C%20Shakti%20Vihar%2C%20Bhiwani%2C%20Haryana%20127021!5e0!3m2!1sen!2sin!4v1677523054922!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>

        <!-- Social Media Symbols -->
        <div class="social-media">
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
      </footer>
    </section>
  </body>
</html>
