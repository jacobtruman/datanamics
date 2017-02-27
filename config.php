<?php
ini_set('display_errors', 1);
session_start();
require_once("Autoload.php");
$_SESSION['username'] = "jtruman";
$user = new User($_SESSION['username']);
