<?php
$marks=array(89,45,87,18,99,56,73,78,89,100,33,75,65,55,45,67,45,90,78,65);
$total=sizeof($marks);//no. of elements in array
echo "<br>";
/*var_dump($marks);
echo $marks[2];
var_dump($marks);
for ($index=0;$index<sizeof($marks);$index++){
echo $marks[$index];
}*/
$marks[0]=85;//change element to 85
$marks[]=47;//add element
//while loop
$num=0;
while($num<$total){
echo $marks[$num];
echo "<br>";
$num++;
}
//do while loop
$num1=0;
do{
echo $marks[$num1];
$num1++;
}while($num1<sizeof($marks))

?>