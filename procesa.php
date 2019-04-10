<?php

$palabra = $_POST['palabra'];

$vocales = ['a','e','i','o','u'];

$almacenar = [];

for($i=0; $i<strlen($palabra);$i++){
    if(in_array($palabra[$i], $vocales)){
        $almacenar[$i] = $palabra[$i];
    }
}

// foreach($almacenar as $a){
//     echo $a;
// }

echo json_encode([
    'respuesta' => $almacenar,
    'cantidad'  => count($almacenar)
]);

?>