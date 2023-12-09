<?php
function removeDuplicates($sortedList) {
    $n = count($sortedList);

    // Check for empty list or a list with only one element
    if ($n <= 1) {
        return $sortedList;
    }

    $uniqueList = array($sortedList[0]);

    for ($i = 1; $i < $n; $i++) {
        // Compare the current element with the previous one
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            $uniqueList[] = $sortedList[$i];
        }
    }

    return $uniqueList;
}

$inputList = array(1, 1, 2, 2, 3, 4, 5, 5);

$uniqueList = removeDuplicates($inputList);

// Display the unique list
echo "Input List: (" . implode(", ", $inputList) . ")\n";
echo "Output: (" . implode(", ", $uniqueList) . ")\n";
?>
