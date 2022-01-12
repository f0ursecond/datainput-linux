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
    <h1>Data Mapel</h1>

    <table>
        <tr>
            
            <th>Mapel</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "connect.php";

        $no=1;
        $ambildata = mysqli_query($conn,"select * from tb_mapel");
        while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            
            <td>$tampil[mapel]</td>
           
            <td><a href='?kode=$tampil[mapel]'> Hapus </a></td>
            <td><a href='updatemapel.php?kode=$tampil[mapel]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    <a href="mapel.html">Kembali ke form input data</a>
    </table>

    <?php
    include "connect.php";

    if(isset($_GET['kode'])){
    mysqli_query($conn,"delete  from tb_mapel where mapel='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='tampilmapel.php'>";

    }
    ?>
</body>
</html>