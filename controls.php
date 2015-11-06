<?php
//controls
$weight=56;
$height=6.9;
$bmi=$weight/($height*$height);
if($bmi<15){
echo "Very severely underweight";
}
else if($bmi>=15.0 && $bmi<16.0)
{
echo "Severely underweight";
}
else if($bmi>=16.0 && $bmi<18.5)
{
echo "Underweight";
}
else if($bmi>=18.5 && $bmi<25)
{
echo "Normal(healthy weight)";
}
else if($bmi>=25 && $bmi<30)
{
echo "Overweight";
}
else if($bmi>=30 && $bmi<35)
{
echo "Obese Class I (Moderately obese)";
}
else if($bmi>=35 && $bmi<40)
{
echo "Obese Class II (Severely obese)";
}
else
{
echo "Obese Class III (Very severely obese)";
}
?>