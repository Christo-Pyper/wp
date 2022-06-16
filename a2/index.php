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

    <header>
	<div>
	<img src='../../media/RMIT-Logo.png' height = 80/>
	Christo Pyper
	</div>

    </header>

     <nav>
    Assignments:
    <!-- link locations: relative to current directory -->
    <ul>
      <li><a href="a2/index.php" target="_blank">A2</a></li>
      <li><a href="a3/index.php" target="_blank">A3</a></li>
    </ul> |
    <!-- link locations: relative to e54061's public_html directory -->
    <a href="/~e54061/wp" target="_blank">Course Homepage</a> |
    <a href="/~e54061/wp/lectures" target="_blank">Lectures 0 - 11</a> |
    <a href="/~e54061/secure" target="_blank">Secure Resources Area</a> 
  </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
	<img src='../../media/Profern-Verona-Twin.png'/>
	<img src='../../media/Profern-Standard-Twin.png'/>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Christoffel S3932311 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
