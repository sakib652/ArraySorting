<?php

$numbers = [3,1,6,5,7];
$taget = 9;

function searchInsertPosition($numbers, $taget){

    sort($numbers);

    $low = 0;
    $high = count($numbers) -1;

    while ($low <= $high){
        $mid = (int)(($low + $high) / 2);

        if($numbers[$mid] == $taget){
            return $mid;
        }elseif($numbers[$mid]<$taget){
            $low = $mid + 1;
        }else{
            $high = $mid -1;
        }
    }

    return $low;
}

echo searchInsertPosition($numbers,$taget);