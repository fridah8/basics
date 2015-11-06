<?php
$ages=array();
for($num=0;$num<200;$num++){
$ages[$num]=rand(1,120);
echo $ages[$num];
echo " ";
}
echo "<br>";
echo "<br>";
$oddages=array();
for($num=0;$num<sizeof($ages);$num++){
if($ages[$num]%2!=0){
$oddages[]=$ages[$num];
echo $ages[$num];
echo " ";
}
}
echo "<br>";
echo sizeof($oddages);
$file=fopen("ages.txt","w");
for($num=0;$num<sizeof($oddages);$num++){
$data="\n$oddages[$num]";
fputs($file,$data);
}
fclose($file);
echo "Check in your basics folder for the file";
?>