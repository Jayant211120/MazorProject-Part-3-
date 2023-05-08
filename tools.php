<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motors</title>
    <link rel="stylesheet" href="toolskesath.css" />
    <!-- Icons CDS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
                    >Motors</a>
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
<!-- -------------------------------------------------------------------------------------- -->
                <li><a href="wheels.php">Wheels</a></li>
<!-- -------------------------------------------------------------------------------------- -->
                <li><a href="flyingcontroller.php">Flying Controller</a></li>
<!-- -------------------------------------------------------------------------------------- -->
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
    <section id="selections">
      <div class="options">
        <!-- <div class="buttons"> -->

        <div class="buttons background-colorone">
          <img src="Images/glue gun.jpg" alt="No Image Found" />
          <form action="hotgluegun.php"method=POST>
          <button>Add To Card</button>
          <button>Buy/Order</button>
          </form>
        </div>

        <div class="buttons background-colorone">
          <img src="Images/camera.jpg" alt="No Image Found" />
          <form action="minicamera.php"method=POST>
          <button>Add To Card</button>
          <button>Buy/Order</button>
          </form>
        </div>

        <div class="buttons background-colorone" disabled>
          <span style='font:2rem solid;color:white;'>Not Available</span>
          <img src="Images/twizer.jpg" alt="No Image Found" disabled/>
          <form action=""method=POST>
          <button disabled>Add To Card</button>
          <button disabled>Buy/Order</button>
          </form>
        </div>
      </div>

      <div class="optionstwo">
        <div class="buttons background-colorone">
          <img src="Images/soldering iron.jpg" alt="No Image Found" />
          <form action="Solderingiron.php">
          <button>Add To Card</button>
          <button>Buy/Order</button>
          </form>
        </div>
        <div class="buttons background-colorone">
            <img src="Images/soldering iron coel.jpg" alt="No Image Found" />
            <form action="solderingironcoel.php"method=POST>
            <button>Add To Card</button>
            <button>Buy/Order</button>
            </form>
          </div>
          <div class="buttons background-colorone">
            <img src="Images/soldering iron set.jpg" alt="No Image Found" />
            <form action="solderingironset.php"method=POST>
            <button>Add To Card</button>
            <button>Buy/Order</button>
            </form>
          </div>
          <div class="buttons background-colorone">
            <img src="Images/screw driver.jpg" alt="No Image Found" />
            <form action="screwdriver.php"method=POST>
            <button>Add To Card</button>
            <button>Buy/Order</button>
            </form>
          </div>
          <div class="buttons background-colorone">
            <img src="Images/cutter.jpeg" alt="No Image Found" />
            <form action="wirescripper.php"method=POST>
            <button>Add To Card</button>
            <button>Buy/Order</button>
            </form>
          </div>
          <div class="buttons background-colorone">
            <img src="Images/drill machine.jpg" alt="No Image Found" />
            <form action="drillmachine.php"method=POST>
            <button>Add To Card</button>
            <button>Buy/Order</button>
            </form>
          </div>
        </div>
    </section>
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