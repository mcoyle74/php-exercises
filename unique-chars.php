<?php

// Create a function taking in two strings with only letters a to z and return
// a new string, as long as possible, containing only one of each letter.

function longest($a, $b) {
    $stringsArray = array_merge(str_split($a, 1), str_split($b, 1));
    $uniqueArray = array_unique($stringsArray);
    sort($uniqueArray);
    return implode($uniqueArray);
}

echo longest('smtdmehtqlzmxknvfhopedeir', 'mgyggugggbxdfhwjkcqqooap'), PHP_EOL; 
echo longest('abbcccddddeeeeeffffff', 'bcdaaafggccbabbdadddfc'), PHP_EOL; 
echo longest('hdxdulkvjjbjvvkff', 'rrxvfkhhxujkkjf'), PHP_EOL; 
echo longest('qrstuvwxyz', 'wzxywwyqqqx'), PHP_EOL; 
echo longest('mlmlmoolppomm', 'lmnop'), PHP_EOL;
