<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nik = htmlspecialchars($_POST['nik']);
    $name = htmlspecialchars($_POST['name']);
    $birthplace = htmlspecialchars($_POST['birthplace']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $gender = htmlspecialchars($_POST['gender']);
    $bloodtype = htmlspecialchars($_POST['bloodtype']);
    $address = htmlspecialchars($_POST['address']);
    $rt = htmlspecialchars($_POST['rt']);
    $rw = htmlspecialchars($_POST['rw']);
    $sub_district = htmlspecialchars($_POST['sub_district']);
    $district = htmlspecialchars($_POST['district']);
    $religion = htmlspecialchars($_POST['religion']);
    $marriage = htmlspecialchars($_POST['marriage']);
    $job = htmlspecialchars($_POST['job']);
    $citizenship = htmlspecialchars($_POST['citizenship']);
    $expired = htmlspecialchars($_POST['expired']);
    $province = htmlspecialchars($_POST['province']);
    $city = htmlspecialchars($_POST['city']);

    $sql = "INSERT INTO e_ktp (nik, name, birthplace, birthdate, gender, bloodtype, address, rt, rw, sub_district, district, religion, marriage, job, citizenship, expired, province, city)
            VALUES ('$nik', '$name', '$birthplace', '$birthdate', '$gender', '$bloodtype', '$address', '$rt', '$rw', '$sub_district', '$district', '$religion', '$marriage', '$job', '$citizenship', '$expired', '$province', '$city')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
