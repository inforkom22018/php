<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="simpan.php" method="POST">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td>:</td>
                <td><input type="text" name="almt"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tmptlhr"></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgllhr"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="pria" selected="selected">Laki-Laki</input>
                    <input type="radio" name="jk" value="cewek">Perempuan</input>
                
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agm">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><button type="submit">Daftar</button></td>
            </tr>
        </table>
       
    </form>
   
</body>
</html>