<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pendudduk where id=$kode";
$query= mysqli_query($koneksi,$sql);
$penduduk= mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data Tidak Ditemukan");
}
?>

<html>
<head>
</head>
<body>
    <h1>Form Edit</h1>;
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $penduduk['id'] ?>" />
            <p>
                <label for="nik">NIK : </label>
                <input type="number" name="nik" value="<?php echo $penduduk['nik'] ?>"/> 
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" value="<?php echo $penduduk['nama'] ?>" />
            </p>
            <p>
                <label for="agama">Agama :  </label>
                <select name="agama" name="agama" value="<?php echo $penduduk['agama'] ?>" >
                    <option value="islam"> Islam </option>
                    <option value="kristen"> Kristen </option>
                    <option value="katolik"> Katolik </option>
                    <option value="budha"> Budha </option>
                    <option value="hindu"> Hindu </option>
                    <option value="konghucu"> Konghucu </option>
                </select>
            </p>
            <p>
                <input type="submit" name="edit" value="edit" />
            </p>
        </fieldset>
    </form>
</body>
</html>