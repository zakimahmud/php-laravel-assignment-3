<?php
function calculateAndPrintAverages($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = 0;
        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }
        $average = $total / count($grades);
        echo "Average grade for $student: $average\n";
    }
}
$studentGrades = array(
    'Student1' => array('Math' => 83, 'English' => 72, 'Science' => 84),
    'Student2' => array('Math' => 87, 'English' => 90, 'Science' => 76),
    'Student3' => array('Math' => 65, 'English' => 85, 'Science' => 70)
);

// Call the function to calculate and print average grades
calculateAndPrintAverages($studentGrades);
?>
