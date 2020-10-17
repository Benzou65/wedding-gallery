<?php
session_start();
require_once('var.php');


if (!empty($_POST['password']) && isset($_POST['password'])) {
	if ($_POST['password'] === $ACCESS_PSW) {
		$_SESSION['id'] = 1;
		header("Location: ./index.php");
		exit;
	}
}
$error = rawurldecode("Mauvais mot de passe...");
header("Location: ./index.php?error=$error");
