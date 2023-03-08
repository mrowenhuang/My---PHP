<?php 

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