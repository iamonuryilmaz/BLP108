<!DOCTYPE html>
<html>
<body>

<?php 

    //declare(strict_types=1);
    // GLOBAL değişken lazım ki içeriye ve her yerden kullanılım.
    // $parametre = "PHP";

    /*
    //void, geri dondurmeyen fonksiyon
    function merhabaYaz($x, $v){
        echo $x.". Merhaba " .$v. " !";
    }

    for($i=1; $i<=100; $i++){
        merhabaYaz($i, "PHP");
        echo "<br>";
    }*/
    

   /* function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    
    echo addNumbers(5, "5 days");
    */
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    
    /*
    function merhabaYaz($x = "Tanımsız kullanıcı"){
        echo "Merhaba " .$x. " !";
    }
    merhabaYaz("PHP");
    */

   /* function toplamaIkiKati($sayi1= 0, $sayi2 = 0){
        echo ($sayi1 + $sayi2)*2;
    }

    function toplamaYarisiAl($sayi1= 0, $sayi2 = 0){
        echo ($sayi1 + $sayi2)/2;
    }

    toplamaIkiKati(10,10);
    toplamaYarisiAl(10,10);*/

    /*
    //geri tipi donus yoktur.
    function toplama($sayi1= 0, $sayi2 = 0){
        return $sayi1+$sayi2;
    }

    echo toplama(10.5,10.5)*2 .  " => ".toplama(10,10)/2;
    */

    /*
    function toplama(float $sayi1, float $sayi2) : int { //6
        return $sayi1 + $sayi2;
    }
    echo toplama(1.2, 5.2);*/

    //When a function argument is passed by reference, changes to the argument also 
    //change the variable that was passed in. To turn a function argument into a reference, 
    //the & operator is used:

    /*
    function add_five(&$value) { //2
        $value += 15; // 2 = 2+5 => 7
    }
    $num = 2;
    add_five($num);
    echo $num;
    */


?>

<script>
    /*
    adi = "İsim";
    function merhabaYaz(value){
        document.write("Merhaba !");
    }*/
</script>

</body>
</html>