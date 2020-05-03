<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagination</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <center>
    <h2>Daftar Mahasiswa Informatika</h2>
    <table border="1" class="lihat-tabel">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>   
            <th>Umur</th>                            
        </tr>
        <?php 
            $halaman = 5;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);            
            $query = mysqli_query($mysqli, "SELECT * FROM mahasiswa LIMIT $mulai, $halaman")or die(mysql_error);
            $no =$mulai+1;
            while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>                  
            <td><?php echo $data['name']; ?></td>      
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['age']; ?></td>                   
        </tr>
        <?php               
        } 
        ?>
    </table>          
    <div class="">
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php } ?>
    </div>
    </center>
</body>
</html>  