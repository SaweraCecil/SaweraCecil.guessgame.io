<html>
<header>
<title> Sawera Cecil 8f1be10f</title>
<meta name="viewpoint" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<meta name="name" content="Welcome to my guessing game">
</header>
<body>
<title> Sawera Cecil 8f1be10f</title>
<h1> Welcome to my guessing game</h1>

<?php
$correctnumber=60; 

if ( ! isset($_GET['guess']) ) { 
  echo("Missing guess parameter");
} else if ( strlen($_GET['guess']) < 1 ) {
  echo("Your guess is too short");
} else if ( ! is_numeric($_GET['guess']) ) {
  echo("Your guess is not a number");
} else if ( $_GET['guess'] <$correctnumber) {
  echo("Your guess is too low");
} else if ( $_GET['guess'] > $correctnumber ) {
  echo("Your guess is too high");
} else {
  echo("Congratulations - You are right");
}


?>
</body>
</html> 
  

 