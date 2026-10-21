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

    public function tampilkanPeran() {
        echo "Peran : Pengguna Umum<br>";
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

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIM    : " . $this->nim . "<br>";
        echo "Prodi  : " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Mahasiswa<br>";
    }
}

class Dosen extends pengguna {

    public $nidn;
    public $bidangKeahlian;

    public function __construct($nama, $email, $nidn, $bidangKeahlian) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->bidangKeahlian = $bidangKeahlian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "NIDN              : " . $this->nidn . "<br>";
        echo "Bidang Keahlian   : " . $this->bidangKeahlian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Dosen<br>";
    }
}

$mhs = new Mahasiswa("Cihuuyyy", "cihuy23@gmail.com", "987245239", "Sistem Informasi");
$dosen = new Dosen("Dr. Graciaa", "graciaa@gmail.com", "123456789", "Keamanan Siber");

echo "<h3>Data Mahasiswa</h3>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<h3>Data Dosen</h3>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

?>