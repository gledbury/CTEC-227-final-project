<?php 
// registration page
$pageTitle = "Register";
require 'includes/header.inc.php';
require_once 'includes/db_connection.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $db->real_escape_string($_POST['first_name']);
    $last_name = $db->real_escape_string($_POST['last_name']);
    $email = $db->real_escape_string($_POST['email']);
    $username = $db->real_escape_string($_POST['username']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "INSERT INTO users (first_name,last_name,email,username,password) 
    VALUES('$first_name','$last_name','$email','$username','$password')";

    // echo $sql;
    $result = $db->query($sql);

    if (!$result) {
        echo "<div>There was a problem registering your account.</div>";
    } else {
        header ('location: login.php');
    }
}
?>

<h1>Register</h1>
<form action="register.php" method="POST">
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" required name = "first_name">
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" required name="last_name">
    <label for="email">Email</label>
    <input type="email" id="email" required name="email">
    <label for="username">Username</label>
    <input type="text" id="username" required name="username">
    <label for="password">Password</label>
    <input type="password" id="password" required name="password">
    <br><br>
    <input type="submit" value="Register">
</form>
<?php require 'includes/footer.inc.php'; ?>









