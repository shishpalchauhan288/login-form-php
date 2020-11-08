<?php

// While Loop#
// $x = 0;

// while($x <= 10 ){
//     echo "$x Hello world <br>";
//     $x++;
//     if (  $x == 5){
//         echo "the condition has met $x <br>";
//     continue;
//     }

// }



// Do While Loop

// $x = 0;

// do{
//     echo "$x Hello world <br>";
//     $x++;
//     if (  $x == 5){
//         echo "the condition has met $x <br>";
//     continue;
//     }

// } while ($x < 10);




// For Loop

// for($x = 0; $x < 10; $x++){
//     echo "$x Hello World <br>";
// }




// Foreach Loop

$count = [0,1,2,3,4,5,6,7,8,9,];
$students = ['name'=> 'jhon', 'email'=>'jhon@gmail.com','phone'=>'7057377270'];
foreach( $students as $key=>$value ){
    echo "$key is $value <br>" ;
}


?>