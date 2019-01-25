 <?php
    if(isset($_POST['nama']))
    {
        $nm = $_POST['nama'];
        $almt = $_POST['almt'];
        $tmpt = $_POST['tmptlhr'];
        $tgl = $_POST['tgllhr'];
        $jk = $_POST['jk'];
        $agama = $_POST['agm'];

        //echo $nm."<br>";
        //echo $almt."<br>";
        //echo $tmpt."<br>";
        //echo $tgl."<br>";
        //echo $jk."<br>";
        //echo $agama."<br>";
        echo "Anda Berhasil Mendafta dengan nama ".$nm;

    }

?>