<?php require_once('partials/_header.view.php'); ?>
	
	<h1>Payer une réservation</h1>

	<?php require_once('../view/partials/_resume-reservation.view.php'); ?>

	<form method="POST">

		<button type="submit">Payer la réservation</button>

	</form>

	<?php echo $message; ?>


</main>

</body>
</html>
