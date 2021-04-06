<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'theperfectkitchen');

if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

?>