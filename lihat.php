<?php
  
  require 'control.php';
  $id = $_GET["id"];
  $siswa = query ("SELECT * FROM students WHERE id = $id")[0];
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin:0!important;
        }
    </style>
</head>
<body>
    <div style="width:30%;margin:auto;padding:20px;border:1px solid gray;border-radius:10px">
        <div style="display:flex;justify-content:center;margin-bottom:10px" >
            <img src="img/<?=$siswa["gambar"] ?>" width="200px" height="200px" style="border-radius:100%;object-fit:cover">
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">Nama</p>
            <p>:</p>
            <p><?= $siswa["nama"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">nis</p>
            <p>:</p>
            <p><?= $siswa["nis"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">rombel</p>
            <p>:</p>
            <p><?= $siswa["rombel"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">rayon</p>
            <p>:</p>
            <p><?= $siswa["rayon"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">status</p>
            <p>:</p>
            <p><?= $siswa["status"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">hobi</p>
            <p>:</p>
            <p><?= $siswa["hobi"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">alamat</p>
            <p>:</p>
            <p><?= $siswa["alamat"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">merk_laptop</p>
            <p>:</p>
            <p><?= $siswa["merk_laptop"]?></p>
        </div>
        <div style="display:flex;gap:3px;margin-bottom:8px;font-size:24px">
            <p style="width:150px;">cita_cita</p>
            <p>:</p>
            <p><?= $siswa["cita_cita"]?></p>
        </div>
    </div>
    <!-- <ul>
        <li>gambar:<img src="img/<?=$siswa["gambar"] ?>" width="200px" height="200px"></li>
        <li>Nama : <?= $siswa["nama"]?></li>
        <li>NIS : <?= $siswa["nis"]?></li>
        <li>Rombel : <?= $siswa["rombel"]?></li>
        <li>Rayon : <?= $siswa["rayon"]?></li>
        <li>Status : <?= $siswa["status"]?></li>
        <li>Hobi : <?= $siswa["hobi"]?></li>
        <li>Alamat : <?= $siswa["alamat"]?></li>
        <li>Merk Laptop : <?= $siswa["merk_laptop"]?></li>
        <li>Cita Cita : <?= $siswa["cita_cita"]?></li>
        

    </ul> -->
    
</body>
</html>