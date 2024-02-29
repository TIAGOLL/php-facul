<?php

session_start();
require "./src/controllers/LoginController.php";

$loginController = new LoginController();
$loginController->autenticar($_POST["email"], $_POST["password"]);
