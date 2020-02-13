<?php

$capitales = [

    "allemagne" => [
        "capitale" => "berlin",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/2880px-Flag_of_Germany.svg.png'
    ],
    "angleterre" => [
        "capitale" => "londres",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_England.svg/260px-Flag_of_England.svg.png'
    ],
    'belgique' => [
        "capitale" => 'bruxelles',
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/220px-Flag_of_Belgium.svg.png'
    ],
    "canada" => [
        "capitale" => "ottawa",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/220px-Flag_of_Canada_%28Pantone%29.svg.png'
    ],
    "espagne" => [
        "capitale" => "madrid",
        "drapeau" =>'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/220px-Flag_of_Spain.svg.png'
    ],
    "états-unis" => [
        "capitale" => "washington",
        "drapeau" =>'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/220px-Flag_of_the_United_States.svg.png'
    ],
    'france' => [
        "capitale" => "paris",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/220px-Flag_of_France.svg.png'
    ],
    "portugal" => [
        "capitale" => "porto",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/220px-Flag_of_Portugal.svg.png'
    ],
    "russie" => [
        "capitale" => "moscou",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/2880px-Flag_of_Russia.svg.png'
    ],
    "suisse" => [
        "capitale" => "berne",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Flag_of_Switzerland_%28Pantone%29.svg/1920px-Flag_of_Switzerland_%28Pantone%29.svg.png'
    ],
    "corée du nord" => [
        "capitale" => "Pyongyang",
        "drapeau" => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Flag_of_North_Korea.svg/2880px-Flag_of_North_Korea.svg.png'

    ]
];

$pays = $_GET["pays"];

foreach($capitales as $key => $capitale){
    if(in_array($pays, array_keys($capitales))){
        $sous_capitale = $capitales[$pays];
        $p = '<p>La capitale de '.ucwords($pays).' est '. ucwords($sous_capitale["capitale"]). ' et le drapeau est </p>';
        $img = '<img src="'.$sous_capitale["drapeau"].'" width="500"/>';
    }else{
        $p = 'Arretez vos bêtises Monsieur';
        $img = '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F4%2F45%2FRomanianTrafficSign_30-Stop_1977.svg%2F1024px-RomanianTrafficSign_30-Stop_1977.svg.png&f=1&nofb=1" width="500"/>';
    }
}
$test = '<h2>Test</h2>';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Capitale de Pays</h1>
<form action="index.php" method="get">

    <select name="pays">
        <?php foreach ($capitales as $key => $capitale){ ?>
                <option value="<?=$key?>" <?= ($pays === $key) ? 'selected' : ''?>><?= mb_strtoupper($key)?></option>
    <?php }?>

    </select>
    <input type="submit" value="Capitale">
    <br>
        <?=$p?>
    <br>
        <?=$img?>
</form>

</body>
</html>