<?php

// Promeny
$jmeno = "Andrii";
$prijmeni = "Romanenko";
$vek = 16;
$trida = "2.I";
$vyska = 1.72;
$je_student = true;
$oblibeny_jazyk = "C++";


// Vypis vseho
echo "<h1>Můj studentský profil</h1>";
echo "<br>";
echo "Jmeno: <strong>$jmeno</strong>";
echo "<br>";
echo "Prijmeni: <strong>$prijmeni</strong>";
echo "<br>";
echo "Vek: $vek let";
echo "<br>";
echo "Trida: $trida";
echo "<br>";
echo "Vyska: $vyska m";
echo "<br>";
if($je_student) {
    echo "Je student: Ano";
} else {
    echo "Je student: Ne";
}
echo "<br>";
echo "Oblibeny programovaci jazyk: $oblibeny_jazyk";
echo "<br>";

// Datove typy
echo "<h1>Datové typy</h1>";
var_dump($jmeno);
echo "<br>";
var_dump($prijmeni);
echo "<br>";
var_dump($vek);
echo "<br>";
var_dump($trida);
echo "<br>";
var_dump($vyska);
echo "<br>";
var_dump($je_student);
echo "<br>";
var_dump($oblibeny_jazyk);
echo "<br>";

?>
