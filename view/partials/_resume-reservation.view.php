<?php if (!is_null($reservationForUser)) { ?>

	<div>
		<p>Récap de la réservation :</p>
		<p>Nom : <?php echo $reservationForUser['name']; ?></p>
		<p>Lieu : <?php echo $reservationForUser['place']; ?></p>
		<p>Dates : <?php echo $reservationForUser['start_date']; ?> / <?php echo $reservationForUser['end_date'] ?></p>
		<p>Prix total : <?php echo $reservationForUser['total_price']; ?></p>
		<p>Option de ménage ? : <?php echo $reservationForUser['cleaning_option'] ? "oui" : "non"; ?></p>
		<p>Statut : <?php echo $reservationForUser['status']; ?></p>
		<?php if (!is_null($reservationForUser['comment'])) { ?>
			<p>Commentaire : <?php echo $reservationForUser['comment']; ?></p>
		<?php } ?>
	</div>

<?php } ?>