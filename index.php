<?php
//Opdr 1
//echo "Hello world.";

//Opdr 2
//$aantal = 14;
//echo $aantal;
//
//$deze_jongen = "Deze jongen is ";
//echo $deze_jongen;
//
//echo $deze_jongen.$aantal." jaar oud!";

//Opdr 3
$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");
echo $apen[2];

$apen [4] = "mandril";

$apen [6] = "baviaan";
echo "<ul>";
foreach ($apen as $aap) {
    echo "<li>".aap."</li>";
}
echo "</ul>";

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
for ($i = 1; $i<=9; $i++) {
    echo "<img src='img/aapje".$i."'.jpg'>";
}
?>
</body>
</html>
