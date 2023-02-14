<title style=text-align:center;>Halaman Admin</title>
<head>
<p style=text-align:center;><img src="https://scontent.fcgk27-1.fna.fbcdn.net/v/t39.30808-6/269700561_5014427188576753_3078129357517044317_n.jpg?_nc_cat=106&ccb=1-7cl&_nc_sid=e3f864&_nc_eui2=AeHn2QPZbI3UKCyi_aFtsYVoId3AffQPwTgh3cB99A_BOOOpU9URPpMNGIy2NSj2aOr4A7Z98UcKTQyRTjqT54zB&_nc_ohc=dB8u7H7nP1UAX8g3FGU&_nc_ht=scontent.fcgk27-1.fna&oh=00_AfA-1ibOmIXEawgFDD9j7_v4ToD04zTg3PU5OCVy9Om-cg&oe=63E7B339" alt="pandeelektronik"  style="width:100%"></p>

<h3 style=text-align:center; >Halaman Tambah Data Pelanggan</h3>

</head>

<table style="width:50%" align=center cellpadding="15" cellspacing="0" border="1">

<form action="" method="post">
<tr>
    <th><Label for="Nama" >Nama</Label></th>
    <th><input type="text" name="Nama" id="Nama" required></th>
</tr>

<tr>
   <th><Label for="Barang">Barang</Label></th>
   <th><input type="text" name="Barang" id="Barang" required></th>
</tr>

<tr>
    <th><Label for="Customer">Customer</Label></th>
    <th><input type="text" name="Customer" id="Customer" required></th>
</tr>

<tr>
    <th><Label for="Tanggal">Tanggal</Label></th>
    <th><input type="date" name="Tanggal" id="Tanggal" required></th>
</tr>

<tr>
    <th><Label for="Keterangan">Keterangan</Label></th>
    <th><input type="text" name="Keterangan" id="Keterangan" required></th>
</tr>

<tr>
    <th><Label for="Lokasi">Lokasi</Label></th>
    <th><input type="text" name="Lokasi" id="Lokasi" required></th>
</tr>

<tr>
    <th><Label for="Aksi">Aksi</Label></th>
    <th><input type="text" name="Aksi" id="Aksi" required></th>
</tr>

<tr>
<th></th>
<th><button type="submit" name="submit">Kirim</button></th>
</tr>

       
</form>



</table>

<?php

require 'funtions.php';

if(isset($_POST["submit"]) )
    //var dum untuk cek apakah ada data
//    var_dump($_POST);
{
   //Cek data masuk atau tidak
   if( tambah($_POST)> 0 ) {
    echo "<script>
    alert ('Data Berhasil Ditambahkan');
    document.location.href='index.php';
    </script>
   ";

   }  

   else{
    echo "<script>
    alert ('Data Gagal Ditambahkan');
    document.location.href='index.php';
    </script>
   ";
   }

}
?>