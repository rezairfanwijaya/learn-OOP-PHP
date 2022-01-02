<?php 
// buat class

use Mahasiswa as GlobalMahasiswa;

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
        return "Nama: {$this->nama} <br> Nim:{$this->nim} ";
    }
}

// class untuk membuat function cetak detail info mahasiswa
class DetailInfo{
    // function cetak detail info dengan parameter object type (GlobalMahasiswa) , jadi dengan object type kita hanya bisa mengisi parameter pada function hanya dari object yang kita tentukan dan kita bisa mengakses function dari object tersebut
    public function detailInfo( GlobalMahasiswa $mahasiswa)
    {
        return"{$mahasiswa->getlabel()} <br> Kelas:{$mahasiswa->kelas} <br> Jurusan: {$mahasiswa->jurusan}<br> Fakultas: {$mahasiswa->fakultas} <br><br>";
    }
}

// buat objek dan isi parameter untuk constructor
$mahasiswa1 = new Mahasiswa('Reza Irfan Wijaya', 'IF-07-H', 19102149, 'Teknik Informatika', 'Fakultas Informatika');

// buat objek dan isi parameter untuk constructor
$mahasiswa2 = new Mahasiswa('Reza', 'IF-07-H', 161021, 'Teknik Informatika', 'Fakultas Informatika');

// instansiasi class DetailInfo
$detail = new DetailInfo;
echo $detail->detailInfo($mahasiswa1);
echo $detail->detailInfo($mahasiswa2);


