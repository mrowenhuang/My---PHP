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

function upload () {

    $namefile = $_FILES['karya']['name'];
    $sizefile = $_FILES['karya']['size'];
    $error = $_FILES['karya']['error'];
    $tmpName = $_FILES['karya']['tmp_name'];

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

    // bila sudah lulus, data akan di upload
    
    // generate nama baru 

    $NewNamefile = uniqid();
    $NewNamefile .= '.';
    $NewNamefile .= $EkstensionImage;
    move_uploaded_file($tmpName,'img/'.$NewNamefile);
        
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
        
        $karyalama = ($data['karyalama']);
        
        if ($_FILES['karya']['error'] === 4) {
            $karya = $karyalama;
        } else {
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


// function regristasi

function register($value) {
    global $conn;

    // variable data
    $username = strtolower(stripslashes(htmlspecialchars($value["username"])));
    $pass = mysqli_real_escape_string($conn,$value["pass"]);
    $pass2 = mysqli_real_escape_string($conn,$value["pass2"]);

    // mengecek apkah ada username yang sudah terdata atau belum 

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Your Username already Have') 
            </script>";   
        return false;     
    }
    
    // memastikan pass yang di konfirmasi sama
    if ($pass !== $pass2) {
        echo "<script>
                alert('Your Password its Not Match') 
            </script>";
        
        return false;
    }

    // enkripsi password
    $password = password_hash($pass, PASSWORD_DEFAULT);

    // tambah ke dalam database
    mysqli_query($conn,"INSERT INTO users VALUES ('','$username','$password')");

    return mysqli_affected_rows($conn);
}




?>



