<?php

$num = 25;
$user_input = 85;



if ( is_int($user_input)){ 
if ( $num == $user_input){
    echo "$num is equal to $user_input";
}else if( $num <= $user_input ) {
    echo "$num is lesser than $user_input";
}else if( $num >= $user_input ) {
    echo "$num is Greater than $user_input";
}
 }else{
 
     echo 'Error loading data';
 }

?>