<?php
$naslov = "Postani Programer";

$navigacija = [
"textNav" => [
    "first" => "Glavna",
    "second" => "O nama",
    "third" => "Kontakt"
],
"linkNav" => [
    "one" => "home.php",
    "two" => "about.php",
    "three" => "contact,php"
]

];
$trenutnaGodina = date("Y");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $naslov ?></title>
</head>
<body>
    <h1><?= $naslov ?></h1>
    <nav>
     <a href="<?= $navigacija['linkNav']['one'];?>"><?=$navigacija['textNav']['first'];?></a>
     <a href="<?= $navigacija['linkNav']['two'];?>"><?=$navigacija['textNav']['second'];?></a>
     <a href="<?= $navigacija['linkNav']['three'];?>"><?=$navigacija['textNav']['third'];?></a>

    
    
    
    </nav>
    <footer><p>Copyright &copy; mojsajt <?= $trenutnaGodina ?></p></footer>
</body>
</html>