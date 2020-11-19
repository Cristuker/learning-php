<h1>Array</h1>
<?php 

$nomes =  array(
    "c" => "cristian",
    "l" => "loca",
    "m" => "magye",
    8 => "oito",
    "08" => "oitao",
    5.7 => "oito-sete"
);
$palavras = array("teste",
    "jogo",
    "php"
);

$langs = array("javascript", "php", "java", "go", "c", "c++", "c#", true, 100, 10.10, $palavras);

echo $palavras[1];
echo "<br>";
echo "$nomes[c]";
echo "<br>";
echo "<br>";
for ($i=0; $i < sizeof($langs); $i++) { 
   echo "Indice: $i - Linguagem: $langs[$i]  <br>";
}
echo "<br>";
echo "<br>";
foreach ($nomes as $key => $value) {
    echo "Key: $key  - Value: $value <br>";
}
echo "<br>";
echo "<br>";
echo "salve";
echo "<br>";
echo "<br>";
echo $langs{3};
# var_dump($langs);
echo "<br>";
echo "<br>";
print_r($langs);
echo "<br>";
echo "<br>";
unset($langs[2]);
print_r($langs);
$b = array_values($langs);
echo "<br>";
echo "<br>";
print_r($b);
echo "<br>";
echo "<br>";




?>