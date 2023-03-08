<?php 
// session start
session_start();

// perintah bila session tidak ada maka akan langsung di arahkan kembali
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require 'functions.php';

$id = $_GET['id'];

if ( hapus($id) > 0 ){
    echo"
    <script>
        alert('DELETE SUCCES');
        document.location.href = 'mysql_2.php';
    </script>
    ";
} else {
    echo mysqli_error(fconn());
    // echo"
    // <script>
    //     alert('DELETE FAILED');
    //     document.location.href = 'mysql_2.php';
    // </script>
    // ";
}


?>