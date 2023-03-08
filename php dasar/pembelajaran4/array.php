<!-- perintahnya sama dengan python -->

<?php 

$hari = ["senin","selasa","rabu"];
$bulan = ['january',"febuary","mei"];


print_r($hari);

// pilihan 1
print_r($bulan[0]);

echo"\n";
// pilihan 2
echo $bulan[1];

// menambahkan nilai baru
$hari[] = "kamis";

print_r ($hari);

// mengubah nilai dari array

$hari[0] = "minggu ";
print_r($hari);

?>