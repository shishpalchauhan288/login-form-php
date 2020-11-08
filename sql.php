<?php


$conn = mysqli_connect( 'localhost', 'root', '', 'demo');

//if (!$conn){
 //   die ('')
//}
//$server_name = 'localhost';
//$user_name =  'roo';
//$pass_word = '';

//$conn = mysqli_connect( $server_name,  $user_name,  $pass_word );

if (  !$conn ){
    die( 'Unable to connect' ) ;

}else{
    echo 'connected!';
}

?>