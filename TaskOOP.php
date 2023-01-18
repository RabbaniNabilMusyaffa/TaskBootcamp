<?php

class Bangun_Datar
{
    public $name;
    public $caption;
    public $basetype;

    public function __construct($nm, $capt, $bt)
    {
        $this->name = $nm;
        $this->caption = $capt;
        $this->basetype = $bt;
    }

    public function enlarge(int $scale)
    {
    }

    public function shrink(int $scale)
    {
    }

    public function area()
    {
        $val_area = 0;
        return $val_area;
    }

    public function circumference()
    {
        $val_circumference = 0;
        return $val_circumference;
    }


    public function describetype()
    {
        $steks = "";
        if ($this->basetype == 1) {
            $steks = "Lingkaran";
        } else if ($this->basetype == 2) {
            $steks = "Persegi";
        } else {
            $steks = "Persegi Panjang";
        }
        return $steks;
    }
}


class Lingkaran extends Bangun_Datar
{

    public $radius;
    private $phi_value = 3.14;

    public function __construct($nm, $capt, $rad)
    {
        parent::__construct($nm, $capt, 1);
        $this->radius = $rad;
    }

    public function enlarge(int $scale)
    {
        $r = $this->radius;
        $newrad = $r * $scale;
        $this->radius = $newrad;
    }

    public function shrink(int $scale)
    {
        if ($scale <= 0) {
            $this->radius = 0;
        } else {
            $r = $this->radius;
            $newrad = $r / $scale;
            $this->radius = $newrad;
        }
    }

    public function area()
    {
        $phi = $this->phi_value;
        $r = $this->radius;
        $val_area = $phi * ($r * $r);
        return $val_area;
    }

    public function circumference()
    {
        $phi = $this->phi_value;
        $r = $this->radius;
        $val_circumference =  2 * $phi * $r;
        return $val_circumference;
    }
}


class Persegi extends Bangun_Datar
{

    public $sisi;

    public function __construct($nm, $capt, $ss)
    {
        parent::__construct($nm, $capt, 2);
        $this->sisi = $ss;
    }

    public function enlarge(int $scale)
    {
        $s = $this->sisi;
        $new_sisi = $s * $scale;
        $this->sisi = $new_sisi;
    }

    public function shrink(int $scale)
    {
        if ($scale <= 0) {
            $this->sisi = 0;
        } else {
            $s = $this->sisi;
            $new_sisi = $this->sisi / $scale;
            $this->sisi = $new_sisi;
        }
    }

    public function area()
    {
        $s = $this->sisi;
        $val_area = $s * $s;
        return $val_area;
    }

    public function circumference()
    {
        $s = $this->sisi;
        $val_circumference =  4 * $s;
        return $val_circumference;
    }
}



class Persegi_Panjang extends Bangun_Datar
{

    public $panjang;
    public $lebar;

    public function __construct($nm, $capt, $p, $l)
    {
        parent::__construct($nm, $capt, 3);
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function enlarge(int $scale)
    {
        $p = $this->panjang;
        $new_pjg = $p * $scale;

        $l = $this->lebar;
        $new_lbr = $l * $scale;

        $this->panjang = $new_pjg;
        $this->lebar = $new_lbr;
    }

    public function shrink(int $scale)
    {
        if ($scale <= 0) {
            $this->panjang = 0;
            $this->lebar = 0;
        } else {
            $p = $this->panjang;
            $l = $this->lebar;

            $new_pjg = $p / $scale;
            $new_lbr = $l / $scale;
            $this->panjang = $new_pjg;
            $this->lebar = $new_lbr;
        }
    }

    public function area()
    {
        $p = $this->panjang;
        $l = $this->lebar;
        $val_area = $p * $l;
        return $val_area;
    }

    public function circumference()
    {
        $p = $this->panjang;
        $l = $this->lebar;
        $val_circumference =  (2 * $p) + (2 * $l);
        return $val_circumference;
    }
}


class Descriptor
{
    public static function describe($obj_shape)
    {
        $teks = "Bangun datar ini adalah " . $obj_shape->describetype();
        $teks = $teks . " yang memiliki luas " . sprintf("%.2f", $obj_shape->area());
        $teks = $teks . " dan keliling " . sprintf("%.2f", $obj_shape->circumference());
        echo $teks . "\n";
    }
}

//objek lingkaran
$lingkaran_satu = new Lingkaran("l01", "Lingkaran 01", 30);
echo "Luas lingkaran (" . $lingkaran_satu->caption . ") adalah = " . sprintf("%.2f", $lingkaran_satu->area());
echo "  ";
echo "Keliling lingkaran (" . $lingkaran_satu->caption . ") adalah = " . sprintf("%.2f", $lingkaran_satu->circumference());
echo "\n";

//objek persegi
$persegi_satu = new Persegi("p01", "Persegi 01", 10);
echo "Luas persegi (" . $persegi_satu->caption . ") adalah = " . sprintf("%.2f", $persegi_satu->area());
echo "  ";
echo "Keliling persegi (" . $persegi_satu->caption . ") adalah = " . sprintf("%.2f", $persegi_satu->circumference());
echo "\n";

//objek persegi panjang
$persegi_pjg_satu = new Persegi_Panjang("pp01", "Persegi Panjang 01", 20, 10);
echo "Luas persegi panjang (" . $persegi_pjg_satu->caption . ") adalah = " . sprintf("%.2f", $persegi_pjg_satu->area());
echo "  ";
echo "Keliling persegi panjang(" . $persegi_pjg_satu->caption . ") adalah = " . sprintf("%.2f", $persegi_pjg_satu->circumference());
echo "\n";

//panggil descriptor dengan parameter berbentuk lingkaran
Descriptor::describe($lingkaran_satu);

//panggil descriptor dengan parameter berbentuk persegi
Descriptor::describe($persegi_satu);

//panggil descriptor dengan parameter berbentuk persegi panjang
Descriptor::describe($persegi_pjg_satu);
