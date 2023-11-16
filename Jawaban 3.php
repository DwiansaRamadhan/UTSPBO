<?php

class Hewan {
    public function suara() {
        echo "Hewan ini bersuara :\n";
    }
}


class Anjing extends Hewan {
    public function suara() {
        echo "Rawr\n";
    }
}


interface bisaTerbang {
    public function fly();
}

class Burung extends Hewan implements bisaTerbang {
    public function suara() {
        echo "cukurukuk mpo jeru\n";
    }

    public function fly() {
        echo "bisa terbang\n";
    }
}

$hewan = new Hewan();
$hewan->suara();  
$anjing = new Anjing();
$anjing->suara();  

$burung = new Burung();
$burung->suara();  
$burung->fly();

?>