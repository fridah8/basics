<?php
calc_area_circle(14);
calc_area_circle(1.4);
calc_area_circle(22);
calc_area_circle(0.7);
function calc_area_circle($radius){
echo pi()*$radius*$radius;
echo "<br>";
}
function calc_vol_cylinder($r,$h)
{
$vol=22/7*$r*$r*$h;
return $vol;
}
$result=calc_vol_cylinder(14,20);
echo "<br>$result";
$result2=calc_vol_cylinder(2.5,29);
echo "<br>";
echo round($result2);
//calculate area of an equlateral triangle
//surface area of sphere
//age in years
calc_area_triangle(4);
calc_area_sphere(7);
function calc_area_triangle($a)
{
$area=(sqrt(3)/4)*$a*$a;
echo "<br>The area of an equilateral triangle is $area";
}
function calc_area_sphere($r)
{
$sphere=4*22/7*$r*$r;
echo "<br>The surface area of a sphere is $sphere";
}
function calc_age(){
$dob="1990-08-15";
$today=date("y-m-d");
$time1=strtotime($dob);
$time2=strtotime($today);
$num_seconds=$time2-$time1;
$day=24*60*60;
$month=$day*30;
$year=$month*12;
$rem_after_years=$num_seconds%$year;
$years=($num_seconds-$rem_after_years)/$year;
return $years;
}
$age=calc_age();
echo "<br>My age is $age";
?>