<?php 

require_once('../config.php');
require_once('../model/Reservation.repository.php');
require_once('../model/Reservation.model.php');

$reservationForUser = findReservationForUser();

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$reservationForUser->pay();
	persistReservation($reservationForUser);

	$message = "Réservation payée";
}


require_once('../view/pay-reservation.view.php');