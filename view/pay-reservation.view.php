<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<header>

		<nav>
			<ul>

			</ul>
		</nav>

	</header>


<main>
	
	<h1>Payer une réservation</h1>

	<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

	<form method="POST">

		<button type="submit">Payer la réservation</button>

	</form>

	<?php echo $message; ?>


</main>

</body>
</html>
