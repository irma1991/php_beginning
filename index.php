<?php

$vardas = "Irma";
//$pavarde = "Linartaite";
//$elPastas = "irmalinaretaite@gmail.com";
//
//$output = '<div>';
//$output .= $vardas;
//$output .= '</div>';

// echo 'Mano vardas yra '.$vardas.'. Mano parave yra '.$pavarde.'. Mano el. pastas yra '.$elPastas.'.'
// vietoj echo, galima naudoti print

// var_dump($pavarde);
// galima pasitikrinti kintamaji (debuginti)

// echo "Mano vardas yra {$vardas}";
// naudojant dvigubas kabutes, nereikia jungti kintamojo, ji isves visa tiek

$eilute = " Pasakyk man, kiek turi raidziu? ";
$ilgis = strlen($eilute);
$eilute_be_tarpu = trim($eilute);
$didziosios_raides = strtoupper($eilute);
$mazosios_raides = strtolower($eilute);
$pirma_raide = ucfirst($eilute);
$pakeisti_teksta = str_replace("Pasakyk", "Parodyk", $eilute);
$zodis = substr($eilute, 1, 7);

// echo $eilute.' '.$ilgis;
// echo $eilute_be_tarpu.$ilgis;
// echo $didziosios_raides.$ilgis;
// echo $mazosios_raides.$ilgis;
// echo $pirma_raide.$ilgis;
// echo $pakeisti_teksta.$ilgis;
// echo $zodis.' arba'.$pakeisti_teksta;

//if(isset($vardas)){
//    echo "Labas!";
//} else{
//    echo "Nera vardo";
//}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <?php if ($vardas):?>
        <p>Labas: <?=$vardas;?></p>
        <?php else:?>
        <p>Nera vardo</p>
        <?php endif;?>
    </div>
</div>
</body>
</html>

<!--html reikia rasyti atskirai, o ne i php vieta-->
<!--!doctype html>-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div>-->
<!--    <?//=$vardas;?>
<!--</div>-->
<!--</body>-->
<!--</html>-->
