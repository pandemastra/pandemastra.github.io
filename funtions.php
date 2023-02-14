<?php   
//koneksi ke database
$value = isset($_POST['value']) ? $_POST['value'] : '';

$conn = mysqli_connect("localhost","root","","datapelanggan");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row=mysqli_fetch_assoc($result))
    {
        $rows[]=$row;

    }

    return $rows;

}

function tambah($data){
    global $conn;

    $Nama = htmlspecialchars($data["Nama"]);
    $Barang = htmlspecialchars($data["Barang"]); 
    $Customer = htmlspecialchars($data["Customer"]);
    $Tanggal = htmlspecialchars($data["Tanggal"]);
    $Keterangan = htmlspecialchars($data["Keterangan"]);
    $Lokasi = htmlspecialchars($data["Lokasi"]);
    $Aksi = htmlspecialchars($data["Aksi"]);

    
    $query="INSERT INTO datapelanggan VALUES 
    ('','$Nama','$Barang','$Customer','$Tanggal','$Keterangan','$Lokasi','$Aksi')
    ";
    
    mysqli_query($conn, $query) ;
    
    return mysqli_affected_rows($conn);
} 

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM datapelanggan WHERE id = $id");

    return mysqli_affected_rows($conn);


} 

function ubah($data){
    global $conn;

    $id=$data["id"];
    $Nama = htmlspecialchars($data["Nama"]); 
    $Barang = htmlspecialchars($data["Barang"]); 
    $Customer = htmlspecialchars($data["Customer"]);
    $Tanggal = htmlspecialchars($data["Tanggal"]);
    $Keterangan = htmlspecialchars($data["Keterangan"]);
    $Lokasi = htmlspecialchars($data["Lokasi"]);
    $Aksi = htmlspecialchars($data["Aksi"]);

    
    $query="UPDATE datapelanggan SET 
            
            Nama='$Nama',
            Barang='$Barang',
            Customer='$Customer',
            Tanggal='$Tanggal',
            Keterangan='$Keterangan',
            Lokasi='$Lokasi',
            Aksi='$Aksi' 
            WHERE id = $id
    ";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
} 



?>  