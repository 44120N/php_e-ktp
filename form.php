<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="app">
        <h1>Registration Form</h1>
        <form action="post.php" method="post">
            <table>
                <tr>
                    <td><label for="nik">NIK</label></td>
                    <td><input type="number" name="nik" id="nik" placeholder="Enter your NIK" required></td>
                </tr>
                <tr>
                    <td><label for="name">Nama</label></td>
                    <td><input type="text" name="name" id="name" placeholder="Enter your name" required></td>
                </tr>
                <tr>
                    <td><label for="birthplace">Tempat Lahir</label></td>
                    <td><input type="text" name="birthplace" id="birthplace" placeholder="Enter your birthplace" required></td>
                </tr>
                <tr>
                    <td><label for="birthdate">Tanggal Lahir</label></td>
                    <td><input type="date" name="birthdate" id="birthdate" required></td>
                </tr>
                <tr>
                    <td><label for="gender">Jenis Kelamin</label></td>
                    <td>
                        <select name="gender" id="gender" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="bloodtype">Golongan Darah</label></td>
                    <td>
                        <select name="bloodtype" id="bloodtype">
                            <option value="">Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Alamat</label></td>
                    <td><textarea name="address" id="address" placeholder="Enter your address" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="rt">RT</label></td>
                    <td><input type="number" name="rt" id="rt" placeholder="000" min="1" max="999" required></td>
                </tr>
                <tr>
                    <td><label for="rw">RW</label></td>
                    <td><input type="number" name="rw" id="rw" placeholder="000" min="1" max="999" required></td>
                </tr>
                <tr>
                    <td><label for="sub_district">Kelurahan</label></td>
                    <td><input type="text" name="sub_district" id="sub_district" placeholder="Enter sub-district" required></td>
                </tr>
                <tr>
                    <td><label for="district">Kecamatan</label></td>
                    <td><input type="text" name="district" id="district" placeholder="Enter district" required></td>
                </tr>
                <tr>
                    <td><label for="religion">Agama</label></td>
                    <td>
                        <select name="religion" id="religion" required>
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="marriage">Status Perkawinan</label></td>
                    <td>
                        <select name="marriage" id="marriage" required>
                            <option value="">Pilih Status Perkawinan</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="job">Pekerjaan</label></td>
                    <td>
                        <select name="job" id="job" required>
                            <option value="">Pilih Pekerjaan</option>
                            <option value="Belum / Tidak Bekerja">Belum / Tidak Bekerja</option>
                            <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                            <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="citizenship">Kewarganegaraan</label></td>
                    <td>
                        <select name="citizenship" id="citizenship" required>
                            <option value="">Pilih Kewarganegaraan</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="expired">Berlaku Hingga</label></td>
                    <td><input type="date" name="expired" id="expired" required></td>
                </tr>
                <tr>
                    <td><label for="province">Provinsi</label></td>
                    <td><input type="text" name="province" id="province" placeholder="Enter province" required></td>
                </tr>
                <tr>
                    <td><label for="city">Kota</label></td>
                    <td><input type="text" name="city" id="city" placeholder="Enter city" required></td>
                </tr>
            </table>
            <div class="row-flex">
                <div style="flex: 1;">
                    <a class="button-group" href="display.php">Back</a>
                </div>
                <div style="flex: 1;">
                    <button class="button-group" type="reset">Reset</button>
                </div>
                <div style="flex: 1;">
                    <button class="button-group" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
