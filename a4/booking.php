<?php

  $moviesObject = [
    'ACT' => [
      'title' => 'Top Gun Maverick',
      'rating' => 'PG-13',
      'genre' => 'Action, Adventure, Sci-Fi',
      'plot' => 'After more than thirty years of service as one of the Navys top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him.',
      'imdb' => 'tt1745960',
      'screening-summary' => 'Mon-Tue: 9pm, Wed-Fri: 9pm, Sat-Sun: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'RMC' => [
      'title' => 'Mrs Harris Goes to Paris',
      'rating' => 'PG-13',
      'genre' => 'Romance, Drama, Comedy',
      'plot' => 'A widowed cleaning lady in 1950s London falls madly in love with a couture Dior dress, and decides that she must have one of her own.',
      'imdb' => 'tt5151570',
      'screening-summary' => 'Mon-Tue: Not Showing, Wed-Fri: 12pm, Sat-Sun: 3pm',
      'screenings' => [
        'WED' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'THU' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'FRI' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'SAT' => [
          'time' => '3pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '3pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'FAM' => [
      'title' => 'Lightyear',
      'rating' => 'PG-13',
      'genre' => 'Animation, Action, Adventure',
      'plot' => 'While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source.',
      'imdb' => 'tt10298810',
      'screening-summary' => 'Mon-Tue: 12pm, Wed-Fri: 6pm, Sat-Sun: 12pm',
      'screenings' => [
        'MON' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '12pm',
          'rate' => 'discount'
        ],
        'WED' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'THU' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'FRI' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '12pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '12pm',
          'rate' => 'regular'
        ]
      ]
    ],
    'AHF' => [
      'title' => 'Prithviraj',
      'rating' => 'MA15+',
      'genre' => 'Action, Drama, History',
      'plot' => 'A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan.',
      'imdb' => 'tt9637132',
      'screening-summary' => 'Mon-Tue: 6pm, Wed-Fri: Not Showing, Sat-Sun: 9pm',
      'screenings' => [
        'MON' => [
          'time' => '6pm',
          'rate' => 'discount'
        ],
        'TUE' => [
          'time' => '6pm',
          'rate' => 'regular'
        ],
        'SAT' => [
          'time' => '9pm',
          'rate' => 'regular'
        ],
        'SUN' => [
          'time' => '9pm',
          'rate' => 'regular'
        ]
      ]
    ]
  ];

  $seatsObject = [
    'STA'=> [
      'desc' => 'Standard Adult',
      'regular' => 20.50,
      'discount' => 15.00
    ],
    'STP'=> [
      'desc' => 'Standard Concession',
      'regular' => 18.00,
      'discount' => 13.50
    ],
    'STC'=> [
      'desc' => 'Standard Child',
      'regular' => 16.50,
      'discount' => 12.00
    ],
    'FCA'=> [
      'desc' => 'First Class Adult',
      'regular' => 30.00,
      'discount' => 24.00
    ],
    'FCP'=> [
      'desc' => 'First Class Concession',
      'regular' => 27.00,
      'discount' => 22.50
    ],
    'FCC'=> [
      'desc' => 'First Class Child',
      'regular' => 24.00,
      'discount' => 21.00
    ]
  ];

  $movie = 'ACT'; // default setting for A4 simplicity
  if ( isset($_GET['movie']) && isset($moviesObject[$_GET['movie']]) ) {
    $movie = $_GET['movie'];
  }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Lunardo Booking Page</title>
  <style>
    body {
      font-family: Arial;
    }
    fieldset {
      padding: 10px;
      margin-bottom: 20px;
    }
    button, input, select {
      padding: 10px;
      margin: 5px;
    }
    label {
      display: inline-flex;
      align-items: center;
      border: 1px #999 solid;
      border-radius: 10px;
      padding: 5px 10px 5px 5px;
      margin: 10px;

    }
  </style>
  <script>
    var moviesObjectJS = <?= json_encode($moviesObject, JSON_PRETTY_PRINT) ?>;
    var seatsObjectJS = <?= json_encode($seatsObject, JSON_PRETTY_PRINT) ?>;
  </script>
</head>

<body>

  <header>
    <h1>🌝 Lunardo Booking Page</h1>
  </header>

  <hr>

  <nav><a href="booking.php?movie=<?= $movie ?>">Booking Page</a></nav>

  <hr>

  <main>

    <h2>Movie Selection</h2>

    <p>Movie Title: <?= $moviesObject[$movie]['title'] ?></p>
    <p>Rating: <?= $moviesObject[$movie]['rating'] ?></p>
    <p>Genre: <?= $moviesObject[$movie]['genre'] ?></p>
    <p>Plot: <?= $moviesObject[$movie]['plot'] ?></p>
    <p>IMDB Link: <a href='https://www.imdb.com/title/<?= $moviesObject[$movie]['imdb'] ?>/' target="_blank">More about <?= $moviesObject[$movie]['title'] ?> over at IMDB</a></p>
    <p>Screening Times: <?= $moviesObject[$movie]['screening-summary'] ?></p>

    <hr>

    <h2>Booking Form</h2>

    <form action="booking.php?movie=<?= $movie ?>" method='POST'>

      <input type="hidden" id="movie" name="movie" value="<?= $movie ?>" />

      <fieldset id="screening-set">
        <legend>Screenings</legend>
        <?php
          foreach($moviesObject[$movie]['screenings'] as $day => $details) {
            echo "<label><input type='radio' id='$day' name='day' value='$day' />
         $day {$details['time']} ({$details['rate']})</label>";
          }
        ?>
      </fieldset>

      <fieldset id="seating-set">
        <legend>Seating</legend>
        <?php
          foreach($seatsObject as $seat => $details) {
            echo "<label>$seat</label> <select name='seats[$seat]'>\n";
            echo "  <option value=\"\">Please Select</option>\n";
            for ($s=0; $s<=10; $s++) {
              echo "  <option value=\"$s\">$s</option>\n";
            }
            echo "</select><br>";
          }
        ?>
      </fieldset>

      <fieldset>
        <legend>Personal Details</legend>
        <input type='text' name="user[name]" id="name" placeholder="Name" /><br>
        <input type='email' name="user[email]" id="email" placeholder="Email" /><br>
        <input type='tel' name="user[mobile]" id="mobile" placeholder="Mobile" /><br>

        <input type="button" class="buttons" id='remember' value="Remember Me" onclick="changeButton()"></input>
        <script type="text/javascript"> autoFill(); </script>

      </fieldset>

      <fieldset>
        <legend>Submit Options</legend>
        <button id="submitCS" name='submitCS'>Order<br>Client-Side Validation</button>
        <button id="submitSS" name='submitSS'>Order<br>Server-Side Validation</button>
      </fieldset>
    </form>

  </main>

  <hr>

  <footer>
    Assignment 4 Fallback Template for Web Programming SP2 2022
    <pre>
$movie <?= $movie ?>

seatsObject contains:
<?php print_r($seatsObject); ?>
moviesObject contains:
<?php print_r($moviesObject); ?>
GET contains:
<?php print_r($_GET); ?>
POST contains:
<?php print_r($_POST); ?>
SESSION contains:
<?php print_r($_SESSION); ?>
    </pre>
  </footer>
</body>

</html>
