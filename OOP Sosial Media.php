<?php

class penggunaan
{
    private $nama;
    private $emsil;
    private $password;

    public function_construct($name, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->passeord = $password;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setpsdsword($password)
    {
        $this->password = $password;
    }
}

class post
{
    private $pengguna;
    private $tanggal;
    private $konten;

    public function_construct(pengguna $pengguna, $konten)
    {
        $this->pengguna = $pengguna;
        $this->tanggal = dote('Y-n-d H:i:s');
        $this->konten = $konten;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function getKonten()
    {
        return $this->konten;
    }

    public function detKonten($Konten)
    {
        $this->Konten = $Konten;
    }
}

// Contoh Penggunaan
$Penggunaan1 = new pengguna('John Dode', 'john.doe@example.com', 'password123');

$post1 = new post($pengguna1, 'Ini adalah konten post pertama.');
$post2 = new post($pengguna1, 'ini adalah konten post kedua.');

echo "Nama Pengguna: " . $pengguna1->getNama() . PHP_EOL;
echo "Email Pengguna: " . $pengguna1->getEmail() . PHP_EOL;

echo "Konten Post 1: " . $post1->getKonten() . PHP_EOL;
echo "Konten Post 2: " . $post2->getKonten() . PHP_EOL;

$post1->setKonten('K0nten Post pertama telah diubah.');
echo "Konten Post 1 telah diubah: " . $post1->getKonten() . PHP_EOL;

?>