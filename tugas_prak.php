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


class Administrasi extends pengguna {

    public $idPegawai;
    public $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanData() {
        parent::tampilkanData();
        echo "ID Pegawai : " . $this->idPegawai . "<br>";
        echo "Bagian     : " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Tenaga Administrasi<br>";
    }
}

$mhs = new Mahasiswa("Cihuuyyy", "cihuy23@gmail.com", "987245239", "Sistem Informasi");
$dosen = new Dosen("Dr. Graciaa", "graciaa@gmail.com", "5667098521", "Keamanan Siber");
$admin = new Administrasi("Shani Indira", "shani.admin@gmail.com", "ADM202601", "Akademik dan Kemahasiswaan");

echo "<h3>Data Mahasiswa</h3>";
$mhs->tampilkanData();
$mhs->tampilkanPeran();

echo "<h3>Data Dosen</h3>";
$dosen->tampilkanData();
$dosen->tampilkanPeran();

echo "<h3>Data Administrasi</h3>";
$admin->tampilkanData();
$admin->tampilkanPeran();

?>