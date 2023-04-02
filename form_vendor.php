<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="list_vendor.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="list_vendor.php">
		<label for="nomor">Nomor:</label>
		<input type="text" id="nomor" name="nomor"><br><br>
		
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		
        <label for="kota">Kota:</label>
		<input type="text" id="kota" name="kota"><br><br>

        <label for="kontak">Kontak:</label>
		<input type="text" id="kontak" name="kontak"><br><br>
        </select>

        <br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>