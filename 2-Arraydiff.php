<?php
function arrayDiff($a, $b)
{
     return array_values(array_diff($a, $b));
}

// Example usage:
$result1 = arrayDiff([1, 2], [1]);           // Result: [2]
$result2 = arrayDiff([1, 2, 2, 2, 3], [2]);  // Result: [1, 3]

// Print the results
print_r($result1);
print_r($result2);
