<?php

function Task1()
{

    function LuasLingkaran($r = null, $i = null)
    {

        $r += $i;

        $LuasLingkaran = 3.14 * $r * $r;

        return $LuasLingkaran;
    }

    function KelilingLingkaran($r = null, $i = null)
    {

        $r += $i;

        $KelilingLingkaran = 2.00 * 3.14 * $r;

        return $KelilingLingkaran;
    }

    function LuasPersegiPanjang($p = null, $l = null, $i = null)
    {

        $p += $i;
        $l += $i;

        $LuasPersegiPanjang = $p * $l;

        return $LuasPersegiPanjang;
    }

    for ($i = 1; $i <= 100; $i++) {
        $new_i = floatval($i);
        if ($i % 3 == 0 || $i % 5 == 0) {
            if ($i % 3 == 0) {

                echo "Luas lingkaran dari bilangan " . sprintf("%.2f", $new_i) . " adalah " . sprintf("%.2f", LuasLingkaran($new_i / 3.00)) . "\n";
            }
            if ($i % 5 == 0) {

                echo "Keliling lingkaran dari bilangan " . sprintf("%.2f", $new_i) . " adalah " . sprintf("%.2f", KelilingLingkaran($new_i / 5.00)) . "\n";
            }
            if ($i % 3 == 0 && $i % 5 == 0) {

                echo "Luas persegi panjang dari bilangan " . sprintf("%.2f", $new_i) . " adalah " . sprintf("%.2f", LuasPersegiPanjang($new_i / 3.00, $new_i / 5.00)) . "\n";
            }
            echo " \n";
        } else {
            echo sprintf("%.2f", $new_i) . " \n";
            echo " \n";
        }
    }
};

Task1();
