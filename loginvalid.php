<?php

require "config.php";

$uname = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT * FROM phpauth WHERE username=:username";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $uname);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    if ($row['password'] == $pass) {
        echo "<script>alert('Login success');
        window.location.href='home.php'</script>;";
    } else {
        echo "<script>alert('Invalid password');
        window.location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('Invalid username');
    window.location.href='login.php'</script>";
}

?>
