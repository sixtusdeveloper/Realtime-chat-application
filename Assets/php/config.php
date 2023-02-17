<?php
$hostname = 'localhost';
$username = 'sixtus';
$password = 's1i9x9t9us/log';
$dbname = 'sixtus';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    echo 'Database connection error' . mysqli_connect_error();
}
?>
