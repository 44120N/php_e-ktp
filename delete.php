<?php
include 'connection.php';

if (isset($_GET['nik'])) {
    $nik = htmlspecialchars($_GET['nik']);

    $stmt = $conn->prepare("DELETE FROM e_ktp WHERE nik = ?");
    $stmt->bind_param("s", $nik);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No nik specified.";
}

$conn->close();
?>
