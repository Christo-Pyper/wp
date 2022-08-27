<?php include 'post-validation.php';
      include 'tools.php';
      getMovieHeader();
?>

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
      <a href="https://titan.csit.rmit.edu.au/~s3932311/wp/a3/index.php">
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
        <div><br><?php echo $movieData[$GLOBALS['movieIndex']][0]?></div>
      <div class="subtitle"><?php echo $movieData[$GLOBALS['movieIndex']][1]?></div>
      <img src=<?php echo $movieData[$GLOBALS['movieIndex']][2]?> class="posterBookingPage"/>
<iframe width="560" height="315" src=<?php echo $movieData[$GLOBALS['movieIndex']][3]?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </header>

    <main class="bookingMain">
      <section id='Synopsis'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
    <div id="Synopsis">
      <h1> Synopsis</h1>
      <?php echo $movieData[$GLOBALS['movieIndex']][6]?>
  </div>
  <div>
    <h1>Main Actors</h1>
    <b><?php echo $movieData[$GLOBALS['movieIndex']][4][0]?></b><br><?php echo $movieData[$GLOBALS['movieIndex']][4][1]?><br><br>

    <b><?php echo $movieData[$GLOBALS['movieIndex']][4][2]?></b><br><?php echo $movieData[$GLOBALS['movieIndex']][4][3]?><br><br>

    <b><?php echo $movieData[$GLOBALS['movieIndex']][4][4]?></b><br><?php echo $movieData[$GLOBALS['movieIndex']][4][5]?><br><br><br>
</div>

        <div id="Director">
          <b> Director</b><br><?php echo $movieData[$GLOBALS['movieIndex']][4][6]?></div><br>
      </section>

      <div>
        <br><br>
        <form method="POST" action="booking.php?movie=<?php echo $_GET['movie']?>" id="booking">
          <input type="hidden" name="movie" value="<?php echo $_GET['movie']?>">

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
          <?php  $size = count($movieData[$GLOBALS['movieIndex']][5]);
                for ($i = 0; $i < $size; $i += 2) {
                  echo "<div class = \"radio\">
                            <input type=\"radio\" id=" . $movieData[$GLOBALS['movieIndex']][5][$i] ."name=\"Day\" value=" . $movieData[$GLOBALS['movieIndex']][5][$i] . "data-pricing=\"discprice\">
                            <label for=" . $movieData[$GLOBALS['movieIndex']][5][$i] . ">" . $movieData[$GLOBALS['movieIndex']][5][$i] . "-" . $movieData[$GLOBALS['movieIndex']][5][$i+1] . "</label><br><br></div>";
                }
          ?>
      </div>

        <h1>Please Enter Info:</h1>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="user[name]" oninput="this.value = this.value.replace(/[^A-Za-z'``. -]+/, '').replace(/(\..*)\./g, '$1');" /><br>

        <label for="Email">Email:</label><br>
        <input type="email" id="Email" name="user[email]" ><br>
        <label for="Mobile">Mobile:</label><br>
        <input type="tel" id="Mobile" name="user[mobile]" placeholder="0000 000 000" pattern="[0-9]{4} [0-9]{3} [0-9]{3}"><br><br>

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
        <?php $fieldErrors = validateBooking(); ?>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php
if(!empty($_POST)){
  if(!empty($_SESSION)){
    array_push($_SESSION, $_SESSION, $_POST);
  }else{
      $_SESSION = $_POST;
  }
}
  print_r($_SESSION);
  $heading = array("Order Date - Name - Email - Mobile - Movie Code - Day of Movie - Time of Movie");

  $file = fopen("bookings.txt","w");
  fputcsv($file, $heading);

  for($i=0;$i<count($_SESSION);$i++){
    fputcsv($file, $_SESSION[0][$i]);
  }

 ?>


      </pre>
    </aside>

</html>
