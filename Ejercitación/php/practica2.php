<?php
  $persona = [
    "Nombre" => "Jon",
    "Apellido" => "Snow",
    "Edad" => 27,
    "Hobbies" => ["Netflix", "Fútbol", "Programar"]
  ];

  $persona["Edad"] = 25;

  $persona["Direccion"] = "Winterfell"; //Agrega campo

  $persona["Hobbies"][3] = "Cartas"; //Agrego campo a array de array

  var_dump($persona);

  $num1 = 10;
  $num2 = 20;

  if($num1>$num2){
      echo "El número mayor es $num1";
  }else {
    echo "El número mayor es $num2";
  }

  $numran = rand(1,5);

  if ($numran == 3 || $numran == 5){
    echo "<br>".$numran;
  }
echo "<br>";

  for($i=0; $i<10; $i++){
    echo "2 x $i = ". 2*$i . "<br>";
  }

echo "<br>";

  $varwhile = 100;
  while($varwhile >= 85){
    echo "While: $varwhile <br>";
    $varwhile--;
  }

echo "<br>";

  $i = 1;
  while($i <=5){
    echo "While:" . 2*$i . "<br>";
    $i++;
  }

echo "<br>";


$cara = 0;
$tiradas = 0;
while($cara < 5){
  $moneda = rand(0,1);
  if($moneda == 1){
    $cara++;
  }
  $tiradas++;
}
echo "Se tiró la moneda ".$tiradas." veces <br>";

echo "<br>";

$nombres = ["Pato","Peto","Pito","Poto","Carlos"];

for ($i = 0; $i < count($nombres); $i++) {
  // code...
  echo "For " . $nombres[$i] . "<br>";
}

echo "<br>";

$i=0;

while($i < count($nombres)){
  echo "While " . $nombres[$i] . "<br>";
  $i++;
}

echo "<br>";

$i=0;

do{
  echo "Do While " . $nombres[$i] . "<br>";
  $i++;
} while($i < count($nombres));

echo "<br>";

foreach($nombres as $unNombre){
  echo "Foreach " . $unNombre . "<br>";
}

?>
