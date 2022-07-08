<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lunardo Booking Page</title>

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
              <li><a href="#Synopsis">Synopsis</a></li>
              <li><a href="#Main Actors">Main Actors</a></li>
              <li><a href="#Director">Director</a></li>
              <li><a href="#Booking">Booking</a></li>
            </ul>
          </nav>
    </div>

    <header class="bookingHead">
      <div><br>Top Gun: Maverick</div>
      <img src="../../media/top-gun.jpg" class="posterBookingPage"/>
<iframe width="560" height="315" src="https://www.youtube.com/embed/giXco2jaZ_4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </header>

    <main class="bookingMain">
      <section id='Synopsis'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
    <div id="Synopsis">
      <h1> Synopsis</h1>
    After more than 30 years of service as one of the Navy's top aviators, Pete "Maverick" Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him. Training a detachment of graduates for a special assignment, Maverick must confront the ghosts of his past and his deepest fears, culminating in a mission that demands the ultimate sacrifice from those who choose to fly it.
  </div>
  <div id="Main Actors">
    <h1>Main Actors</h1>
    <b>Tom Cruise</b><br>Lt. Pete "Maverick" Mitchell<br><br>

    <b>Jennifer Connelly</b><br>Penny Benjamin<br><br>

    <b>Miles Teller</b><br>Lt. Bradley 'Rooster' Bradshaw<br><br><br>
</div>

        <div id="Director">
          <b> Director</b><br>Joseph Kosinski</div><br>
      </section>

      <div>
        <br><br>
        <form method="GET" action="booking.php" id="booking">
          <input type="hidden" name="movie" value="ACT">

          <h1>Book Movie Seats:</h1>

          <label for="seats[STA]">Standard Adult Seats:</label><br>
          <select name="seats[STA]" data-fullprice="20.50" data-discprice="15">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>
          <label for="seats[STP]">Standard Concession Seats:</label><br>
          <select name="seats[STP]" data-fullprice="18" data-discprice="13.50">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>
          <label for="seats[STC]">Standard Child Seats:</label><br>
          <select name="seats[STC]" data-fullprice="16.50" data-discprice="12">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>
          <label for="seats[FCA]">First Class Adult Seats:</label><br>
          <select name="seats[FCA]" data-fullprice="20.50" data-discprice="15">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>
          <label for="seats[FCP]">First Class Concession Seats:</label><br>
          <select name="seats[FCP]" data-fullprice="18" data-discprice="13.50">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>
          <label for="seats[FCC]">First Class Child Seats:</label><br>
          <select name="seats[FCC]" data-fullprice="16.50" data-discprice="12">
            <option disabled selected value>Please Select</option>
            <option 1="1">1</option>
            <option 2="2">2</option>
            <option 3="3">3</option>
            <option 4="4">4</option>
            <option 5="5">5</option>
            <option 6="6">6</option>
            <option 7="7">7</option>
            <option 8="8">8</option>
            <option 9="9">9</option>
            <option 10="10">10</option>
          </select>
          <br><br>

          <div class = "radio">
          <h1>Select Movie Time:</h1>
          <input type="radio" id="Mon" name="Day" value="Mon" data-pricing="discprice">
          <label for="Mon">Monday-9pm</label><br><br>
          <input type="radio" id="Tue" name="Day" value="Tue" data-pricing="fullprice">
          <label for="Tue">Tuesday-9pm</label><br><br>
          <input type="radio" id="Wed" name="Day" value="Wed" data-pricing="fullprice">
          <label for="Wed">Wednesday-9pm</label><br><br>
          <input type="radio" id="Fri" name="Day" value="Fri" data-pricing="fullprice">
          <label for="Fri">Friday-9pm</label><br><br>
          <input type="radio" id="Sat" name="Day" value="Sat" data-pricing="fullprice">
          <label for="Sat">Saturday-6pm</label><br><br>
          <input type="radio" id="Sun" name="Day" value="Sun" data-pricing="fullprice">
          <label for="Sun">Sunday-6pm</label><br><br>
      </div>

        <h1>Please Enter Info:</h1>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="user[name]" required><br>
        <label for="Email">Email:</label><br>
        <input type="text" id="Email" name="user[email]" required><br>
        <label for="Mobile">Mobile:</label><br>
        <input type="text" id="Mobile" name="user[mobile]" required><br>

        <input type="submit" value="Submit">
        </form>
      </div>
    </main>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

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
