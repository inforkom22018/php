<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Ke Dua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $nama = "Kelas IK2";
        var_dump($nama);

        $angka = 10.500;
        var_dump($angka);
        echo "</br><hr>";

        //Array
        $mobil = array("Toyota","Honda","Suzuki");
        echo $mobil[2];
        echo "</br>";
        var_dump($mobil);
        echo "</br>";
        print_r($mobil);
        echo "</br><hr>";

        //String
        //Untuk mencari panjang karakter
        $sekolah = "Wearnes Education Center";
        echo strlen($sekolah);
        echo "</br>";

        //Untuk mencari posisi karakter
        echo strpos($sekolah,'Education');
        echo "</br>";
        
        //Untuk membali teks
        echo strrev($sekolah);
        echo "</br>";

        //Untuk mengganti teks
        echo str_replace('Center', 'Tengah',$sekolah);
        echo "</br>";
        echo "</br><hr>";

        //Fungsi If
        $status='login';
        if($status=='Login')
        {
            echo "Anda sedang login";
        }else{
            echo "Anda telah logout";
        }
        echo "</br><hr>";

        //Switch
        $pilihan = 5;

        switch($pilihan)
        {
            case 1:
                echo "no.1";
                break;
            case 2:
                echo "no.2";
                break;
            default:
                echo "pilihan lain";
                break;
        }
        
        echo "</br><hr>";

        //For
        for($i = 0;$i <= 10;$i++)
        {
            echo "Nomor $i </br>";
        }
        echo "</br><hr>";

        //Foreach
        $warna = array("Merah","Hijau","Biru");
        foreach($warna as $value)
        {
            echo $value ."</br>";
        }
        

       echo "<table  border=1 width=100%>";
    ?>

    
        <tr>
            <td><b>No</b></td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php  for($i = 1;$i <= 10;$i++) { ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php } ?>
    </table>

    


</body>
</html>