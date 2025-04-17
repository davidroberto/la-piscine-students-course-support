<?php require_once('partials/_header.view.php'); ?>

	<h1>Laisser un commentaire sur une réservation</h1>

	<?php require_once('../view/partials/_resume-reservation.view.php'); ?>


	<form method="POST">

		<label> Commentaire
			<input type="text" name="comment" required />
		</label>

		<button type="submit">Valider le commentaire</button>

	</form>



</main>

</body>
</html>
