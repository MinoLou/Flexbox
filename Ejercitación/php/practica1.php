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

?>
