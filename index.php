<?php

function AreaOfTriangle($baseVal,$heightVal)
{
    $cal =$baseVal * $heightVal;
    $areaVal = $cal / 2;
    echo "Area of Triangle value is: " ,$areaVal, "cm²"."\n";
}
AreaOfTriangle(20,20);