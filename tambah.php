<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Donasi</title>
</head>
<?php
include "../koneksi.php";
?>

<body>
    <h2>Tambah Data Donasi</h2>    

    <center><center><h3>Donasi</h3></center>    
        <form method="post" action="#">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Nomer HP</td>
                <td><input type="text" name="nohap"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Pilih Restoran</td>
                <td>
                    <select name="jenis">
                        <option value="APD">Alat Pelindung Diri</option>
                        <option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
                        <option value="Kuota Mahasiswa">Kuota Mahasiswa</option>
                        <option value="Hand Sanitizer">Hand Sanitizer</option>                        
                        <option value="Sembako Masyarakat">Sembako Masyarakat</option> 
                    </select>
                </td>
            </tr>
            <tr>            
                <td>Jumlah Donasi</td>
                <td><input type="text" name="donasi"></td>            
            </tr>
            <tr>            
            <td></td>
            <td><input type="submit" value="SIMPAN" name="tambah"></td>
            </tr>            
        </table>
        </form>    
    <br />
    <p style="text-align:center;"><a href="index.php">KEMBALI</a></p>
    <br />
        </td>
        
    </table>
    </center>       
</body>


<?php
if(isset($_POST['tambah'])){
$nama = $_POST["nama"];
$nohp = $_POST["nohap"];
$email = $_POST["email"];
$jenis = $_POST["jenis"];
$jml = $_POST["donasi"];

switch($jenis){
    case 'APD' :
        $select = mysqli_query($koneksi,"SELECT * FROM apd ORDER BY id_apd DESC LIMIT 1");
        if(mysqli_num_rows($select)!= 0){
        while($row = mysqli_fetch_assoc($select)){
            $lastdonate=$row['jml_donasi'];
            if($lastdonate==0 || $lastdonate==NULL || empty($lastdonate)){
                $lastdonate=0;
            }
            $lastdonate+=$jml;
            $lasttotal=$row['jml_trans'];
            if($lasttotal==0 || $lasttotal==NULL || empty($lasttotal)){
                $lasttotal=0;
            }
            $lasttotal+=1;
        }
        mysqli_query($koneksi,"insert into apd values(NULL, '$jenis','$lastdonate', '$lasttotal')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");
    }else{
        mysqli_query($koneksi,"insert into apd values(NULL, '$jenis','$jml', '1')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");    
    }
    break;

    case 'Logistik Mahasiswa' :
        $select = mysqli_query($koneksi,"SELECT * FROM logistik ORDER BY id_logistik DESC LIMIT 1");
        if(mysqli_num_rows($select)!= 0){
        while($row = mysqli_fetch_assoc($select)){
            $lastdonate=$row['jml_donasi'];
            if($lastdonate==0 || $lastdonate==NULL || empty($lastdonate)){
                $lastdonate=0;
            }
            $lastdonate+=$jml;
            $lasttotal=$row['jml_trans'];
            if($lasttotal==0 || $lasttotal==NULL || empty($lasttotal)){
                $lasttotal=0;
            }
            $lasttotal+=1;
        }
        mysqli_query($koneksi,"insert into logistik values(NULL, '$jenis','$lastdonate', '$lasttotal')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");
    }else{
        mysqli_query($koneksi,"insert into logistik values(NULL, '$jenis','$jml', '1')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");    
    }
    break;

    case 'Kuota Mahasiswa' :
        $select = mysqli_query($koneksi,"SELECT * FROM kuota ORDER BY id_kuota DESC LIMIT 1");
        if(mysqli_num_rows($select)!= 0){
        while($row = mysqli_fetch_assoc($select)){
            $lastdonate=$row['jml_donasi'];
            if($lastdonate==0 || $lastdonate==NULL || empty($lastdonate)){
                $lastdonate=0;
            }
            $lastdonate+=$jml;
            $lasttotal=$row['jml_trans'];
            if($lasttotal==0 || $lasttotal==NULL || empty($lasttotal)){
                $lasttotal=0;
            }
            $lasttotal+=1;
        }
        mysqli_query($koneksi,"insert into kuota values(NULL, '$jenis','$lastdonate', '$lasttotal')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");
    }else{
        mysqli_query($koneksi,"insert into kuota values(NULL, '$jenis','$jml', '1')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");    
    }
    break;

    case 'Hand Sanitizer' :
        $select = mysqli_query($koneksi,"SELECT * FROM hs ORDER BY id_hs DESC LIMIT 1");
        if(mysqli_num_rows($select)!= 0){
        while($row = mysqli_fetch_assoc($select)){
            $lastdonate=$row['jml_donasi'];
            if($lastdonate==0 || $lastdonate==NULL || empty($lastdonate)){
                $lastdonate=0;
            }
            $lastdonate+=$jml;
            $lasttotal=$row['jml_trans'];
            if($lasttotal==0 || $lasttotal==NULL || empty($lasttotal)){
                $lasttotal=0;
            }
            $lasttotal+=1;
        }
        mysqli_query($koneksi,"insert into hs values(NULL, '$jenis','$lastdonate', '$lasttotal')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");
    }else{
        mysqli_query($koneksi,"insert into hs values(NULL, '$jenis','$jml', '1')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");    
    }
    break;
        
    case 'Sembako Masyarakat' :
        $select = mysqli_query($koneksi,"SELECT * FROM sembako ORDER BY id_sembako DESC LIMIT 1");
        if(mysqli_num_rows($select)!= 0){
        while($row = mysqli_fetch_assoc($select)){
            $lastdonate=$row['jml_donasi'];
            if($lastdonate==0 || $lastdonate==NULL || empty($lastdonate)){
                $lastdonate=0;
            }
            $lastdonate+=$jml;
            $lasttotal=$row['jml_trans'];
            if($lasttotal==0 || $lasttotal==NULL || empty($lasttotal)){
                $lasttotal=0;
            }
            $lasttotal+=1;
        }
        mysqli_query($koneksi,"insert into sembako values(NULL, '$jenis','$lastdonate', '$lasttotal')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");
    }else{
        mysqli_query($koneksi,"insert into sembako values(NULL, '$jenis','$jml', '1')");
        mysqli_query($koneksi,"insert into donasi values(NULL,'$nama', '$nohp','$email', '$jenis', '$jml')");
        header("location:index.php");    
    }
    break;
}
}
?>

</html> 