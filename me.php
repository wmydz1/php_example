<?php
/**
 * Created by PhpStorm.
 * User: samchen
 * Date: 1/3/16
 * Time: 22:10
 */


for($i=0;$i<5;$i++){
    echo  "I am samchen !!  ".$i." <br/>";
}

$a=10;
$b=90;
echo "<br/><hr>";

if ( $a  >  $b ) {
    echo  "a is greater than b" ;
} else {
    echo  "a is NOT greater than b" ;
}

echo "<br/><hr>";
if( $a  >  $b ):
    echo  $a . " is greater than " . $b ;
elseif( $a  ==  $b ):  // 注意使用了一个单词的 elseif
    echo  $a . " equals " . $b ;
else:
    echo  $a . " is neither greater than or equal to " . $b ;
endif;

echo "<br/><hr>";
$i  =  1 ;
while ( $i  <=  10 ) {
    echo  $i ++."<br/>";   /* the printed value would be
                    $i before the increment
                    (post-increment) */
}

echo "<br/><hr>";

$arr  = array( 1 ,  2 ,  3 ,  4 );
foreach ( $arr  as & $value ) {
    echo  $value;
}

echo "<br/><hr>";

$arr  = array( "A" ,  "B",  "C" ,  "D" );
foreach ( $arr  as  $value ) {
    echo  $value . "<br/>";
}

echo "<br/><hr>";

foreach ( $arr  as  $key => $value ) {

    echo $key."-----". $value . "<br/>";
}

echo "<br/><hr>";

$arr  = array( 'one' ,  'two' ,  'three' ,  'four' ,  'stop' ,  'five' );
while (list (,  $val ) =  each ( $arr )) {
    if ( $val  ==  'stop' ) {
        break;     /* You could also write 'break 1;' here. */
    }
    echo  " $val <br />\n" ;
}