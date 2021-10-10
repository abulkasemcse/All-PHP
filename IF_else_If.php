<?php 
$per=90;

if($per >=80 && $per <=100){
    echo "Your Result is A+";
}elseif($per >=70 && $per <80){
    echo "Your Result is 1st Division";
}elseif($per >=60 && $per <70){
    echo "Your result is A";
}elseif($per >=50 && $per <60){
    echo "Your result is B";
}elseif($per >=40 && $per <50){
    echo "Your Result is C";
}elseif($per >=33 && $per <40){
    echo "Your Result is D";
}elseif($per<33){
    echo "Sorry !! You Are Fail";
}else{
    echo "Please!! Enter Your Valid Percentage";
}

?>