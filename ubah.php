<?php
    require 'control.php';

    $id = $_GET["id"];
    $siswa = query("SELECT * FROM students WHERE id = $id")[0];

    if (isset($_POST["submit"]) ){

        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ubah');
                    document.location.href = 'index.php';
                </script>
            ";
        }
        
    }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>ubah data siswa</title>
    <!-- <style>
        .card{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding:   20px;
            text-align:left;
            background-color:#86f9f7;
            margin-left:300px;
            margin-right:800px;
            margin-top:50px;
        }

        .box{
            display: left;
            justify-content: center;
            align-items: center;
            min-height: 400px;
            padding: 10px;
        }
    </style> -->
</head>
<body>
<div class="card">
<div class="box">
   
<form action="" method= "post" style="width:50%;margin:auto;margin-top:20px;padding:20px;border:1px solid;border-radius:20px">
    <input type="hidden" name="id" id="" value="<?= $siswa["id"] ?>">
    <br>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="" name="name" id="" value="<?= $siswa["nama"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nis</label>
    <input type="text" class="form-control" id="" name="nis" id="" value="<?= $siswa["nis"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">rombel</label>
    <input type="text" class="form-control" id="" name="rombel" id="" value="<?= $siswa["rombel"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">rayon</label>
    <input type="text" class="form-control" id="" name="rayon" id="" value="<?= $siswa["rayon"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">status</label>
    <input type="text" class="form-control" id="" name="status" id="" value="<?= $siswa["status"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">hobi</label>
    <input type="text" class="form-control" id="" name="hobi" id="" value="<?= $siswa["hobi"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="" name="alamat" id="" value="<?= $siswa["alamat"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">merk laptop</label>
    <input type="text" class="form-control" id="" name="merk_laptop" id="" value="<?= $siswa["merk_laptop"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cita cita</label>
    <input type="text" class="form-control" id="" name="cita_cita" id="" value="<?= $siswa["cita_cita"] ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">gambar</label>
    <input type="file" class="form-control" id="" name="gambar" id="" value="<?= $siswa["gambar"] ?>" aria-describedby="emailHelp">
  </div>
        <!-- <label for="">nama</label>
        <input type="text" name="name" id="" value="<?= $siswa["nama"] ?>"> -->
        <!-- <br>    
        <label for="">nis</label>
        <input type="text" name="nis" id="" value="<?= $siswa["nis"] ?>"> -->
        <!-- <br>
        <label for="">rombel</label>
        <input type="text" name="rombel" id="" value="<?= $siswa["rombel"] ?>"> -->
        <!-- <br>
        <label for="">rayon</label>
        <input type="text" name="rayon" id="" value="<?= $siswa["rayon"] ?>"> -->
        <!-- <br>
        <label for="">status</label>
        <input type="text" name="status" id="" value="<?= $siswa["status"] ?>"> -->
        <!-- <br>
        <label for="">hobi</label>
        <input type="text" name="hobi" id="" value="<?= $siswa["hobi"] ?>">
        <br>
        <label for="">alamat</label>
        <input type="text" name="alamat" id="" value="<?= $siswa["alamat"] ?>">
        <br>
        <label for="">merk laptop</label>
        <input type="text" name="merk_laptop" id="" value="<?= $siswa["merk_laptop"] ?>">
        <br>
        <label for="">cita cita</label>
        <input type="text" name="cita_cita" id="" value="<?= $siswa["cita_cita"] ?>">
        <br>
        <label for="">gambar</label>
        <input type="file" name="gambar" id="" value="<?= $siswa["gambar"] ?>">
        <br> -->
        
        <button type="submit" class="btn btn-success" name= "submit">kirim</button>
    </form>
   </div> 
</div>
</body>
</html>