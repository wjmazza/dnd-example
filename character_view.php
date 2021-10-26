<?php
require_once('classes/character.php');
require_once('classes/database.php');

session_start();

$db = new Database();
$characterList = $db -> getCharactersForPlayer($_SESSION['id']);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
	<h1>DnD Helper+ Character View</h1>
    <a href="homepage.html"><i class="fas fa-user-circle"></i>Profile</a>
	<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
	</nav>
	<div class="content">
    <h2> Characters</h2>
	<?php

  foreach ($character in $characterList) {
    print_r($character);
  }

?>

<p><a href="homepage.php">Back to home</a></p>



		</div>

</body>
</html>
