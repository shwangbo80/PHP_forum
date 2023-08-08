<?php
require "connection.php";

$username = $_GET['username'];
$sql = "SELECT id, username, lastname FROM user WHERE username='$username'";
$result = $conn->query($sql);

echo "<h1>{$username}</h1>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<form action='update.php' method='post'>
             <input type='hidden' name='id' value='$row[id]'>
            Username: <input type='text' name='username' value=$row[username]><br>
            Lastname: <input type='text' name='lastname' value=$row[lastname]><br>
            <button type='submit'>Update</button>
            </form>";
        echo "<form action='delete.php' method='post'>
            <input type='hidden' name='id' value='$row[id]'>
           <button type='submit'>Delete</button>
           </form>";
    }
} else {
    header("Location:./404.php");
}
?>