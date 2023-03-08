// mengambil id/elemen pada mysql_2

var pencarian = document.getElementById('pencarian');

// var tombolPencarian = document.getElementById('tombol-pencarian');

var container = document.getElementById('container');

// menambah kan event/aksi ketika input box ditulis dan akan bekerja jika tombol pada keybord di angkat 

// cara kerja layaknya auto enter atu pencarian otomatis tanpa harus menekan tombol

// artinya menambahkan event / aksi berupa keyup pada pencarian dengan funsi sbb
pencarian.addEventListener('keyup',function() {

    // membuat object ajax 
    var ajax = new XMLHttpRequest();

    // mengecek kesiapan ajax
    ajax.onreadystatechange = function() {
        if(ajax.readyState == 4 && ajax.status == 200) {
            
            // responsetext berguna untuk mengambil seluruh data yang ada pada sumbernya

            // karena yang mau di ganti merupakan daerah form/innerhtml yang sudah di beri id container maka di paggil dengan menggunakan container.innerhtml
            // artinya data yang ada pada container yang di panggil dengan innerHTML akan di ubah paksa dengan data pada ajax.responsetext yang merupakan data sumbernya
            container.innerHTML = ajax.responseText;
        } 
    }

    // mengesekkusi ajax

    // membuka konesksi ajax dengan open lalu parameter 1 masukan tipe super global variable/method lalu parameter 2 masukan sumber data yang mau di ambil parameter 3 mau asynchchronus(true) atau synchchronus(false)

    // artinya kirim ajax dengan method get dengan tujuannya nya folder ajax file biodata lalu di isi dengan asynchronus
    ajax.open('GET','maindata/biodata.php?data='+ pencarian.value ,true);
    // menjalankan ajax
    ajax.send();

});

