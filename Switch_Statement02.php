<?php 

$age=18;
switch(true){
case($age>=15 && $age<18):
    echo "You Are NOt Eligible for Election Vote";
break;
case($age>=18 && $age<=68):
    echo "You Are Eligible for Election Vote";
break;
default:
    echo "Please Enter the Valid Value";
break;
}

?>