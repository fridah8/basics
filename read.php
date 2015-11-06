<?php
$data=file_get_contents("sample.txt");
echo $data;
$file=fopen("sample.txt","r");
while(!feof($file)){//while not reached end of file
echo fgets($file);//reads a single file
echo "<br>";
}
fclose($file);
?>