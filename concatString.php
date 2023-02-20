<?php


// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)



function sortByStrLength( array $string ): array
{
    usort( $string, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $string;
}

$fruits = array( 'orange', 'kiwi', 'grape', 'mango' );
print_r( sortByStrLength( $fruits ) );

// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

function finalName($firstString,$secondString){
    $final=$firstString.$secondString;
    echo $final;
}
finalName("Emon"," Howlader");

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.


function removeFirstAndLastElement( array $array ): array
{
    return array_slice( $array, 1, -1 );
}
$peoples = array(  'Rakib', 'Sabbir', 'Emon', 'Sourov' );
print_r( removeFirstAndLastElement( $peoples ) );



// 4.Write a PHP function to check if a string contains only letters and whitespace.

function checkString( string $string ): string {
    if ( preg_match( '/^[A-Za-z\s]+$/', $string ) ) {
        return "This string contains letters & whitespace only";
    } else {
        return "The string contains other characters as well";
    }
}
$str = "Emon howlader *34";
echo checkString( $str )


// 5.Write a PHP function to find the second largest number in an array of numbers.

function largestSecondNumber( array $number ): int {
    rsort( $number );
    return $number[1];
}
$number = array( 2, 4, 67, 7, 34, 100 );
echo "The largest second number is " . largestSecondNumber( $number );
 
 ?>