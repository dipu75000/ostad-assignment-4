
<?php
//Number to the Question no:1
function sortStringsByLength( array $strings ): array{
    usort( $strings, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $strings;
}
$unsorted = ["apple", "banana", "cherry", "date", "elderberry"];
$sorted = sortStringsByLength( $unsorted );
print_r( $sorted );

//Output: date apple banana cherry elderberry


// //Number to the Question no:2
function concatTwoString( string $firstStr, string $secondStr ): string {
    return $firstStr .= $secondStr;
}
echo concatTwoString( "Hello", "Bangladesh" );

//Output: HelloBangladesh



// //Number to the Question no:3
function removeFirstAndLast($array) {
    array_shift($array); // remove the first element
    array_pop($array); // remove the last element
    return $array;
}
$input_array = array(1, 2, 3, 4, 5);
$output_array = removeFirstAndLast($input_array);
print_r($output_array);

//Output: 2,3,4


// //Number to the Question no:4
function contains_only_letters_and_whitespace($str) {
    $pattern = '/^[a-zA-Z\s]+$/';
    return preg_match($pattern, $str);
  }

  $str1 = "Adnan Dipu";
  $str2 = "AdnanDipu75";
  
  if (contains_only_letters_and_whitespace($str1)) {
    echo "$str1 contains only letters and whitespace \n";
  } else {
    echo "$str1 contains non-letter or non-whitespace characters";
  }
  if (contains_only_letters_and_whitespace($str2)) {
    echo "$str2 contains only letters and whitespace";
  } else {
    echo "$str2 contains non-letter or non-whitespace characters";
  }

  //Output: 
  //Adnan Dipu contains only letters and whitespace 
  //AdnanDipu75 contains non-letter or non-whitespace



//Number to the Question no:5
function findSecondLargest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];

    $c = count($arr);

    for ($i = 1; $i < $c ; $i++) {
        if ($arr[$i] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$i];
        } else if ($arr[$i] > $secondLargest && $arr[$i] != $largest) {
            $secondLargest = $arr[$i];
        }
    }

    return $secondLargest;
}
$arr = [22, 17, 42, 18, 16];
$secondLargest = findSecondLargest($arr);
echo "The second largest number is: " . $secondLargest;

//Output: The second largest number is: 22