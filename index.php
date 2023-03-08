<?php
    require 'control.php';
    $murid = query ("SELECT * FROM students");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Data Siswa</title>

     <style>

        /* body{
            background-color:#4eceb3;
        }
        .card{
            box-shadow: 4 4px 8px 8 rgba(0, 0, 0, 0.2);
            padding:   20px;
            text-align: center;
            background-color:#86f9f7;
        }

        table{
            align:center;
            margin-left:30px;
            margin-right:30px;
            background-color: white;
        } */

        /* .judul{
            color: hsl(180, 3%, 6%);
            align:center;   
        } */
        /* .tambah{
            font-size:20px;
            margin-right:700px;
        }
        .container{
            align:center;
            margin-left:300px;
            margin-top:50px;
            margin-right:300px;
        } */
    </style>
</head>
<body>
<div class="container">
  <div class="card">
   <div class= "judul">
    <h1>DATA SISWA</h1>
  </div>
  <div class= "tambah">
    <a href="tambah.php">
    <button  type="button" class="btn btn-success">Tambah</button>


    </a>
  </div>
        <br/>
    
    <table   class="table">  
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Status</th>
                <th>Hobi</th>
                <th>alamat</th>
                <th>merk laptop</th>
                <th>cita cita</th>
                <th>Gambar</th>

                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =1 ?>
            <?php foreach ($murid as $siswa) { ?>
            <tr>
                <td><?=$i?></td>

                <td><?= $siswa["nama"]?></td>
                <td><?= $siswa["nis"]?></td>
                <td><?= $siswa["rombel"]?></td>
                <td><?= $siswa["rayon"]?></td>
                <td><?= $siswa["status"]?></td>
                <td><?= $siswa["hobi"]?></td>
                <td><?= $siswa["alamat"]?></td>
                <td><?= $siswa["merk_laptop"]?></td>
                <td><?= $siswa["cita_cita"]?></td>
                <td><?= $siswa["gambar"]?></td>
                <td>
                 
                    <a href="hapus.php?id=<?= $siswa["id"] ?>" onclick="return confirm ('yakin mau dihapus?')">
                    <button type="button" class="btn btn-danger">Hapus</button></a>
                    <a href="ubah.php?id=<?= $siswa["id"] ?>">
                    <button type="button" class="btn btn-warning">Ubah</button></a>
                    
                    <a href="lihat.php?id=<?= $siswa["id"] ?>">
                    <button type="button" class="btn btn-primary">Lihat</button></a>
                </td>
            </tr>
            <?php $i++ ?>
            <?php } ?>
        </tbody>
    </table>
   
            
</body>
</html>