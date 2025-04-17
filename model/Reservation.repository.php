<?php


function persistReservation($reservation) {

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

	// je récupère une instance de la connexion (PDO)
	$pdo = connectToDB();


	// je créé une requête SQL qui récupère la dernière réservation au nom de David Robert
	// trié par id descendant
	$query = "SELECT * FROM `reservation` 
				WHERE reservation.name = 'David Robert'
				ORDER BY id DESC
				LIMIT 1";

	// j'execute la requête et je récupère les données sous forme de tableau
	$result = $pdo->query($query, PDO::FETCH_ASSOC);
	$reservation = $result->fetch();

	return $reservation;
}




/**
* Permettrait de récupérer toutes les réservations 
* function findAllReservations() {
*
*	// Trouver toutes les réservation dont le nom est David Robert
*	// Récupérer la dernère par date de création
*	$pdo = connectToDB();
*
*	$query = "SELECT * FROM `reservation` ORDER BY id DESC";
*
*	$result = $pdo->query($query, PDO::FETCH_ASSOC);
*
*	$reservations = $result->fetchAll();
*
*	return $reservations;
*}
**/