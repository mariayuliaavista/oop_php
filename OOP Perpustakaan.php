<?php

class Buku
{
    private $jumlah;
    private $pengarang;
    private $jumlahHalaman;
    private $statusPinjam;

    public function_construct($judul, $pengarang, $jumlahHalaman)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getjudul()
    {
        return $this->judul;
    }

    public function getPengarang()
    {
        return $this->pengarang;
    }

    public function getJumlahHalaman()
    {
        return $this->jumlahHalaman;
    }

    public function getStatusPinjam()
    {
        return $this->getStatusPinjam ? "Sudah dipinjam" : "Belum dipinjam";
    }

    public function pinjam()
    {
        if ($this->statusPinjam) {
            echo "Buku sedang dipinjam";
            return;
        }

        $this->statusPinjam = true;
        echo "Pemimjaman berhasil";
    }

    public function kembalikan()
    {
        if (!$this->statusPinjam) {
            echo "Buku belum dipinjam";
            return;
        }

        $this->statusPinjam = false;
        echo "Pengambilan berhasil";
    }
}

//Contoh penggunaan 
$buku1 = new Buku("Harry Potter", "J.K Rowling",300);
$buku2 = new Buku("Sherlock Holmes", "Arthur Conan Doyle", 400);

echo "Buku 1: " . $buku1->getJudul() . "oleh" .$buku1->getpengarang() . " (" . $buku1->getJumlahHalaman() . "halaman," . $buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJudul() . "oleh" .$buku2->getPengarang() . " (" . $buku2->getJumlahHalaman() . "halaman," . $buku2->getStatusPinjam() . ")" . PHP_EOL;

$buku1->pinjam();
$buku2->pinjam();

echo "Setelah dipinjam:" . PHP_EOL;
echo "Buku 1: " . $buku1->getJudul() . "(" .$buku1->getStatusPinjam() . ")" . PHP_EOL;
echo "Buku 2: " . $buku2->getJudul() . "(" .$buku_>2getStatusPinjam() . ")" . PHP_EOL;

$buku1->kembalikan();

echo "Setelsh dikembalikan:" . PHP_EOL;
echo "Buku 1: " . $buku1->getJudul() . " (" . $buku1->getStatuusPinjam() . ")" .PHP_EOL;

?>


