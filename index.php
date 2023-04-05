<!DOCTYPE html>
<html>
<body>

<h1>İlk PHP Projemiz</h1>

<?php

//karakter sayısını döndürür
//echo strlen("Hello world!"); // outputs 12

//cümledeki kelime sayısını döndürür
//echo str_word_count("Hello world!"); // outputs 2

//metni tersten yazdırır
//echo strrev("Hello world!"); // outputs 

//bir metin içerisinde bir yazı arar.
//echo strpos("Hello world!", "world"); // outputs 6

/*$islenenDers = "BLP108r";

echo $islenenDers."<br>";

echo str_replace("r","",$islenenDers);
echo "BLP108";*/

/*
$x = 100;

echo $x; 

var_dump( is_int($x) );

if(is_int($x)){
    echo "Bu bir sayıdır, matematiksel işleme hazırdır.";
}else{
    echo "İŞLEM YAPILAMAZ !";
}
*/


$str = "isimY3456!*";
$sifreli = md5(md5(md5($str))."JKDBJH");


echo "Acik hali: $str<br>";
echo "HASH: $sifreli<br>";

echo "<br> ------- LOGIN -------<br>";
$girilenSifre = "isimY3456!*";

if(md5($girilenSifre) == $sifreli){
    echo "<br> ------- OTURUM AÇILDI ! -------<br>";

}else{
    echo "<br> ------- YANLIŞ ! -------<br>";
}

?>



</body>
</html>