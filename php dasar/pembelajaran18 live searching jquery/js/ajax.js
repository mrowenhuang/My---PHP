$(document).ready(function() {

    // menghilangkan tombol search pada document(mysql_2) sudah ready
    $('#tombol-pencarian').hide();
    $('.loader').hide();
    // event yang akan di lakukan
    $('#pencarian').on('keyup',function() {

        // memunculkan icon loading
        $('.loader').show();

        // ajax dengan menggunakan load
        // $('#container').load('maindata/biodata.php?data=' + $('#pencarian').val());

        $.get('maindata/biodata.php?data=' + $('#pencarian').val(),function(data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });


});