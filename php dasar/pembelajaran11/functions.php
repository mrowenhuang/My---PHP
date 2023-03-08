<?php 

function fconn() {
    $conn = mysqli_connect("localhost","root","","PHP_learning");
    return $conn;
}


$conn = mysqli_connect("localhost","root","","PHP_learning");



// data untuk mysql2
function query ($query) {
    global $conn;
    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; 
    }

    return $rows;
}


// data tambah

function tambah($data) {
    // DATA GLOBAL
    global $conn;
    // MENGUBAH DATA YANG DI INPUT MENJADI VARIABLE

    // htmlspesialchars memiliki kegunaan untuk membuat script html menjadi tulisan biasa
    $nama = htmlspecialchars($data["nama"]);
    $umur = htmlspecialchars($data["umur"]);
    $status = htmlspecialchars($data["status"]);
    $prodi = htmlspecialchars($data["prodi"]);

    // upload gambar
    $karya = upload();
    // memastikan bahwa bila tidak ada foto yang di upload maka data yang lain tidak dapat di masukan ke dalam database
    if (!$karya) {
        return false;
    }


    // SYNTAX DATABASE YANG DI GUNAKAN
    $query = "INSERT INTO biodata VALUES ('','$nama','$karya','$umur','$status','$prodi')";
    mysqli_query($conn, $query);

    // $checked = mysqli_affected_rows($conn);

    return mysqli_affected_rows($conn);
} 

// upload function
function upload () {

    $namefile = $_FILES['karya']['name'];
    $sizefile = $_FILES['karya']['size'];
    $error = $_FILES['karya']['error'];
    $tmpName = $_FILES['karya']['tmp_name'];

    // mengecek apakah gambar ada di upload atau tidak
    if ($error === 4) {
        echo "<script>
                alert('Input your image first') 
            </script>";
        
        return false;
    }

    // cek apakah yang di upload gambar atau bukan

    $ImageEkstensionValid = ['jpg','png','jpeg'];
    $EkstensionImage = explode('.',$namefile);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage,$ImageEkstensionValid)) {
        echo "<script>
                alert('Your Inputed Data is Not Image') 
            </script>";

        return false;
    }

    // mengecek size pada file atau image

    if ($sizefile > 5000000) {
        echo "<script>
                alert('Check Your Image Size') 
            </script>";
        
        return false;
    }
    
    // generate nama baru 

    $NewNamefile = uniqid();
    $NewNamefile .= '.';
    $NewNamefile .= $EkstensionImage;

    // memasukan file kedalam folder
    move_uploaded_file($tmpName,'img/'.$NewNamefile);
        
    // bila sudah lulus, data akan di upload

    return $NewNamefile;
}



// delete data

function hapus ($id) {
    global $conn;

    $query = "DELETE FROM biodata WHERE id = $id";
    mysqli_query($conn, $query );

    return mysqli_affected_rows($conn);
}


// update data 

function update ($data) {
        // DATA GLOBAL
        global $conn;
        // MENGUBAH DATA YANG DI INPUT MENJADI VARIABLE
    
        // htmlspesialchars memiliki kegunaan untuk membuat script html menjadi tulisan biasa
        $id = ($data['ID']);
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $status = htmlspecialchars($data["status"]);
        $prodi = htmlspecialchars($data["prodi"]);

        // variable karyalama
        $karyalama = ($data['karyalama']);
        
        if ($_FILES['karya']['error'] === 4) {
            // jika pada nilai error karya adalah 4 maka jalankan perintah variable karya bernilai variable karyalama
            $karya = $karyalama;
        } else {
            // jika pada nilai error tidak 4 maka jalankan perintah $karya dengan function upload
            $karya = upload();
        }

        


        // SYNTAX DATABASE YANG DI GUNAKAN
        $query = "UPDATE biodata SET nama = '$nama', karya = '$karya', umur = '$umur', status = '$status' , prodi = '$prodi' WHERE id = $id ";
        mysqli_query($conn, $query);
    
        // $checked = mysqli_affected_rows($conn);
    
        return mysqli_affected_rows($conn);
}

function search($data) {
    $query = "SELECT * FROM biodata WHERE nama LIKE '%$data%' OR umur LIKE '%$data%' OR prodi LIKE '%$data%'";

    return query($query);
}





?>



