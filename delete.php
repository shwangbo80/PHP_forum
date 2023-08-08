<?php
include "connection.php";

$id = $_POST["id"];

$sql = "DELETE from user WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location:./");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}