<?php

ob_start();
session_start();

$_SESSION['USER-ID'] = null;
$_SESSION['USER-TYPE'] = null;
$_SESSION['USER-NAME'] = null;
$_SESSION['USER-EMAIL'] = null;

header("Location: index.php");