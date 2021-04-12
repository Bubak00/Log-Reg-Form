<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>პროფილი</title>
</head>
<body>
    <?php echo "<h1>მოგესალმებით " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">გამოსვლა</a>
</body>
</html>