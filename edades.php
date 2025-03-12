<html>
<head></head>
<body>
<?php
$num=rand(1,100);
echo"numero generado: $num<br>";
if($num<=10){
echo "es niño";
}elseif ($num<18){
echo"es adolecente";
}elseif ($num<=30){
echo"es joven";

}elseif ($num<=55){

echo"es adulto";
}else{
echo  " es adulto mayor";
}
