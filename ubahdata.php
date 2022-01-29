<?php
include "koneksi.php";
$sql=mysqli_query($koneksi,"select * from tbmahasiswa where nim='$_GET[nim]'");
$data=mysqli_fetch_array($sql);
?>

<body>

<h2>Ubah Data Mahasiswa</h2>

<form action=""method ="POST">
    <label>Nama</label><br>
    <input type="text" name="nama"value="<?php echo $data['nama']; ?>"><br><br></br>
    <label>Nim</label><br>
    <input type="text" name="nim" value="<?php echo $data['nim']; ?>"><br><br></br>
    <label>Fakultas</label><br>
    <input type="text" name="fakultas" value="<?php echo $data['fakultas']; ?>"><br><br></br>
    <label>Prodi</label><br>
    <input type="text" name="prodi"value="<?php echo $data['prodi']; ?>"><br></br>
    <input type="submit"value="Simpan"name="proses"><br><br>
</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update tbmahasiswa set
    nama            = '$_POST[nama]',
    nim             ='$_POST[nim]',
    fakultas        = '$_POST[fakultas]',
    prodi           = '$_POST[prodi]'
    where nim       = '$_GET[nim]'");

    echo "Data telah di ubah";
    echo "<meta http-equiv=refresh content=1;URL='datamahasiswa.php'>";
}
