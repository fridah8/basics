<?php
$file=fopen("sample.txt","a+");
$data="\nThis is my data";
fputs($file,$data);
fclose($file);
echo "Check in your basics folder for the file";



?>