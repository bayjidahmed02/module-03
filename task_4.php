<?php
$studentGrades = [
    $student_1 = ['Math' => 80, 'English' => 95, 'Science' => 60],
    $student_2 = ['Math' => 95, 'English' => 70, 'Science' => 80],
    $student_3 = ['Math' => 70, 'English' => 65, 'Science' => 60],
];
function calculateGrade($mark)
{
    if ($mark >= 80 && $mark <= 100) {
        return 'A+';
    } elseif ($mark >= 70 && $mark <= 79) {
        return 'A';
    } elseif ($mark >= 60 && $mark <= 69) {
        return 'A-';
    } elseif ($mark >= 50 && $mark <= 59) {
        return 'B';
    } elseif ($mark >= 40 && $mark <= 49) {
        return 'c';
    } elseif ($mark >= 33 && $mark <= 39) {
        return 'D';
    } else {
        return 'Faild';
    }
}
function grades($n)
{
    foreach ($n as $subjects => $numbers) {
        $totalNumber = array_sum($numbers);
        $totalSubject = count($numbers);
        $avg = $totalNumber / $totalSubject;
        $grade = calculateGrade($avg);
        echo "Student " . ($subjects + 1) . " Avg Grade is: " . $grade . "<br>";
    }
}

grades($studentGrades);
