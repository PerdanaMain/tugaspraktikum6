<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="biodataAct.php" method = "get">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat & Tanggal Lahir</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="kelamin" value="Laki - Laki">Laki - Laki</td>
                <td><input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><textarea name="alamat"  cols="21" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="kerja"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="SIMPAN" align="center"></td>
            </tr>   
        </table>
    </form>
</body>
</html>