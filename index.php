<?php
// Определить массив, содержащий строки с текстом
$textos = ["Hola", "Mundo", "JavaScript", "PHP", "Python"];

// Найти самую длинную строку в массиве
$longitud_mas_larga = 0;
$texto_mas_largo = null;
foreach ($textos as $texto) {
    $longitud = strlen($texto);
    if ($longitud > $longitud_mas_larga) {
        $longitud_mas_larga = $longitud;
        $texto_mas_largo = $texto;
    }
}

// Вывести результат
echo "Самая длинная строка: $texto_mas_largo";


?>