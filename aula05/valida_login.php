<?php

require "./src/controllers/LoginController.php";
session_start();

$loginController = new LoginController();
$loginController->autenticar($_POST["email"], $_POST["password"]);