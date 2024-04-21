<?php
$conn = mysqli_connect("localhost", "root", "", "website_store");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
