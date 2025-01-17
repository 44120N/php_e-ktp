<?php
include 'connection.php';

if (isset($_GET['nik'])) {
    $nik = $_GET['nik'];

    $stmt = $conn->prepare("SELECT * FROM e_ktp WHERE nik = ?");
    $stmt->bind_param("i", $nik);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $nik = $row['nik'];
        $name = $row['name'];
        $birthplace = $row['birthplace'];
        $birthdate = $row['birthdate'];
        $gender = $row['gender'];
        $bloodtype = $row['bloodtype'];
        $address = $row['address'];
        $rt = $row['rt'];
        $rw = $row['rw'];
        $sub_district = $row['sub_district'];
        $district = $row['district'];
        $religion = $row['religion'];
        $marriage = $row['marriage'];
        $job = $row['job'];
        $citizenship = $row['citizenship'];
        $expired = $row['expired'];
        $province = $row['province'];
        $city = $row['city'];
        $regis_date = $row['regis_date']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-KTP Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center" style="min-height: 100vh; gap: 5vh;">
        <div class="ktp-card">
            <div class="ktp-header">PROVINSI <?php echo htmlspecialchars($province); ?></div>
            <div class="ktp-subheader"><?php echo htmlspecialchars($city); ?></div>
            <div class="ktp-body">
                <div class="flex-grid">
                    <div>
                        <table>
                            <tr id="nik"><td>NIK</td><td>:</td><td><?php echo htmlspecialchars($nik); ?></td></tr>
                        </table>
                        <table>
                            <tr><td>Nama</td><td>:</td><td><?php echo htmlspecialchars($name); ?></td></tr>
                            <tr><td>Tempat/Tgl Lahir</td><td>:</td><td><?php echo htmlspecialchars($birthplace) . ', ' . htmlspecialchars(date("d-m-Y", strtotime($birthdate))); ?></td></tr>
                            <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo htmlspecialchars($gender); ?></td><td>Gol. Darah</td><td>:</td><td><?php echo htmlspecialchars($bloodtype); ?></td></tr>
                            <tr><td>Alamat</td><td>:</td><td><?php echo htmlspecialchars($address); ?></td></tr>
                            <tr><td style="padding-left: 3em;">RT/RW</td><td>:</td><td><?php echo htmlspecialchars($rt) . '/' . htmlspecialchars($rw); ?></td></tr>
                            <tr><td style="padding-left: 3em;">Kel/Desa</td><td>:</td><td><?php echo htmlspecialchars($sub_district); ?></td></tr>
                            <tr><td style="padding-left: 3em;">Kecamatan</td><td>:</td><td><?php echo htmlspecialchars($district); ?></td></tr>
                            <tr><td>Agama</td><td>:</td><td><?php echo htmlspecialchars($religion); ?></td></tr>
                            <tr><td>Status Perkawinan</td><td>:</td><td><?php echo htmlspecialchars($marriage); ?></td></tr>
                            <tr><td>Pekerjaan</td><td>:</td><td><?php echo htmlspecialchars($job); ?></td></tr>
                            <tr><td>Kewarganegaraan</td><td>:</td><td><?php echo htmlspecialchars($citizenship); ?></td></tr>
                            <tr><td>Berlaku Hingga</td><td>:</td><td><?php echo htmlspecialchars(date("d-m-Y", strtotime($expired))); ?></td></tr>
                        </table>
                    </div>
                    <div class="ktp-photo">
                        <img src="anonymous.jpg" alt="KTP Photo">
                        <p><?php echo htmlspecialchars($city); ?></p>
                        <p><?php echo htmlspecialchars(date("d-m-Y", strtotime($regis_date))); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" class="button">
            <p>Back</p>
        </a>
    </div>
</body>
</html>
<?php
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<p>NIK tidak diberikan.</p>";
}
?>
