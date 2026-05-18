<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "ecommerce_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    
    if (mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_assoc($query);
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama']  = $row['nama'];
            $_SESSION['role']  = $row['role'];
            
            header("Location: index.php");
            exit();
        } else {
            // Oper status error lewat URL
            header("Location: login.php?pesan=password_salah");
            exit();
        }
    } else {
        // Oper status error lewat URL
        header("Location: login.php?pesan=tidak_terdaftar");
        exit();
    }
}
?>