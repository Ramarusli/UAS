<!DOCTYPE html>
<html>

<head>
    <title>Data Donasi</title>
</head>

<body>
    <h2>List Donasi</h2>    
    <a href="tambah.php">+ Input Donasi Baru</a>
    <br />
    <br />
    <table border="1" cellspacing='0' cellpadding='6'>
        <tr>
            <th>ID Donasi</th>
            <th>Jenis Alokasi</th>
            <th>Jumlah Dana</th>
            <th>Nama Lengkap</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
include "../koneksi.php";
$select = mysqli_query($koneksi,"select * from donasi");
while($row = mysqli_fetch_assoc($select)){
?>
        <tr>
            <td> <?php echo $row["id"]; ?> </td>
            <td> <?php echo $row["jenis_alokasi"]; ?> </td>
            <td> <?php echo $row["jml_dana"]; ?> </td>            
            <td> <?php echo $row["nama"]; ?> </td>
            <td> <?php echo $row["no_hp"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td>
                <a href="edit.php?id=<?php echo $row["id"]; ?>">EDIT</a> | <a
                    href="hapus.php?id=<?php echo $row["id"]; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
}
?>
    </table>
    <br />    
    <a href="cetakpdf.php">cetak pdf</a>&nbsp|&nbsp|&nbsp<a href="../index.php">Back to main menu</a><br>
</body>

</html>
