<?php
class Lingkaran{
    /**
     * Access Modifier
     * 1. public (dapat di akses di semua class)
     * 2. private (hanya dpt diakses di class tersebut)
     * 3. protected (dapat diakses di class turunan)
     */

     //atribut / properti
     private $jari;
     const PHI = 3.14;

     //method : function yg ada di dalam class (jika tdk di set acces modifier nya maka akan otomatis menjadi publik)
     public function __construct ($r)
     {
        $this-> jari = $r;
     }

     public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
     }

     public function getKeliling(){
        return 2 * self::PHI * $this->jari;
     }
}