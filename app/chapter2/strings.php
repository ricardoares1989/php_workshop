<?php
    $name = 'Dave';
    echo "Hello $name";
    $large_string = <<<STRING
    Las cadenas de texto se pueden ingresar de esta manera
    pudiendo utilizar multiples lineas sin preocuparte de
    la longitud, ya que todo esto quedara en una linea.
    Ademas, tiene como ventaja que puedes interpolar
    variables $name.
    STRING;
    echo $large_string;
    $large_string_sing = <<<'STRING'
    Las cadenas de texto se pueden ingresar de esta manera
    pudiendo utilizar multiples lineas sin preocuparte de
    la longitud, ya que todo esto quedara en una linea.
    Pero cuando usamos 'STRING' no podemos interpolar variables $name.
    STRING;