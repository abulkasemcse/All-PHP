<?php 
 $colors = ["10.5","green",20,"yellow"];
//  $colors[0] = "red";
//  $colors[1] = "Yellow";
//  $colors[2] = "Blue";
//  $colors[3] = "Green";

//  echo $colors[0]."<br>";
//  echo $colors[1]."<br>";
//  echo $colors[2]."<br>";
//  echo $colors[3]."<br>";
// echo "<pre>";
// print_r($colors);
// "</pre>";
echo "<ul>";
for($i = 0; $i<4; $i++){
    echo "<li></li> $colors[$i] </li>";
}
echo "</ul>";

?>