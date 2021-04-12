<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "log_reg_data";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('სერვერთან კავშირი ვერ მოხერხდა')</script>");
}

?>