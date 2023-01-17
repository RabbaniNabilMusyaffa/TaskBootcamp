<?php

class Lingkaran
{

    public float $jari;

    public function __construct(float $jari)
    {
        $this->jari = $jari;
    }

    public function Area()
    {
        $phi = 3.14;
        $r = $this->jari;

        $hasil = $phi * $r;

        echo $hasil;
    }

    public function Circumference()
    {
        $phi = 3.14;
        $r = $this->jari;

        $hasil = $phi * $r * $r;

        echo $hasil;
    }

    public function Enlarge(int $scale)
    {
        $jari = $this->jari;

        $hasil = $jari * $scale;

        echo "Jari-jari yang telah diperbesar adalah " . $hasil;
    }

    public function Shrink(int $scale)
    {
        $jari = $this->jari;

        $hasil = $jari / $scale;

        echo "Jari-jari yang telah diperkecil adalah " . $hasil;
    }
}

class Persegi
{
    public float $sisi;

    public function __construct(float $sisi)
    {
        $this->sisi = $sisi;
    }

    public function Area()
    {
        $s = $this->sisi;

        $hasil = $s * $s;

        echo $hasil;
    }

    public function Circumference()
    {
        $s = $this->sisi;

        $hasil = 4 * $s;

        echo $hasil;
    }

    public function Enlarge(int $scale)
    {
        $sisi = $this->sisi;

        $hasil = $sisi * $scale;

        echo "Sisi yang telah diperbesar adalah " . $hasil;
    }

    public function Shrink(int $scale)
    {
        $sisi = $this->sisi;

        $hasil = $sisi / $scale;

        echo "Sisi yang telah diperkecil adalah " . $hasil;
    }
}

class PersegiPanjang
{
    public float $panjang;
    public float $lebar;

    public function __construct(float $panjang, float $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function Area()
    {
        $p = $this->panjang;
        $l = $this->lebar;

        $hasil = $p * $l;

        echo $hasil;
    }

    public function Circumference()
    {
        $p = $this->panjang;
        $l = $this->lebar;

        $hasil = 2 * ($p + $l);

        echo $hasil;
    }

    public function Enlarge(int $scale)
    {
        $p = $this->panjang;
        $l = $this->lebar;

        $pScaled = $p * $scale;
        $lScaled = $l * $scale;

        echo "Panjang yang telah diperbesar adalah " . $pScaled . "\n";
        echo "Lebar yang telah diperbesar adalah " . $lScaled;
    }

    public function Shrink(int $scale)
    {
        $p = $this->panjang;
        $l = $this->lebar;

        $pShrunk = $p / $scale;
        $lShrunk = $l / $scale;

        echo "Panjang yang telah diperkecil adalah " . $pShrunk . "\n";
        echo "Lebar yang telah diperkecil adalah " . $lShrunk;
    }
}

// $Lingkaran = new Lingkaran(25);
// echo $Lingkaran->shrink(5);
// $Persegi = new Persegi(5);
// echo $Persegi->Area();
$PersegiPanjang = new PersegiPanjang(4, 6);
echo $PersegiPanjang->Shrink(2);
