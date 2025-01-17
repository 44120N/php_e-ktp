<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit E-KTP</title>
</head>
<body>
    <div class="app">
        <h1>Edit E-KTP</h1>
        <?php
        include 'connection.php';

        if (isset($_GET['nik'])) {
            $nik = htmlspecialchars($_GET['nik']);

            $stmt = $conn->prepare("SELECT * FROM e_ktp WHERE nik = ?");
            $stmt->bind_param("s", $nik);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>

                <form action="put.php" method="post">
                    <input type="hidden" name="original_nik" value="<?php echo htmlspecialchars($row['nik']); ?>">
                    <table>
                        <tr>
                            <td><label for="nik">NIK</label></td>
                            <td><input type="text" name="nik" id="nik" value="<?php echo htmlspecialchars($row['nik']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="name">Nama</label></td>
                            <td><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($row['name']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="birthplace">Tempat Lahir</label></td>
                            <td><input type="text" name="birthplace" id="birthplace" value="<?php echo htmlspecialchars($row['birthplace']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="birthdate">Tanggal Lahir</label></td>
                            <td><input type="date" name="birthdate" id="birthdate" value="<?php echo htmlspecialchars($row['birthdate']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="gender">Jenis Kelamin</label></td>
                            <td>
                                <select name="gender" id="gender" required>
                                    <option value="Laki-laki" <?php if ($row['gender'] === 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($row['gender'] === 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="bloodtype">Golongan Darah</label></td>
                            <td>
                                <select name="bloodtype" id="bloodtype">
                                    <option value="" <?php if (empty($row['bloodtype'])) echo 'selected'; ?>>-</option>
                                    <option value="A" <?php if ($row['bloodtype'] === 'A') echo 'selected'; ?>>A</option>
                                    <option value="B" <?php if ($row['bloodtype'] === 'B') echo 'selected'; ?>>B</option>
                                    <option value="AB" <?php if ($row['bloodtype'] === 'AB') echo 'selected'; ?>>AB</option>
                                    <option value="O" <?php if ($row['bloodtype'] === 'O') echo 'selected'; ?>>O</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="address">Alamat</label></td>
                            <td><textarea name="address" id="address" required><?php echo htmlspecialchars($row['address']); ?></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="rt">RT</label></td>
                            <td><input type="number" name="rt" id="rt" value="<?php echo htmlspecialchars($row['rt']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="rw">RW</label></td>
                            <td><input type="number" name="rw" id="rw" value="<?php echo htmlspecialchars($row['rw']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="sub_district">Kelurahan</label></td>
                            <td><input type="text" name="sub_district" id="sub_district" value="<?php echo htmlspecialchars($row['sub_district']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="district">Kecamatan</label></td>
                            <td><input type="text" name="district" id="district" value="<?php echo htmlspecialchars($row['district']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="religion">Agama</label></td>
                            <td>
                                <select name="religion" id="religion" required>
                                    <option value="Islam" <?php if ($row['religion'] === 'Islam') echo 'selected'; ?>>Islam</option>
                                    <option value="Kristen" <?php if ($row['religion'] === 'Kristen') echo 'selected'; ?>>Kristen</option>
                                    <option value="Katolik" <?php if ($row['religion'] === 'Katolik') echo 'selected'; ?>>Katolik</option>
                                    <option value="Hindu" <?php if ($row['religion'] === 'Hindu') echo 'selected'; ?>>Hindu</option>
                                    <option value="Buddha" <?php if ($row['religion'] === 'Buddha') echo 'selected'; ?>>Buddha</option>
                                    <option value="Konghucu" <?php if ($row['religion'] === 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="marriage">Status Perkawinan</label></td>
                            <td>
                                <select name="marriage" id="marriage" required>
                                    <option value="Belum Kawin" <?php if ($row['marriage'] === 'Belum Kawin') echo 'selected'; ?>>Belum Kawin</option>
                                    <option value="Kawin" <?php if ($row['marriage'] === 'Kawin') echo 'selected'; ?>>Kawin</option>
                                    <option value="Cerai Hidup" <?php if ($row['marriage'] === 'Cerai Hidup') echo 'selected'; ?>>Cerai Hidup</option>
                                    <option value="Cerai Mati" <?php if ($row['marriage'] === 'Cerai Mati') echo 'selected'; ?>>Cerai Mati</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="job">Pekerjaan</label></td>
                            <td>
                                <select name="job" id="job" required>
                                    <option value="Belum / Tidak Bekerja" <?php if ($row['job'] === 'Belum / Tidak Bekerja') echo 'selected'; ?>>Belum / Tidak Bekerja</option>
                                    <option value="Mengurus Rumah Tangga" <?php if ($row['job'] === 'Mengurus Rumah Tangga') echo 'selected'; ?>>Mengurus Rumah Tangga</option>
                                    <option value="Pelajar / Mahasiswa" <?php if ($row['job'] === 'Pelajar / Mahasiswa') echo 'selected'; ?>>Pelajar / Mahasiswa</option>
                                    <option value="Pensiunan" <?php if ($row['job'] === 'Pensiunan') echo 'selected'; ?>>Pensiunan</option>
                                    <option value="Pegawai Negeri Sipil" <?php if ($row['job'] === 'Pegawai Negeri Sipil') echo 'selected'; ?>>Pegawai Negeri Sipil</option>
                                    <option value="Wiraswasta" <?php if ($row['job'] === 'Wiraswasta') echo 'selected'; ?>>Wiraswasta</option>
                                    <option value="Lainnya" <?php if ($row['job'] === 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="citizenship">Kewarganegaraan</label></td>
                            <td>
                                <select name="citizenship" id="citizenship" required>
                                    <option value="WNI" <?php if ($row['citizenship'] === 'WNI') echo 'selected'; ?>>WNI</option>
                                    <option value="WNA" <?php if ($row['citizenship'] === 'WNA') echo 'selected'; ?>>WNA</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="expired">Berlaku Hingga</label></td>
                            <td><input type="date" name="expired" id="expired" value="<?php echo htmlspecialchars($row['expired']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="province">Provinsi</label></td>
                            <td><input type="text" name="province" id="province" value="<?php echo htmlspecialchars($row['province']); ?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="city">Kota</label></td>
                            <td><input type="text" name="city" id="city" value="<?php echo htmlspecialchars($row['city']); ?>" required></td>
                        </tr>
                    </table>
                    <div class="row-flex">
                        <div style="display: flex; flex-grow: 1; height:auto;">
                            <a class="button-group" href="index.php">Back</a>
                        </div>
                        <div style="display: flex; flex-grow: 1;">
                            <button class="button-group" type="reset">Reset</button>
                        </div>
                        <div style="display: flex; flex-grow: 1;">
                            <button class="button-group" type="submit">Update</button>
                        </div>
                    </div>
                </form>

                <?php
            } else {
                echo "<p>No data found for the specified NIK.</p>";
            }

            $stmt->close();
            $conn->close();
        } else {
            echo "<p>No NIK specified in the URL.</p>";
        }
        ?>
    </div>
</body>
</html>
