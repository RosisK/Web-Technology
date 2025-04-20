<?php 
function calculateAverage($numbers) {     
    if (!is_array($numbers) || empty($numbers)) {         
        return null;
    } 
    $sum = array_sum($numbers);     
    $count = count($numbers);     
    return $sum / $count; 
}
$test1 = [10, 20, 30, 40, 50]; 
$test2 = [-5, 0, 5]; 
$test3 = [1.5, 2.5, 3.5]; 
$test4 = [100]; 
$test5 = []; 
echo "Average of test1 [10, 20, 30, 40, 50]: " . calculateAverage($test1) . "<br>"; 
echo "Average of test2 [-5, 0, 5]: " . calculateAverage($test2) . "<br>"; 
echo "Average of test3 [1.5, 2.5, 3.5]: " . calculateAverage($test3) . "<br>"; 
echo "Average of test4 [100]: " . calculateAverage($test4) . "<br>"; 
echo "Average of test5 []: " . (calculateAverage($test5) ?? 'Invalid input') . "<br>"; 
echo "Rosis Kharel<br>22<br>Bsc.CSIT";
?> 
