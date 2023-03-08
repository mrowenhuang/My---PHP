<!-- part 11 constant -->
<!-- menyimpan nilai namun bersifat mutlak -->
<?php

// define
define('NAMA',"Owen Huang");
echo NAMA;

// const 
const UMUR = 17;
echo UMUR;


// perbedaan define dan const
// - const dapat di gunakan di dalam class
// - Define tidak dapat di gunakan di dalam class


class Constant {
    const NAMA = "Owen Huang";
}

echo Constant::NAMA;


// Magic Constant 
// Constant yang sudah memiliki nilai default
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__





?>