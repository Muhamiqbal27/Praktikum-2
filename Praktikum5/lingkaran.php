<?php


class Lingkaran {
    //Property /Variabel
    private $jari;
    const PHI = 3.14;

    //Method /Function
    function __construct($r){
        $this->jari = $r;
    }

    function getluas(){
        return self::PHI * $this->jari * $this->jari;
    }

    function getkeliling(){
        return 2 * self::PHI * $this->jari;
    }

}

// Instance Object
$lingkaran1 = new Lingkaran(10);
echo 'luas lingkaran1 =' . $lingkaran1->getluas();
echo '<br> keliling lingkaran1 =' . $lingkaran1->getkeliling();
?>