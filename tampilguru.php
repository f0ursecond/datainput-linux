<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tampil.css">
</head>
<body>
    <h1>Data Guru</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Namaguru</th>
            <th>Nip</th>
            <th>Mapel</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "connect.php";

        $no=1;
        $ambildata = mysqli_query($conn,"select * from tb_guru");
        while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[namaguru]</td>
            <td>$tampil[nip]</td>
            <td>$tampil[mapel]</td>
            <td><a href='?kode=$tampil[namaguru]'> Hapus </a></td>
            <td><a href='updateguru.php?kode=$tampil[namaguru]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    <a href="guru.html">Kembali ke form input data</a>
    </table>
    <?php
    include "connect.php";

    if(isset($_GET['kode'])){
    mysqli_query($conn,"delete  from tb_guru where namaguru='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilguru.php'>";

    }
    ?>
</body>
</html>