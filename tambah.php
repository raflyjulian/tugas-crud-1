<?php
    require 'control.php';

    if (isset($_POST["submit"]) ){

        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil dimasukan');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal dimasukan');
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
    <title>tambah data siswa</title>
   
</head>
<div class= card>
 <body>
 <form action="" method= "post" style="width:50%;margin:auto;margin-top:20px;padding:20px;border:1px solid;border-radius:20px">
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nis</label>
    <input type="text" class="form-control" id="" name="nis" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">rombel</label>
    <input type="text" class="form-control" id="" name="rombel" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">rayon</label>
    <input type="text" class="form-control" id="" name="rayon" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">status</label>
    <input type="text" class="form-control" id="" name="status" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">hobi</label>
    <input type="text" class="form-control" id="" name="hobi" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <input type="text" class="form-control" id="" name="alamat" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">merk_laptop</label>
    <input type="text" class="form-control" id="" name="merk_laptop" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">cita_cita</label>
    <input type="text" class="form-control" id="" name="cita_cita" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">gambar</label>
    <input type="file" class="form-control" id="" name="gambar" aria-describedby="emailHelp">
  </div>

        <!-- <label for="">nama</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">nis</label>
        <input type="text" name="nis" id="">
        <br>
        <label for="">rombel</label>
        <input type="text" name="rombel" id="">
        <br>
        <label for="">rayon</label>
        <input type="text" name="rayon" id="">
        <br>
        <label for="">status</label>
        <input type="text" name="status" id="">
        <br>
        <label for="">Hobi</label>
        <input type="text" name="hobi" id="">
        <br>
        <label for="">alamat</label>
        <input type="text" name="alamat" id="">
        <br>
        <label for="">merk laptop</label>
        <input type="text" name="merk_laptop" id="">
        <br>
        <label for="">cita cita</label>
        <input type="text" name="cita_cita" id="">
        <br>
        <label for="">gambar</label>
        <input type="file" name="gambar" id=""> -->
        <!-- <br> -->

        <button type="submit" class="btn btn-success" name= "submit">kirim</button>
    </form>
 </body>
</div>
</html>