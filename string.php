<?php 

/*
*Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:
1. Count the number of vowels (a, e, i, o, u) in each string.
2. Reverse each string.
3. Print the original string and the modified strings along with their vowel counts.
You must use this array of strings:
$strings = ["Hello", "World", "PHP", "Programming"];
Your Output must look like this:
Original String: Hello, Vowel Count: 2, Reversed String: olleH
Original String: World, Vowel Count: 1, Reversed String: dlroW
Original String: PHP, Vowel Count: 0, Reversed String: PHP
Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP
*
*/

// input array
$input_array = ["Hello", "World", "PHP", "Programming"];

for($i=0;$i<count($input_array);$i++){
    $count = 0;
    $present_word_string = $input_array[$i];
    // string into array
    $present_word_array =  str_split($present_word_string);

    $present_word_string_rev = strrev($present_word_string);

    foreach($present_word_array as $c){
        $lower_case_c = strtolower($c);

        if($lower_case_c == 'a' || $lower_case_c == 'e' || $lower_case_c == 'i' || $lower_case_c == 'o' || $lower_case_c == 'u'){
            $count++;
        }
        
    }

    // showing out
    printf("Original String: %s, Vowel Count: %s, Reversed String: %s \n",$present_word_string,$count,$present_word_string_rev);

}
?>