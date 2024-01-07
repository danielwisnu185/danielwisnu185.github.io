<?php
include "koneksi.php"; 
if(isset($_POST['reset_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    if($new_password == $confirm_new_password) {
        // Simpan password baru ke database
        // Anda perlu mengganti 'username' dengan username pengguna yang sesungguhnya
        $new_password_hash = md5($new_password);
        // Misalnya, Anda memiliki koneksi ke database dalam variabel $conn
        $sql = "UPDATE users SET password='$new_password_hash' WHERE username='username'";
        if(mysqli_query($conn, $sql)) {
            echo "Password berhasil diubah.";
        } else {
            echo "Terjadi kesalahan saat mengubah password.";
        }
    } else {
        echo "Password baru dan konfirmasi password baru tidak cocok.";
    }
}
?>

<form method="post" action="">
    <label>Password Baru:</label><br>
    <input type="password" name="new_password"><br>
    <label>Konfirmasi Password Baru:</label><br>
    <input type="password" name="confirm_new_password"><br>
    <input type="submit" name="reset_password" value="Reset Password">
</form>
