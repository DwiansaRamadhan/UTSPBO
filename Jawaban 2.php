<?php
 
class manusia{
    //prop
    public $nama;
    public $warna;
    
  
    function tampilkan_nama(){
        return "Nama saya dwiansa";
    }
    
}

$manusia = new manusia();
 

echo $manusia->tampilkan_nama();

?>