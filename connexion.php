<?php
session_start();
if (isset($_SESSION['connecté']) && !empty($_SESSION['user']))


$succes = null;
$echec = null;
if (isset($_GET['succes']) && $_GET['succes'] === "inscription") {
    $secces = true;
}

if (isset($_GET['erreur'])) {
    $echec = true;
}

include "./components/floating-label.php";