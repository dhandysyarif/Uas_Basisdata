<h3><center> Data Mahasiswa </center></h3>
<center>
<table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Nim</th>
      <th>Fakultas</th>
      <th>Prodi</th>
      <th colspan="2">Aksi</th>
    </tr>
</center>
    <?php

    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from tbmahasiswa");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
           <td>$no</td>
           <td>$tampil[nama]</td>
           <td>$tampil[nim]</td>
           <td>$tampil[fakultas]</td>
           <td>$tampil[prodi]</td>
           <td><a href='?nim=$tampil[nim]'> Hapus </a></td>
           <td><a href='ubahdata.php?nim=$tampil[nim]'> Ubah </a></td>
        </tr>";

        $no++;  
           
    }
    ?>
    </table>

    <?php
    if(isset($_GET['nim'])){

      mysqli_query($koneksi,"delete from tbmahasiswa where nim ='$_GET[nim]'");

      echo "Data Terhapus";
      echo "<meta http_equiv=refresh content=2;URL='datamahasiswa.php'>";
    }
    ?>
</body>