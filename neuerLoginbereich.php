<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INTBER - Login</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/neu-style.css">
</head>

<body class="light-bg">
	<?php if (isset($_SESSION['u_name'])) : ?>
		<!-- PHP, Tags sollten im Endprodukt verschwinden -->

		<form action="logout-inc.php" method="POST">
			<button class="btn-neu text1 my-5px" type="submit" name="submit">
				Abmelden
			</button>
		</form>

	<?php else : ?>
		<!-- PHP -->
		<?php
			session_start();
			ob_start();
		?>
		<div class="container">
			<?php include('components/intber-logo.php') ?>
			<!-- PHP -->

			<form action="includes/login-inc.php" method="post">
				<h1 class="display2 my-5px brand">Anmelden</h1>

				<?php include('components/iserv-login-button.php') ?>
				<!-- PHP -->
				<?php include('components/oder-divider.php') ?>
				<!-- PHP -->

				<input type="text" name="uname" placeholder="Nutzername" class="uname-in text1 my-5px light light-bg">
				<input type="password" name="pword" placeholder="Passwort" class="uname-in text1 my-5px light light-bg">
				<button class="btn-neu text1 my-5px" type="submit" name="submit">
					Anmelden
				</button>
			</form>

			<a href="mailto:roman.pavlowski@gymnasium-melle.org?body=Sehr%20geehrter%20Herr%20Pavlowski,%0D%0A%0D%0ALeider%20habe%20ich%20mein%20Passwort%20für%20den%20internen%20Bereich%20der%20Schulwebseite%20vergessen." class="text1 align-center light my-10px">Passwort vergessen?</a>
		</div>

	<?php endif ?>
	<!-- PHP -->
</body>
</html>
