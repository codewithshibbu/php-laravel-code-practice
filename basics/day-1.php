<?php

$arr = [10,20,30,40,50];

for($i=0; $i<count($arr);$i++){
    echo $arr[$i]."\n";
}

// Practice 3: Find Largest Number

$arr = [5, 8, 2, 10, 3];
$max=$arr[0];
for($i=1;$i<count($arr);$i++){
    if($arr[$i]>$max){
        $max=$arr[$i];
    }
}
echo "Largest: " . $max;

// ----------------Q1. Reverse an array without using built in function
$arr= [1,2,2,3,4,4,5];
$reversedArr = [];
for($i=count($arr)-1;$i>=0;$i--){
   $reversedArr[]=$arr[$i];
}
echo "Reversed Array: ";
print_r($reversedArr);

//-----------------Q2. Count Even Numbers
$arr= [1,2,3,4,5,6,7,8,9,10];
$evenCount=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2==0){
        $evenCount+=1;
    }
}
echo "Even Count: " . $evenCount;

// Q3.---------- Remove Duplicates (IMPORTANT)

$arr= [1,2,2,3,4,4,5];
$uniqueArr = [];