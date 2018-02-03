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
	<img src="images/me2.jpg" alt="Image of Matt" class="rounded-circle">
	<h2 class="display-4">About Me</h2>
	<div id="bio">
	<p>
		Hi! My name is Matt -- I live in Seattle, Washington and currently work as a business analyst for Amazon Web Services. I'm a degree candidate for the IT ALM at Harvard Extension. Outside of work and school I play drums in a local country band, do some film photography, and obsess over getting the perfect espresso shot at home. I also recently got licensed as an amateur radio operator: my call sign is KI7TRI. While I have some programming experience, I need practice connecting services together into useful applications, so I'm looking forward to the class! 
	</p>
	</div>
	<h2 class="display-4">Random Quote</h2>
	<blockquote class="blockquote text-left">
		<p class="mb-0"><?php echoArray($quotes); ?></p>
	</blockquote>
</div>
</body>
</html>
