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

    // function tampil info sebagian
    public function getlabel (){
        return "Nama: {$this->nama} <br> Nim:{$this->nim} <br><br>";
    }
}

// buat objek dan isi parameter untuk constructor
$mahasiswa1 = new Mahasiswa('Reza Irfan Wijaya', 'IF-07-H', 19102149, 'Teknik Informatika', 'Fakultas Informatika');
echo $mahasiswa1->getlabel();


// buat objek dan isi parameter untuk constructor
$mahasiswa2 = new Mahasiswa('Reza', 'IF-07-H', 161021, 'Teknik Informatika', 'Fakultas Informatika');
echo $mahasiswa2->getlabel();

