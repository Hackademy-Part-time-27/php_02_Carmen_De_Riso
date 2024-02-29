<?php
//TRACCIA1

// $users = [
//     ['name' => 'Davide', 
//     'surname' => 'Cariola', 
//     'gender' => 'M'],
//     ['name' => 'Maria', 
//     'surname' => 'Cesarano', 
//     'gender' => 'F'],
//     ['name' => 'Francesco', 
//     'surname' => 'Balestrieri', 
//     'gender' => 'M'],
//     ['name' => 'Federica', 
//     'surname' => 'Donnarumma', 
//     'gender' => 'F'],
//     ];

//     for($i = 0; $i < count($users); $i ++ ){
//         if ($users[$i]['gender'] === 'F'){
//                 echo "Buongiorno Sig.ra" . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n";
//             } else {
//                 echo "Buongiorno Sig." . " " . $users[$i]['name'] . " " . $users[$i]['surname'] . "\n";
//             }
//     };


//TRACCIA2

// $numbers = [1,2,3,4,5,6,7,8,9,10];
// $sommaNumeriPari=0;
// $numeriPari=0;

// for ($i = 0; $i < count($numbers); $i++){
//    if($numbers[$i] % 2 === 0){
//         $sommaNumeriPari += $numbers[$i]; $numeriPari++;
//    }
// };
// if ($numeriPari > 0){
//     $media = $sommaNumeriPari / $numeriPari;
//     echo "la media dei numeri pari è:" . $media . "\n";
// }

//TRACCIA3

for ($i = 0; $i <100 ; $i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo "HACKADEMY" . "\n";
    } else if ($i % 3 === 0){
        echo "PHP" . "\n";
    } else if ($i % 5 === 0){
        echo "JAVASCRIPT" . "\n";
    } else {
        echo $i . "\n";
    }
}
