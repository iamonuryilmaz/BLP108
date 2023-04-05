<?php
/*
In PHP, the array() function is used to create an array:

array(); = []

*/
//$arabalar = array("Volvo", "BMW", "Toyota");
// index yapılı diziler
    /*
    $arabalar = ["Volvo", "BMW", "Toyota"];
    echo "I like " . $arabalar[0] . ", " . $arabalar[1] . " and " . $arabalar[2] . ".";
    */

    //isimlendirilmiş diziler

    $yaslar = [ //bu bilgiler daha sonra db den gelecek
        'Ahmet' => 35,
        'Mehmet' => 20,
        'Umut' => 19,
        'Cansu' => 19
    ];

    var_dump($yaslar);
   // print_r($yaslar);
   //  echo $yaslar['Ahmet'];
    /*
   foreach($yaslar as $key=>$yas){
    echo $key." ". $yas;
   }*/

   /*
   $arabalar = ["Volvo", "BMW", "Saab", "Land Rover"];
   $stoklar = [30, 10,5,15];
   $satildi = [20, 9,1,0];

   for($i=0; $i<count($arabalar); $i++){
        echo "MARKA: ". $arabalar[$i]. " | STOK GİRİŞ: ".$stoklar[$i]." | SATILAN ".$satildi[$i]." | KALAN: ".($stoklar[$i]-$satildi[$i]). "<br>";
   }
   */

   /*
   $arabalar = [
        ['Volvo', 30, 20],
        array("Saab",5,2),
        ['BMW', 20, 10],
        ['Land Rover', 50, 5],
   ];

   for ($i = 0; $i < 4; $i++) {
    echo "<p><b>Row number $i</b></p>";
    echo "<ul>";
    for ($j = 0; $j < 3; $j++) {
      echo "<li>".$arabalar[$i][$j]."</li>";
    }
    echo "</ul>";
  }

*/
   
?>