<?php
include 'db/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM accounts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header('Location: read.php');
?>
