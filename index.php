<?php require('quotes.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matt McGrath</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/p1_style.css">
</head>
<body>
<div class="container-fluid" id="container">
	<h1 class="display-3">Matthew McGrath</h1>
	<img src="" alt="Image of Matt">
	<h2 class="display-4">About Me</h2>
	<div id="bio">
	<p>
		Some information about me.
	</p>
	</div>
	<h2 class="display-4">Random Quote</h2>
	<blockquote class="blockquote text-left">
		<p class="mb-0"><?php echoArray($quotes); ?></p>
	</blockquote>
</div>
</body>
</html>
