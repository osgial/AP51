<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $texto="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas tempor lacus, eu ornare erat aliquet at. Nulla arcu lectus, bibendum non arcu vel, fermentum mollis felis. Nam eget imperdiet justo, at tristique leo. Donec luctus lacinia dolor et suscipit. Aliquam felis nunc, fringilla ac metus in, tincidunt vulputate erat. Suspendisse euismod hendrerit nisl. Morbi consequat est id erat porttitor, ut posuere massa condimentum. Morbi vitae nisi id magna tincidunt condimentum nec vel metus. Sed ac dignissim neque. Nam nunc tellus, malesuada sit amet nulla sed, scelerisque ullamcorper libero. Sed venenatis eu urna ut auctor. Fusce sollicitudin id nulla luctus varius.\nUt tincidunt justo sem, et vehicula diam feugiat eu.Quisque quis velit ex.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Ut erat mauris, condimentum a nulla et, iaculis elementum nisl.Mauris justo dui, sollicitudin sed lacus in, rhoncus volutpat mauris.Duis commodo, erat ac feugiat egestas, neque elit auctor nunc, quis varius eros dolor eu neque.Aliquam erat volutpat.Nunc facilisis, libero eu feugiat gravida, lorem neque gravida diam, nec gravida lacus nulla et ex.Integer at consequat diam.Suspendisse potenti.Nam sed nisi ultrices, consequat ante vehicula, posuere felis.Morbi vitae diam tempus, egestas neque vitae, maximus risus.Etiam id tempus libero.Etiam urna dui, vestibulum sit amet eleifend id, lacinia vitae mi.Aenean in nisi venenatis enim malesuada efficitur.\nNam non eleifend erat, vel tempor purus.Quisque consectetur, tellus id tincidunt consectetur, augue quam vehicula tortor, et laoreet quam magna sit amet risus.Proin sollicitudin sagittis nibh, at aliquam lorem rutrum sed.Morbi tellus magna, suscipit eget sapien ut, varius tempor velit.Etiam eu iaculis velit.Ut a rhoncus nisl.Quisque ut condimentum est.Phasellus auctor mauris vitae nisl vestibulum, in lacinia erat tincidunt.Vestibulum sit amet mi vitae purus eleifend sagittis in ac mi.Sed in mi facilisis, interdum eros non, tristique neque.Donec finibus pellentesque velit.Donec sed lorem eget nisl aliquam suscipit.Nunc fermentum, sapien a bibendum vehicula, mi nisl scelerisque lectus, ac euismod mi augue nec arcu.Praesent laoreet diam sit amet sodales efficitur.\nPhasellus nec felis sollicitudin, pulvinar risus non, euismod neque.Aenean ultricies rhoncus neque, sed tempor quam consequat vel.Donec finibus, eros sed tincidunt varius, eros magna ornare lectus, quis consequat ex nulla et lacus.Suspendisse vitae enim eget felis faucibus vestibulum.Maecenas a ligula massa.Integer nec scelerisque odio.Etiam vel aliquam neque, sit amet semper lectus.\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis iaculis leo vel pharetra ornare.Vestibulum mi nunc, sollicitudin iaculis vulputate in, egestas a orci.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Cras sit amet gravida risus.Vivamus dignissim dapibus metus, in convallis eros.Phasellus id purus tellus.Vestibulum rutrum libero sapien, non gravida odio varius sit amet.Curabitur tristique velit eu laoreet aliquam.Phasellus vel justo felis.";
    
    function numcaracteres(string $texto) {
        $textoSinEspacios = str_replace([" ", "<pre>"], "", $texto);
        return strlen($textoSinEspacios);
    }
    echo "Numero de caracteres: " . numcaracteres($texto) . "<br>";

    function numpalabras(string $texto) {
        return str_word_count($texto);
    }
    echo "Numero de palabras: " . numpalabras($texto) . "<br>";

    function numfrases(string $texto) {
        $split = explode(", ", $texto);
        return count($split);
    }
    echo "Numero de frases: " . numfrases($texto) . "<br>";

    function numparrafos(string $texto) {
        $split = explode(". ", $texto);
        return count($split);
    }
    echo "Numero de parrafos: " . numparrafos($texto) . "<br>";

    function numprompalabras($texto) {
        $palabras = str_word_count($texto, 1);
        $totalPalabras = count($palabras);
        $totalLetras = array_sum(array_map('strlen', $palabras));
        return $totalLetras / $totalPalabras;
    }
    echo "Numero promedio de letras por palabra es: " . numprompalabras($texto) . "<br>";

    function numpromfrase($texto) {
        $frases = explode(", ", $texto);
        $totalFrases = count($frases);
        $totalPalabras = str_word_count($texto);
        return $totalPalabras / $totalFrases;
    }
    echo "Numero promedio de palabras por frase es: " . numpromfrase($texto) . "<br>";

    function numpromparrafo($texto) {
        $parrafos = explode(". ", $texto);
        $totalParrafos = count($parrafos);
        $totalFrases = numfrases($texto);
        return $totalFrases / $totalParrafos;
    }
    echo "Numero promedio de frases por parrafo es: " . numpromparrafo($texto) . "<br>";

    function letramoda($texto) {
        $texto = str_replace([" ", "<pre>"], "", $texto);
        $texto = strtolower($texto);
        $paco = 0;
        foreach (count_chars($texto, 1) as $key => $value) {
            if ($value > $paco) {
                $paco = $value;
                $paca = chr($key);
            }
        }
        $total = "La letra mas de moda es " . $paca . " y el numero de veces que se repite es " . $paco . " veces <br>";
        return $total;
    }
    echo letramoda($texto);
    ?>

</body>
</html>