<?PHP

// Functions in PHP

echo "<h1>Functions in PHP</h1>";
$maxMarks = 600;

function processMarks($marksArr)
{
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function processAvg($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$student_1 = [34, 56, 34, 69, 24, 96];
$student_2 = [98, 97, 96, 95, 94, 99];

$sumMarks_student_1 = processMarks($student_1);
$avgMarks_student_1 = processAvg($student_1);
$sumMarks_student_2 = processMarks($student_2);
$avgMarks_student_2 = processAvg($student_2);

echo "Sum of marks obtain by student_1 is $sumMarks_student_1 out of $maxMarks<br>";
echo "Average of marks obtain by student_1 is $avgMarks_student_1 out of $maxMarks<br>";
echo "<br>";
echo "Sum of marks obtain by student_2 is $sumMarks_student_2 out of $maxMarks<br>";
echo "Average of marks obtain by student_2 is $avgMarks_student_2 out of $maxMarks<br>";
