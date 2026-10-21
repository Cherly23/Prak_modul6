<?php
class pengguna {

    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama  : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }

}

$pengguna1 = new pengguna();

$pengguna1->nama = "Cihuuyyy";
$pengguna1->email = "cihuy23@gmail.com";

$pengguna1->tampilkanData();

?>