<?php

$conn = mysqli_connect('localhost','root','','applepals');

session_start();
session_unset();
session_destroy();

header('location:main.php');

?>