<?php
include "connection.php";
$username = $_REQUEST['username'];
$lastname = $_REQUEST['lastname'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO user (username, lastname, password)
VALUES ('$username', '$lastname', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location:./");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}