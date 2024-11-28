<?php

function perkenalan(): void {
    echo "Halo Nama Saya : Dafi Akbar";

}

function perkalian($angka1,$angka2): float|int{
    return $angka1 * $angka2;
}

perkenalan();
echo"<br>";
echo"umur saya : ";
echo perkalian( 9, 3);