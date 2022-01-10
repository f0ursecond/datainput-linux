<?php
include "connect.php";
$sql=mysqli_query($conn,"select * from tb_guru where namaguru='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>



<h3> Ubah Data Guru</h3>

<style>
   @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&family=Sarabun:wght@600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&family=Poppins:wght@300&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Mohave:wght@300&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Delius&display");

    h3 {
        font-family: poppins;
    }

    body {
        background-color: #b1f2ec;
        text-align: center;

    }

    ::placeholder {
        color: gray;
    }

    input[type="text"] {
        font-family: poppins;
        margin-top: 20px;
        width: 200px;
        height: 40px;

        color: black;
        border-radius: 50px;
        border: none;
    }

    input[type="number"] {
        font-family: poppins;
        margin-top: 20px;
        border-radius: 50px;

        width: 200px;
        border: none;

        height: 40px;
    }

    input[type="submit"] {
        font-family: poppins;
        margin-top: 20px;
        border-radius: 50px;
        width: 100px;
        height: 40px;
        border: hidden;
        margin-left: 45px;
        
    }

    select {
        font-family: poppins;
        margin-top: 20px;
        border-radius: 50px;
        text-align: center;
        width: 200px;
        border: none;
        text-align: center;
        height: 40px;
    }

    table {
        margin: auto;
    }


    input {
        text-align: center;
    }

</style>


<form action="" method="post">
<table>
    <tr>
        
        <td> <input type="text" name="namaguru"
        required
                        oninvalid="this.setCustomValidity('Nama harus diisi')" oninput="setCustomValidity('')"
        value="<?php echo $data['namaguru']; ?>"> </td>
    </tr>
    <tr>
        
        <td> <input type="number" name="nip"
        required
                        oninvalid="this.setCustomValidity('Nip harus diisi')" oninput="setCustomValidity('')"
        value="<?php echo $data['nip']; ?>"> </td>
    </tr>
    <td>
                <select name="mapel"
                required
                        oninvalid="this.setCustomValidity('Mapel harus dipilih')" oninput="setCustomValidity('')"
                value="<?php echo $data['mapel']; ?>>
                    <option selected hidden value="">Pilih Mapel</option>
                    <option selected hidden value="">Pilih Mapel</option>
                        <option value="B Indonesia">B Indonesia</option>
                        <option value="Matematika">Matematika</option>
                        <option value="B Inggris">B Inggris</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Penjasorkes">Penjasorkes</option>
                        <option value="B Jawa">B Jawa</option>

                </select>
            </td>
    
    <tr>
        
        <td><input type="submit" name="submit" value="Ubah"> </td>
    </tr>
</table>

</form>

<?php
include "connect.php";

if(isset($_POST['submit'])){
mysqli_query($conn, "update tb_guru set mapel='$_POST[mapel]',namaguru = '$_POST[namaguru]',nip = '$_POST[nip]' where namaguru= '$_GET[kode]'");

echo "Data guru telah diubah";
echo "<meta http-equiv=refresh content=1;URL='tampilguru.php'>";

}

?>
