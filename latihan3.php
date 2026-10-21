<?php
class pengguna {

    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }
    
    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

}

class Mahasiswa extends pengguna {

    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        parent::tampilkanData();
        echo "NIM    : " . $this->nim . "<br>";
        echo "Prodi  : " . $this->prodi . "<br>";
    }
}

$mhs1 = new Mahasiswa("Cihuuyyy", "cihuy23", "987245239", "Sistem Informasi");
$mhs1->tampilkanDataMahasiswa();

?>