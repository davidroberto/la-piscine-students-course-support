<?php require_once('partials/_header.view.php'); ?>

	<h1>Annuler une réservation</h1>

	<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

	<form method="POST">

		<button type="submit">Annuler la réservation</button>

	</form>

	<p><?php echo $message; ?></p>

</main>

</body>
</html>
