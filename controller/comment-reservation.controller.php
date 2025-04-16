<?php

require_once('../config.php');
require_once('../model/Reservation.repository.php');
require_once('../model/Reservation.model.php');

$reservationForUser = findReservationForUser();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

	$comment = $_POST["comment"];

	$reservationForUser->leaveComment($comment);

	persistReservation($reservationForUser);

}


require_once('../view/comment-reservation.view.php');