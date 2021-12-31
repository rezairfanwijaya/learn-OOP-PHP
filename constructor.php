<?php 
// buat class
class Mahasiswa {
    // bikin property agar parameter di constructor bisa dipakai oleh banyak objek
    public $nama;
    public $kelas;
    public $nim;
    public $jurusan;
    public $fakultas;

    // buat constructor
    // kontruktor akan di jalankan setiap objek baru dibuat
    public function __construct($nama, $kelas, $nim, $jurusan, $fakultas){
        // timpa varible dengan parameter yang terlah di isi saat pembuatan objek
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->fakultas = $fakultas;
    }

    // function tampil info
    public function print (){
        echo 'Data Mahasiswa';
        echo '<br>';
        echo 'Nama: '.$this->nama;
        echo '<br>';
        echo 'Kelas: '.$this->kelas;
        echo '<br>';
        echo 'Nim: '.$this->nim;
        echo '<br>';
        echo 'Jurusan: '.$this->jurusan;
        echo '<br>';
        echo 'Fakultas: '.$this->fakultas;
        echo '<br>';
        echo '<br>';
    }
   
}

// buat objek dan isi parameter untuk constructor
$mahasiswa1 = new Mahasiswa('Reza Irfan Wijaya', 'IF-07-H', 191021, 'Teknik Informatika', 'Fakultas Informatika');
$mahasiswa1->print();

$mahasiswa1 = new Mahasiswa('Reza', 'IF-07-H', 161021, 'Teknik Informatika', 'Fakultas Informatika');
$mahasiswa1->print();
