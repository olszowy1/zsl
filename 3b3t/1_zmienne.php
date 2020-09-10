<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $name='Janusz';
    $surname='Szczeszek';
    echo "Imię: $name<br>";
     // konkatenacja
    echo "Imię: $surname<br>";

    // boolean
    // typy danych

    $prawda = true;
    $falsz = false;

    echo $prawda;
    echo $falsz;

    $bin=0b1011;
    echo $bin,'<br>';

    $oct=011;
    echo $oct,'<br>';

    $hex=0xc;
    echo $hex,'<br>';

    $name = 'Krystyna';
    $text = <<< ETYKIETA
    Imię: $name;
    Nazwisko: $surname<hr>
ETYKIETA;

echo $text;

echo <<< E

Heredoc 2<br>

Imię: $name<hr>

E;


$city='Poznan';
echo "nazwa zmiennej: \$city";




  ?>

  </body>
</html>
