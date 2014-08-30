<?php
date_default_timezone_set('UTC');
const DATE_FORMAT = "d-m-Y";

$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];

$parseDateOne = parseDateTime($dateOne);
$parseDateTwo = parseDateTime($dateTwo);

$starDate = min($parseDateOne, $parseDateTwo);
$endDate = max($parseDateOne, $parseDateTwo);


$workingDays = [];
$date = $starDate;
while ($date <= $endDate) {
    if(isWorkingDays($date)){
        $dataCopy = clone $date;
        array_push($workingDays, $dataCopy);
    }        
    $date = $date->add(DateInterval::createFromDateString('1 day'));       
}

if(count($workingDays)==0){
        echo "<h2>No Thursdays</h2>";
    } else {
        echo "<ol>";
        foreach ($workingDays as $workDay) {
            echo "<li>";
            echo $workDay->format("d-m-Y");
            echo "</li>";
        }
        echo "</ol>";
    }

function parseDateTime($dateText){
        $dataObj = DateTime::createFromFormat(DATE_FORMAT, $dateText);        
        $dataObj -> setTime(0,0);
        return $dataObj;
    }

function isWorkingDays(DateTime $date){
        $tempDate = $date->format(DATE_FORMAT);
        $dayOfWeek = date('w', strtotime($tempDate));            
            
        if ($dayOfWeek == 4){
                return true;
            }
        
        return false;
    }

?>