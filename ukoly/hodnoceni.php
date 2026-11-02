<?php
$studentName = "Jan Novák";
$test1 = 75;
$test2 = 90;
$test3 = 60;
$max = 300;

function br() {
    echo "<br>";
}

function hr() {
    echo '<hr width="100%" size="3" color="black">';
}

echo "<h2>$studentName</h2>";
hr();
echo "Test 1: " . "<strong>" . $test1 . "</strong>" . "/100";
hr();
echo "Test 2: " . "<strong>" . $test2 . "</strong>" . "/100";
hr();
echo "Test 3: " . "<strong>" . $test3 . "</strong>" . "/100";
hr();

$celkem = ($test1 + $test2 + $test3);
echo "Celkový počet bodu: " . "<strong>" . ($celkem) . "</strong>";
br();
hr();

$prumer = ($celkem / 3);
echo "Průměrný počet bodu: " . "<strong>" . $prumer . "</strong>";
br();
hr();

$uspesnost = $celkem / $max * 100 . "%";
echo "Procentuální úspěšnost ze všech testů: " . "<strong>" . $uspesnost . "</strong>";
br();
hr();

$grade;
if($uspesnost <= 100) {
    $grade = 1;
} elseif ($uspesnost < 90) {
    $grade = 2;
} elseif ($uspesnost < 75) {
    $grade = 3;
} elseif ($uspesnost < 60) {
    $grade = 4;
} elseif ($uspesnost < 40) {
    $grade = 5;
}
echo "<h3>Výsledná známka: " . $grade . "</h3>";
br();

?>
