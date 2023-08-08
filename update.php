<?php
include "connection.php";

$id = $_POST["id"];
$username = $_POST['username'];
$lastname = $_POST['lastname'];

$sql = "UPDATE user SET username='$username', lastname='$lastname' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location:./");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}