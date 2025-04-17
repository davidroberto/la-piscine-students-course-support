<?php


function persistReservation($reservation) {

	session_start();

	// je récupère une instance de la classe PDO connectée à la base de données du projet
	$pdo = connectToDB();

	// je formate les dates à insérer dans la table, pour qu'elles correspondent au format attendu par le type date de la colonne
	$startDateFormatted =  $reservation->startDate->format('d-m-y');
	$endDateFormatted =  $reservation->endDate->format('d-m-y');
	$bookedAtFormatted =  $reservation->bookedAt->format('d-m-y');

	// je créé la requête SQL permettant d'insérer dans la table reservation
	// les données de la réservation (issue de l'instance de classe Reservation)
	$query = "INSERT INTO reservation
	(name, place, start_date, end_date, cleaning_option,
	 night_price, total_price, booked_at, status)
	VALUES
	(
		'$reservation->name',
		'$reservation->place',
		'$startDateFormatted',
		'$endDateFormatted',
		$reservation->cleaningOption,
		$reservation->nightPrice,
		$reservation->totalPrice,
		'$bookedAtFormatted',
		'$reservation->status'
	)";

	$pdo->query($query);

}

function findReservationForUser() {

	session_start();

	if (array_key_exists('reservation', $_SESSION)) {
		return $_SESSION["reservation"];
	} else {
		return null;
	}	

}