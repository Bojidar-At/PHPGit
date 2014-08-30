<?php

date_default_timezone_set('UTC');
const DATE_FORMAT = "d-m-Y";

    $dateOne = $_GET['dateOne'];
    $dateTwo = $_GET['dateTwo'];
    $holidaysTeht = $_GET['holidays'];
    $holidaysSplit = preg_split('/\s+/', $holidaysTeht, -1, PREG_SPLIT_NO_EMPTY);
    
    $holydays = [];
    foreach ($holidaysSplit as $holidaysText) {
        $holyday = parseDateTime($holidaysText);
        $holydays[] = $holyday;
    }
        
    $starDate = parseDateTime($dateOne);
    $endDate = parseDateTime($dateTwo);
            
    $workingDays = [];
    $date = $starDate;
    while ($date <= $endDate) {
        if(isWorkingDays($date, $holydays)){
            $dataCopy = clone $date;
            array_push($workingDays, $dataCopy);
        }        
        $date = $date->add(DateInterval::createFromDateString('1 day'));       
    }
    
    if(count($workingDays)==0){
        echo "<h2>No workdays</h2>";
    } else {
        echo "<ol>";
        foreach ($workingDays as $workDay) {
            echo "<li>";
            echo $workDay->format("d-m-Y");
            echo "</li>";
        }
        echo "</ol>";
    }
    
    function isWorkingDays(DateTime $date, array $holydays){
        $tempDate = $date->format("d-m-Y");
        $dayOfWeek = date('w', strtotime($tempDate));            
            
        if ($dayOfWeek == 0 || $dayOfWeek == 6){
                return false;
            }
        if(in_array($date, $holydays)){
            return FALSE;
        }
        return TRUE;
    }
    
    function parseDateTime($dateText){
        $dataObj = DateTime::createFromFormat(DATE_FORMAT, $dateText);
        $dataObj->setTime(0,0);
        return $dataObj;
    }
?>