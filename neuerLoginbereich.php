<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INTBER - Login</title>
	<link rel="stylesheet" href="css/legacy/login.css">
	<link rel="stylesheet" href="css/index.css">
</head>

<body class="content-center">
	<?php if (isset($_SESSION['u_name'])) : ?>

		<form action="logout-inc.php" method="POST">
			<button class="btn-neu" type="submit" name="submit">
				Abmelden
			</button>
		</form>

	<?php else : ?>
		<?php
		session_start();
		ob_start();
		?>
		
		<div class="container">
			<img src="img/INTBER-Logo.svg" alt="INTBER" class="img-logo">

			<form action="includes/login-inc.php" method="post">
				<h1 class="headline-1">Anmelden</h1>

				<button class="btn-iserv-oath" disabled>
					<img src="img/IServ-Logo mit Box.svg" alt="IServ-Logo">
					<span class="btn-text">Feature kommt irgendwann</span>
				</button>

				<div class="seperator">
					<hr>
					<span class="sep-text">ODER</span>
					<hr>
				</div>

				<input type="text" name="uname" placeholder="Nutzername" class="uname-in">
				<input type="password" name="pword" placeholder="Passwort" class="uname-in">

				<button class="btn-neu" type="submit" name="submit">
					Anmelden
				</button>
			</form>

			<a href="mailto:roman.pavlowski@gymnasium-melle.org?subject=Passwort%20zurücksetzen&body=Sehr%20geehrter%20Herr%20Pavlowski,%0D%0A%0D%0ALeider%20habe%20ich%20mein%20Passwort%20für%20den%20internen%20Bereich%20der%20Schulwebseite%20vergessen." class="forgot-link">
				Passwort vergessen?
			</a>
		</div>

	<?php endif ?>
</body>

</html>
