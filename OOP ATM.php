<?php

Class ATM
{
    private $saldo;

    public function _construct($saldoAwal)
    {
        $this->saldo = $saldoAwal;
    }

    public function ceksaldo()
    {
        echo "Saldo Anda saat ini: Rp " . number_format($this->saldo, 0, ',' '.') . PHP_EOL; 
    }

    public function tarikTunai($jumlah)
    {
        if ($jumlah <= 0) {
            echo "jumlah penarikan tidak valid . PHP_EOL;"
            return;

        }

        $this->saldo -=$jumlah;
        echo "Penarikan tunai berhasil. Saldo Anda sekarang: Rp" . number_format($this->saldo, 0, ',', '.') . PHP_ECHO;
    }
}

//Contoh pengunaan
$atm = new ATM(1000000);

$atm->cekSaldo();

$atm->tarikTunai(500000);
$atm->cekSaldo();

$atm->setorTunai(2000000);
$atm->cekSaldo();

$atm->tarikTunai(1000000);
$atm->cekSaldo();

?>