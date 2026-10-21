<?php
class pengguna {

    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama  : " . $this->nama . "<br>";
        echo "Email : " . $this->email . "<br>";
    }

}

class Mahasiswa extends pengguna {

    public $nim;
    public $prodi;
}

$mhs1 = new pengguna();

$mhs1->nama = "Cihuuyyy";
$mhs1->email = "cihuy23@gmail.com";
$mhs1->nim = "123456789";
$mhs1->prodi = "Sistem Informasi";

$mhs1->tampilkanData();

echo "NIM    : " . $mhs1->nim . "<br>";
echo "Prodi  : " . $mhs1->prodi . "<br>";

?>