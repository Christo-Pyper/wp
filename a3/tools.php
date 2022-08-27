<?php
  $movieIndex = 0;
  global $movieIndex;
function getMovieHeader(){
  if ($_GET['movie'] == 'ACT'){
    $GLOBALS['movieIndex'] = 0;
  }else if ($_GET['movie'] == 'RMC'){
    $GLOBALS['movieIndex'] = 1;
  }else if ($_GET['movie'] == 'FAM'){
    $GLOBALS['movieIndex'] = 2;
  }else if ($_GET['movie'] == 'AHF'){
    $GLOBALS['movieIndex'] = 3;
  }else{
    header('Location: https://titan.csit.rmit.edu.au/~s3932311/wp/a3/index.php');
  }
}
  session_start();

  function debugModule() {
   echo "<pre id='debug'>";
   print_r($_POST);
   echo "</pre>";
  }

  function printMyCode() {
  $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre id='myCode'><ol>";
  foreach($allLinesOfCode as $oneLineOfCode) {
    echo "<li>" .rtrim(htmlentities($oneLineOfCode)) . "</li>";
  }
  echo "</ol></pre>";
}

function php2js( $arr, $arrName ) {
  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
  echo <<<"CDATA"
  <script>
    /* Variable generated with Trev's handy php2js() function */
    var $arrName = $arrJSON;
  </script>
CDATA;
}

$movieData = array (
  array("Top Gun: Maverick", "PG-13", "../../media/top-gun.jpg", "https://www.youtube.com/embed/giXco2jaZ_4", array( "Tom Cruise", "Capt. Pete 'Maverick' Mitchell", "Miles Teller", "Lt. Bradley 'Rooster' Bradshaw", "Jennifer Connelly", "Penny Benjamin", "Joseph Kosinski"), array("Mon", "9pm", "Tue", "9pm", "Wed", "9pm", "Thu", "9pm", "Fri", "9pm", "Sat", "6pm", "Sun", "6pm"), "After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him."),
  array("Mrs Harris goes to Paris", "PG-13", "../../media/harrisparis.jpg", "https://www.youtube.com/embed/iO9JcPbbmAA", array("Lesley Manville", "Ada Harris", "Isabelle Huppert", "Claudine Colbert", "Lambert Wilson", "Marquis de Chassagne", "Anthony Fabian"), array("Wed", "12pm", "Thu", "12pm", "Fri", "12pm", "Sat", "3pm", "Sun", "3pm"), "A widowed cleaning lady in 1950s London falls madly in love with a couture Dior dress, and decides that she must have one of her own."),
  array("Lightyear", "PG-13", "../../media/lightyear.jpg", "https://www.youtube.com/embed/BwZs3H_UN3k", array( "Chris Evans","Buzz Lightyear", "Keke Palmer", "Izzy Hawthorne", "Peter Sohn", "SOX", "Angus MacLane"), array("Mon", "12pm", "Tue", "12pm", "Wed", "6pm", "Thu", "6pm", "Fri", "6pm", "Sat", "12pm", "Sun", "12pm"), "While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source."),
  array("Prithviraj", "M", "../../media/prith.jpg", "https://www.youtube.com/embed/33-CQdPHyjw", array("Akshay Kumar", "Prithviraj Chauhan", "Sanjay Dutt", "Kaka Kanha", "Manav Vij", "Mohammed Ghori", "Chandra Prakash Dwivedi"), array("Mon", "6pm", "Tue", "6pm", "Sat", "9pm", "Sun", "9pm"), "A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan.")
);
?>
