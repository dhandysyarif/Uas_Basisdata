<body>
<a href="index.php">ke halaman data</a>
<h2>Form Data Mahasiswa</h2>

<form action=""method ="POST">
    <label>Nama</label><br>
    <input type="text" name="nama"><br><br></br>
    <label>Nim</label><br>
    <input type="text" name="nim"><br><br></br>
    <label>Fakultas</label><br>
    <input type="text" name="fakultas"><br><br></br>
    <label>Prodi</label><br>
    <input type="text" name="prodi"><br></br>
    <input type="submit"value="Simpan"name="proses"><br><br>
</form>
<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into tbmahasiswa set
    nama     ='$_POST[nama]',
    nim      ='$_POST[nim]',
    fakultas ='$_POST[fakultas]',
    prodi    ='$_POST[prodi]'");

    echo "Data telah di simpan";
}