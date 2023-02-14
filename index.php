<?php   
require 'funtions.php';
$datapelanggan = query("SELECT * FROM datapelanggan") ;

?> 
<html>
<head>
<title>Halaman Admin</title>
</head>
<body>


<nav class="navbar navbar-default ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">The Laundry</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll">HOME</a></li>
        <li><a href="#about" class="page-scroll">ABOUT</a></li>
		<li><a href="#services" class="page-scroll">SERVICES</a></li>
		<li><a href="#gallery" class="page-scroll">GALLERY</a></li>
		<li><a href="#testimonials" class="page-scroll">PRICING</a></li>
		<li><a href="#contact" class="page-scroll">CONTACT</a></li>
		<li><a href="Login.php" >LOGIN</a></li>
		<li><a href="Registration.php" >REGISTRATION</a></li>
		           
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<p style=text-align:center;><img src="https://scontent.fcgk27-1.fna.fbcdn.net/v/t39.30808-6/269700561_5014427188576753_3078129357517044317_n.jpg?_nc_cat=106&ccb=1-7cl&_nc_sid=e3f864&_nc_eui2=AeHn2QPZbI3UKCyi_aFtsYVoId3AffQPwTgh3cB99A_BOOOpU9URPpMNGIy2NSj2aOr4A7Z98UcKTQyRTjqT54zB&_nc_ohc=dB8u7H7nP1UAX8g3FGU&_nc_ht=scontent.fcgk27-1.fna&oh=00_AfA-1ibOmIXEawgFDD9j7_v4ToD04zTg3PU5OCVy9Om-cg&oe=63E7B339" alt="pandeelektronik"  style="width:100%"></p>

    <h3 style=text-align:center;>Halaman Daftar List Pande</h3>
    
    <a href="tambah.php" style=text-align:center; >Tambah Data Baru</a>
   

  
<table style="width:80%" align="center" cellpadding="10" cellspacing="0" border="1" style=text-align:center; width:auto>

<tr>
<th>No.</th>
<th>Nama</th>
<th>Barang</th>
<th>Customer</th>
<th>Tanggal</th>
<th>Keterangan</th>
<th>Lokasi</th>
<th>Aksi</th>
<th>Edit</th>
</tr>

<?php $i = 1;?>

<?php foreach ($datapelanggan as $row):?>

<tr>
<td style=text-align:center ><?= $i?></td>

<td><?= $row["Nama"]?></td>
<td><?= $row["Barang"]?></td>
<td><?= $row["Customer"]?></td>
<td><?= $row["Tanggal"]?></td>
<td><?= $row["Keterangan"]?></td>
<td><?= $row["Lokasi"]?></td>
<td><?= $row["Aksi"]?></td>
<td>
        <a href="Edit.php?id=<?=  $row["Id"];?> ">Ubah data </a>
        <br>
        <a href="Hapus.php?id=<?= $row["Id"];?>" onclick="return confirm('yakin ingin menghapus data?');">Hapus</a>
</td>
</tr>
<?php $i++;?>

<?php endforeach; ?>

</table>

</body>
</html>