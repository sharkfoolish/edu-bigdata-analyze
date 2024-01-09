<?php

include 'autoload.php';

use App\Models\Exam1;
use App\Models\Exam2;
use App\Models\Exam3;
use App\Models\Exam4;

function printTitle($examNumber, $questionNumber) {
    echo "<br><br>第" . $examNumber . "-" . $questionNumber . "題<br>";
}

// 1-1
printTitle(1, 1);
print_r(Exam1::question1());

// 1-2
printTitle(1, 2);
print_r(Exam1::question2());

// 2-1
printTitle(2, 1);
print_r(Exam2::question1());

// 2-2
printTitle(2, 2);
print_r(Exam2::question1());

// 3-1
printTitle(3, 1);
print_r(Exam3::question1());

// 3-2
printTitle(3, 2);
print_r(Exam3::question1());

// 4-1
printTitle(4, 1);
print_r(Exam4::question1());

// 4-2
printTitle(4, 2);
print_r(Exam4::question2());

// 4-3
printTitle(4, 3);
print_r(Exam4::question3());

// 4-4
printTitle(4, 4);
print_r(Exam4::question4());
