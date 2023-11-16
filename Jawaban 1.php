<?php

// Hewan.php

class Hewan
{
    protected $nama_hewan;
    protected $jenis_hewan;

    public function __construct($nama_hewan, $jenis_hewan)
    {
        $this->nama_hewan = $nama_hewan;
        $this->jenis_hewan = $jenis_hewan;
    }

    public function suara()
    {
        return "{$this->nama_hewan} Suara";
    }
}

// Anjing.php

class Anjing extends Hewan
{
    private $sifat;

    public function __construct($nama_hewan, $jenis_hewan, $sifat)
    {
        parent::__construct($nama_hewan, $jenis_hewan);
        $this->sifat = $sifat;
    }

    public function suara()
    {
        return "{$this->nama_hewan} mengeluarkan suara 'Rawr'";
    }
}


// Kucing.php

class Kucing extends Hewan
{
    private $jenisBulu;

    public function __construct($nama_hewan, $jenis_hewan, $jenisBulu)
    {
        parent::__construct($nama_hewan, $jenis_hewan);
        $this->jenisBulu = $jenisBulu;
    }

    public function suara()
    {
        return "{$this->nama_hewan} mengeluarkan suara 'Meow'";
    }
}


// index.php

// require_once 'Hewan.php';
// require_once 'Kucing.php';
// require_once 'Anjing.php';

$kucing = new Kucing("Kitty", "Kucing", "Bulu Pendek");
$anjing = new Anjing("Doggy", "Anjing", "Setia");

echo $kucing->suara() . "\n";
echo $anjing->suara();

?>