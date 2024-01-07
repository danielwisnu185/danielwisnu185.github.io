<?php
session_start();
$host = "localhost";
$user = "username";
$pass = "password";
$db = "webdailyjournal";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['reset_password'])){
    $old_password = md5($_POST['old_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_new_password = md5($_POST['confirm_new_password']);

    $check_old_password = mysqli_query($conn, "SELECT password FROM users WHERE password='$old_password' AND username='$_SESSION[username]'");
    
    if(mysqli_num_rows($check_old_password) > 0){
        if($new_password == $confirm_new_password){
            $update_password = mysqli_query($conn, "UPDATE users SET password='$new_password' WHERE username='$_SESSION[username]'");
            session_destroy();
            header("Location: login.php");
        }
    }
}
?>
