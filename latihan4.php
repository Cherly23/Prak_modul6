<?php
class Pengguna {
    public function tampilkanPeran() {
        echo "Peran : Pengguna Sistem Informasi<br>";
    }
}

class Mahasiswa extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran : Mahasiswa<br>";
    }
}

class Dosen extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran : Dosen<br>";
    }
}

$mhs = new Mahasiswa();
$dosen = new Dosen();

$mhs->tampilkanPeran();
echo "<br>";
$dosen->tampilkanPeran();
?>