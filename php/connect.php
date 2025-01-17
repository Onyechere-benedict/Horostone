<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = 'root';
$DATABASE = 'registration';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$conn) {
    die("something went wrong;");
}