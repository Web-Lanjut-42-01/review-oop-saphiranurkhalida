<!DOCTYPE html>
<html>
<head>
	<title>Pengecekan Berat Badan Ideal</title>
</head>
<body>
	<h2>Menghitung Berat Badan Ideal</h2>
	<form action="bbideal.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>\
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td><input type="number" name="bb"> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td><input type="number" name="tb"> cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
            <td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</td>
        </tr>
    </table><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
	
</body>
</html>