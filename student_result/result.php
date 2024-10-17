<?php

function calculateResult($bangle, $english, $math, $computerScience, $physics){
    
    $marks = [$bangle, $english, $math, $computerScience, $physics];

    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Enter a valid mark between 0 and 100";
            return;
        }
        else if ($mark < 33) {
            echo "Result : Failed";
            return;
        }
    }
    $totalMarks = $bangle+$english+ $math+ $computerScience+ $physics;
    $averageMarks = $totalMarks / 5;

    echo "Total Marks: " . $totalMarks . "<br>"."<br>";
    echo "Average Marks: " . $averageMarks . "<br><br>";


// switch case using
    switch (true) {
        case ($averageMarks >= 80):
            echo "Grade: A+";
            break;
        case ($averageMarks >= 70):
            echo "Grade: A";
            break;
        case ($averageMarks >= 60):
            echo "Grade: B+";
            break;
        case ($averageMarks >= 50):
            echo "Grade: B";
            break;
        case ($averageMarks >= 40):
            echo "Grade: C";
            break;
        case ($averageMarks >= 33):
            echo "Grade: D";
            break;
        default:
            echo "Result: Failed";
            break;
    }
}
calculateResult(33, 50, 40, 60, 50);