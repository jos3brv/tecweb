<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '</ul>';
    ?>

    <h2>Ejercicio 2</h2>
    <?php
  
    $a = "ManejadorSQL";
    $b = 'MySQL'; 
    $c = &$a;
    echo '<h4>a)</h4>';
    echo "$a";
    echo '<br>';
    echo "$b";
    echo '<br>';
    echo "$c";
    echo '<br>';

    //b)
    $a = "PHP server";
    $b = &$a;
    $c = &$a;
    echo '<h4>c)</h4>';
    echo "$a";
    echo '<br>';
    echo "$b";
    echo '<br>';
    echo "$c";

    echo '<h4>d)</h4>';
    echo '<p>En el segundo bloque de asignaciones, se cambió el valor de la variable $a de "ManejadorSQL" a "PHP server" mediante la asignación $a = "PHP server". Luego, la variable $b se convirtió en una referencia a $a mediante la asignación $b = &$a. Esto significa que tanto $a como $b apuntan a la misma ubicación de memoria y, por lo tanto, contienen el mismo valor "PHP server". Además, la variable $c, que ya era una referencia a $a desde el primer conjunto de asignaciones, también refleja el cambio y contiene "PHP server".</p>';
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    $a = "PHP5";
    echo "$a<br>";
    $z[] = &$a;
    echo @$z[0] . "<br>";
    $b = "5a version de PHP";
    echo "$b<br>";
    @$c = $b * 10;
    echo "$c<br>";
    $a .= $b;
    echo "$a<br>";
    @$b *= $c;
    echo "$b<br>";
    $z[0] = "MySQL";
    echo @$z[0] . "<br>";
    ?>


    <h2>Ejercicio 4</h2>
    <?php
function ejecutarCodigo() {
    global $a, $z;
    
    $a = "PHP5";
    echo "$a<br>";
    $z[] = &$a;
    echo @$z[0] . "<br>";
    
    $b = "5a version de PHP";
    echo "$b<br>";
    @$c = $b * 10;
    echo "$c<br>";
    
    $a .= $b;
    echo "$a<br>";
    @$b *= $c;
    echo "$b<br>";
    
    $z[0] = "MySQL";
    echo @$z[0] . "<br>";
}

ejecutarCodigo(); 
?>


</body>
</html>