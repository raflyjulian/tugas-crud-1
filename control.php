<?php
    $konek = mysqli_connect("localhost", "root", "",  "db_murid");

        function query($query ){
            global $konek;
            $result = mysqli_query($konek, $query);
            $tempat =[];
            while($baju = mysqli_fetch_assoc($result)){
                $tempat[] = $baju;
            }
            return $tempat;

        }

        function tambah($data){

            global $konek;
            $nama = htmlspecialchars($data["name"]);
            $nis = htmlspecialchars($data["nis"]);
            $rombel = htmlspecialchars($data["rombel"]);
            $rayon = htmlspecialchars($data["rayon"]);
            $status = htmlspecialchars($data["status"]);
            $hobi = htmlspecialchars($data["hobi"]);
            $alamat = htmlspecialchars($data["alamat"]);
            $merk_laptop = htmlspecialchars($data["merk_laptop"]);
            $cita_cita = htmlspecialchars($data["cita_cita"]);
            $gambar = htmlspecialchars($data["gambar"]);
           
            $query ="INSERT INTO students
                        VALUES
                        ('', '$nama',  '$nis', '$rombel', '$rayon', '$status', '$hobi',  '$alamat', '$merk_laptop', '$cita_cita', '$gambar')
                    ";
            mysqli_query($konek, $query);

            return mysqli_affected_rows($konek);  
        }

        
    function hapus( $id ){
        global $konek;
        mysqli_query ($konek, "DELETE FROM students WHERE id = $id");

        return mysqli_affected_rows ($konek);
    }

    function ubah($data){
        global $konek;
        $id = $data["id"];
        $nama = htmlspecialchars($data["name"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);
        $hobi = htmlspecialchars($data["hobi"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $merk_laptop = htmlspecialchars($data["merk_laptop"]);
        $cita_cita = htmlspecialchars($data["cita_cita"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query ="UPDATE students SET
            gambar = '$gambar',
            nama = '$nama',
            nis = '$nis',
            rombel = '$rombel',
            rayon = '$rayon',
            status = '$status',
            hobi = '$hobi',
            alamat = '$alamat',
            merk_laptop = '$merk_laptop',
            cita_cita = '$cita_cita'
            WHERE id = $id
        ";

        mysqli_query($konek, $query);

        return mysqli_affected_rows($konek);
    }

?>