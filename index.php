<?php

echo '<pre>';
// $names = ['gabriel', 'ele', 'elas'];

// // foreach($names as $key => $name){
// //     echo $key . '=>' . $name;
// // }

// $i = 0;
// for($i = 0; $i < count($names); $i++){
//     if($i === 0){
//          continue;
//     }
//     echo $names[$i];
// }

function connection(){
    $pdo = new PDO('mysql:host=smpsistema.com.br;dbname=u283879542_gabriel_m',
    'u283879542_gabriel_m',
    'Gabriel_m@tipi02');
    return $pdo;
}


function getData($table){
    $query = connection()->query("select * from {$table}");
    $query->execute();
    return $query->fetch();
}

print_r(getData('tbl_gabrielm_cliente'));

echo '</pre>';


