<?php

function formatFrenchDate(DateTime $date)
{
    $month = ["janvier","fevrier","mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
    $days = ["dimanche", "lundi","mardi", "mercredi", "jeudi", "vendredi", "samedi"];

    return $days[$date->format('w')]." ".$date->format('d')." ".$month[$date->format('m')-1]." ".$date->format('Y');

}

$date = new DateTime();

echo formatFrenchDate($date);

echo "</br>";

$date = new DateTime('2030-12-25');

echo formatFrenchDate($date);

echo "</br>";

$date = new DateTime('1984-01-1');

echo formatFrenchDate($date);


echo "</br>";

echo $date->format('Y-m-d');

echo "</br>";

$date = new DateTime('09/12/2019');
echo $date->format('d/m/Y');

echo "</br>";

$date = new DateTime();
echo $date->format('Y-m-d H:i:s') ;


echo "</br>";

$date = new DateTime();
echo $date->format('d/m/Y H:i:s') ;


echo "</br>";
setlocale(LC_ALL, 'fr_FR.UTF8');
echo "Aujourd'hui nous sommes le ".strftime("%A %d %B %Y");

echo "</br>";

$month = ["janvier","fevrier","mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
$days = ["lundi","mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];


echo $days[$date->format('w')-1]." ".$date->format('d')." ".$month[$date->format('m')-1]." ".$date->format('Y');

echo "</br>";


$date = new DateTime();

$datetime = new DateTime('1999-03-15');
$interval = $date->diff($datetime);
echo $interval->format('il a %y ans, %m mois et %d jours');

echo "</br>";


$datetime = new DateTime('1860-01-22');
$interval = $date->diff($datetime);
echo $interval->format('il a %y ans, %m mois et %d jours');

echo "</br>";


$datetime = new DateTime('1981-07-04');
$interval = $date->diff($datetime);
echo $interval->format('j\'ai %y ans, %m mois et %d jours');echo "</br>";


echo "</br>";

$array = [
    [
        'nom'=>"pierre",
        'age'=>38,
        'sexe'=>"homme"
    ],
    [
        'nom'=>"dylan",
        'age'=>25,
        'sexe'=>"homme"
    ],
    [
        'nom'=>"elodie",
        'age'=>35,
        'sexe'=>"femme"
    ],

];

foreach ($array as $value){
    echo "je m'appelle " .
    $value['nom'] .
    " je suis un " .
    $value ['sexe'] .
    " et j'ai " .
    $value['age'] .
    " ans <br>";
}

echo "</br>";

$prenoms = array ('pierre', 'dylan', 'elodie');
$sexe = array ('homme', 'homme', 'femme');
$age = array (38, 25, 35);

for ($numero = 0; $numero < 3; $numero++)

{
    if ($age[$numero]>27) {
        echo "je m'appelle " .$prenoms[$numero];
        echo " je suis un ".$sexe[$numero];
        echo " et j'ai " .$age[$numero] ." ans <br>";
    }


}
echo PHP_EOL;





echo PHP_EOL;

function boucle($j)
{
    $etoile = "*";
    for ($i = 0; $i < $j; $i++)
    {
        echo $etoile;
    }
}

for ($i = 0; $i <= 8; $i++)
{
    echo boucle($i) . '</br>';


}


$tableau = [];
$nb = 10;

for ($i = 0; $i < $nb; $i++) {
    $tableau[] = random_int(0, 100);
}

var_dump($tableau);
echo "</br>";
echo "Somme = " .array_sum($tableau);
echo "</br>";
echo "Moyenne = " .array_sum($tableau)/$nb;

echo "</br>";

$nb2 = 0;
foreach ($tableau as $value)
{
    if ($value < 50)
        $nb2++;

}
echo "Nombre inférieur à 50 = " . $nb2;

echo "</br>";

$max = 0;
foreach ($tableau as $value)
{
    if ($value > $max)
        $max = $value;

}

echo "plus grand chiffre = " . $max;





 ?>
