<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>INTBER - Login</title>
	<link rel="stylesheet" href="css/neu-style.css">
</head>

<body class="light-bg">
	
	<?php if (isset($_SESSION['u_name'])) : ?>
		<!-- PHP, Tags sollten im Endprodukt verschwinden -->

		<button class="btn-neu text1 my-5px" type="submit" name="submit">
			Abmelden
		</button>

	<?php else : ?>
		<!-- PHP -->
		<?php
			ob_start();
			session_start();
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

			<a href="https://gymnasium-melle.org" class="text1 align-center light my-10px">Passwort vergessen?</a>
		</div>

	<?php endif ?>
	<!-- PHP -->
</body>

</html>
