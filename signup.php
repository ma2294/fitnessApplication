<?php
  include_once 'dbh.inc.php';

$email = $_POST['email']; //data we pass on from form
$password = $_POST['password'];
$sql = "INSERT INTO users (user_first, user_second, user_email, user_uid, user_pwd)
VALUES('Marc', 'Adlington', '$email', '$email', '$password');";

mysqli_query($conn, $sql);
header("Location: index.html?signup=success");
