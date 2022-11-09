<?php
include("koneksi.php");
?>


<html>
<head>
</head>
<body>
    <h1> DATA PENDATAAN WARGA DESA SUKAMUNDUR</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Agama</th>
        </tr>

        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_pendudduk";
        $query=mysqli_query($koneksi, $sql);

        while($penduduk=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$penduduk['id']."</td>";
            echo "<td>".$penduduk['nik']."</td>";
            echo "<td>".$penduduk['nama']."</td>";
            echo "<td>".$penduduk['agama']."</td>";
            echo "<td>";
            echo "<a href='edit.php?id=".$penduduk['id']."'>Edit</a> |";
            echo "<a href='hapus.php?id=".$penduduk['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
</table>
</body>
</html>