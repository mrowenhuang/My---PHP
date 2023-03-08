$(function() {

    $('.tombolAddData').on('click',function() {
        $('#exampleModalLabel').html('Add Data');
        $('.modal-footer button[type=submit]').html('Add Data');
    });


    $('.UbahData').on('click', function() {
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('modal-body form').attr('action','http://localhost/phplearning/MVC/MVCP11/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/phplearning/MVC/MVCP11/public/mahasiswa/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data,ID);
                $('#Name').val(data,Nama);
                $('#Umur').val(data,Umur);
                $('#Jurusan').val(data,Jurusan);

            }
        })


    });

});