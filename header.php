<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Wedding gallery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<header>

		<h1><a href="index.php" class="text-center text-decoration-none">Mariage Anthony & Aurore</a></h1>
		<?php if (!empty($_SESSION['id']) && isset($_SESSION['id'])) {
			echo "<div class='text-center'><a href='./logout.php'><button type='button' class='btn btn-secondary'>Déconnexion</button></a></div>";
		} ?>


		<?php
		require_once('navigation.php');
		?>
	</header>
</body>

</html>