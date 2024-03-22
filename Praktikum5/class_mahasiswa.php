<?php

class mahasiswa {
    //Properti 
    
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    //Method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if ($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4.0){
            return 'CUM LAUDE';
        } else {
            return 'NILAI DILUAR JANGKAUAN';
        }
    }
}

// Instance Object
$mahasiswa1 = new Mahasiswa(110223285, 'Muhammad Iqbal');
$mahasiswa1->ipk = 3.75;
$mahasiswa1->prodi = 'Teknik INformatika';
$mahasiswa1->angkatan = 2023;
?>