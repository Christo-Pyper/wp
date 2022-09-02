
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>


    <div class="bar">
      <a href="https://titan.csit.rmit.edu.au/~s3932311/wp/a2/index.php">
          <img src='../../media/logo-black.png' class="LogoBar"/>
        </a>
          <nav>
            <ul>
              <li><a class="navbar" href="#About Us">About Us</a></li>
              <li><a class="navbar" href="#Seats and Prices">Seats and Prices</a></li>
              <li><a class="navbar" href="#Now Showing">Now Showing</a></li>
              <li><a class="navbar" href="#Contact Us">Contact Us</a></li>
            </ul>
          </nav>
    </div>

    <header>
    	<div>
    	   	<img src='../../media/logo.png' class="LogoHead"/>
          Lunardo
            <div class="script">Classic Cinema<br><br></div>
    	</div>
      <div class="line"></div>
    </header>

    <main>
      <section id="About Us">
        <h1 class="subtitle"><br><br>About Us</h1>
        The Lunardo Cinema is reopened!<br><br>The Lunardo Cinema is a classic small town cinema,
        updated with a design to compete with modern cinemas.
         Our classic cinema is now upgraded with brand new projection and sound systems using the top-of-the-line products:
          3D Dolby Vision projection and Dolby Atmos sound.
           Our extensive renovations now allow for a higher class experience, with standard seating, and brand new reclinable first class seats.
           The Lunardo Cinema is reopened!<br><br>The Lunardo Cinema is a classic small town cinema,
           updated with a design to compete with modern cinemas.
            Our classic cinema is now upgraded with brand new projection and sound systems using the top-of-the-line products:
             3D Dolby Vision projection and Dolby Atmos sound.
              Our extensive renovations now allow for a higher class experience, with standard seating, and brand new reclinable first class seats.
            <img src='../../media/seats.jpg'/ class="inline">
      </section>
      <section id="Seats and Prices">
        <h1 class="subtitle"><br><br>Seats and Prices</h1>
        <div class="Seats">
          <h1>Standard Seats</h1>
          <img src='../../media/Profern-Standard-Twin.png'/>
          <table>
            <tr>
              <th>Seat Type</th>
              <th>Seat Code</th>
              <th>Discounted Prices</th>
              <th>Normal Prices</th>
            </tr>
            <tr>
              <td>Standard Adult</td>
              <td>STA</td>
              <td>$15.00</td>
              <td>$20.50</td>
            </tr>
            <tr>
              <td>Standardt Concession</td>
              <td>STP</td>
              <td>$13.50</td>
              <td>$18.00</td>
            </tr>
            <tr>
              <td>Standard Child</td>
              <td>STC</td>
              <td>$12.00</td>
              <td>$16.50</td>
            </tr>
        </table>

        </div>
        <div class="Seats">
          <h1>First Class Seats</h1>
          <img src='../../media/Profern-Verona-Twin.png'/>
          <table>
            <tr>
              <th>Seat Type</th>
              <th>Seat Code</th>
              <th>Discounted Prices</th>
              <th>Normal Prices</th>
            </tr>
            <tr>
              <td>First Class Adult</td>
              <td>FCA</td>
              <td>$24.00</td>
              <td>$30.00</td>
            </tr>
            <tr>
              <td>First Class Concession</td>
              <td>FCP</td>
              <td>$22.50</td>
              <td>$27.00</td>
            </tr>
            <tr>
              <td>First Class Child</td>
              <td>FCC</td>
              <td>$21.00</td>
              <td>$24.00</td>
            </tr>
        </table>
        </div>
      </section>
      <section id="Now Showing">
        <h1>Now Showing</h1>
          <div class="card">
            <div class="front"><img src="../../media/top-gun.jpg" class="poster"></div>
            <div class="back">
              <b>Top Gun: Maverick</b>After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground
              <br><br><a href="https://www.imdb.com/title/tt1745960">IMDB Link</a>
              <br><br><b>Upcoming Show Times</b>
              <table>
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>Mon-Tue</td>
                  <td>9pm</td>
                </tr>
                <tr>
                  <td>Wed-Fri</td>
                  <td>9pm</td>
                </tr>
                <tr>
                  <td>Sat-Sun</td>
                  <td>6pm</td><tr>
                  </tr>
            </table>
              <a href="booking.php?movie=ACT" class="button">Make a Booking</a>
            </div>
          </div>
          <div class="card">
            <div class="front"><img src="../../media/lightyear.jpg" class="poster"></div>
            <div class="back">
              <b>Lightyear</b>While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source.
              <br><br><a href="https://www.imdb.com/title/tt10298810">IMDB Link</a>
              <br><br><b>Upcoming Show Times</b>
              <table>
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>Mon-Tue</td>
                  <td>12pm</td>
                </tr>
                <tr>
                  <td>Wed-Fri</td>
                  <td>6pm</td>
                </tr>
                <tr>
                  <td>Sat-Sun</td>
                  <td>12pm</td>
            </table>
              <a href="booking.html?movie=FAM" class="button">Make a Booking</a>
            </div>
          </div>
          <div class="card">
            <div class="front"><img src="../../media/prith.jpg" class="poster"></div>
            <div class="back">
              <b>Samrat Prithviraj</b>A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan.
              <br><br><a href="https://www.imdb.com/title/tt9637132">IMDB Link</a>
              <br><br><b>Upcoming Show Times</b>
              <table>
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>Mon-Tue</td>
                  <td>6pm</td>
                </tr>
                <tr>
                  <td>Wed-Fri</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Sat-Sun</td>
                  <td>9pm</td>
            </table>
              <a href="booking.html?movie=AHF" class="button">Make a Booking</a>
            </div>
          </div>
          <div class="card">
            <div class="front"><img src="../../media/harrisparis.jpg" class="poster"></div>
            <div class="back">
              <b>Mrs Harris Goes to Paris</b>A widowed cleaning lady in 1950s London falls madly in love with a couture Dior dress, and decides that she must have one of her own.
              <br><br><a href="https://www.imdb.com/title/tt5151570">IMDB Link</a>
              <br><br><b>Upcoming Show Times</b>
              <table>
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                </tr>
                <tr>
                  <td>Mon-Tue</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>Wed-Fri</td>
                  <td>12pm</td>
                </tr>
                <tr>
                  <td>Sat-Sun</td>
                  <td>3pm</td>
            </table>
              <a href="booking.html?movie=RMC" class="button">Make a Booking</a>
            </div>
          </div>
      </section>
    </main>



    <footer id="Contact Us">

        <h1>Contact Us</h1>
        <p><b>Email:</b> Lunardo@gmail.com<br><b>Phone:</b> 0450 332 213<br><b>Address:</b> 2 Cinema St, Foxville 3242, Melbourne</p>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Christoffel S3932311 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>


  <script type="text/javascript">



    window.addEventListener('scroll', () => {
      const navBarArr = document.getElementsByClassName('navbar');
      const section1 = document.getElementById('About Us').getBoundingClientRect();
      const section2 = document.getElementById('Seats and Prices').getBoundingClientRect();
      const section3 = document.getElementById('Now Showing').getBoundingClientRect();
      if(section1.top < 400 && section1.top > -200){
        navBarArr[0].style.color = 'blue'
      }else if(section2.top < 400 && section2.top > -200){
        navBarArr[1].style.color = 'blue'
      }else if(section3.top < 400 && section3.top > -200){
        navBarArr[2].style.color = 'blue'
      }else{
        for (var i = 0; i < navBarArr.length; i++) {
          navBarArr[i].style.color = 'white'
        }
      }
  })
  </script>
  <aside id="debug">
    <hr>
    <h3>Debug Area</h3>
    <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
    </pre>
  </aside>
</html>
