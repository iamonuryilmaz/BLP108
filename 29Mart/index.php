<?php

include 'conf/conf.php';

// readfile fonksiyonu
// echo readfile('web.txt');

   $dosyam = fopen("web.txt", "r") or 
        die("Dosya açılamadı, dosyanın var olduğundan emin olunuz ...");
   //echo fread($dosyam, filesize("web.txt"));

  // echo fgets($dosyam);
    // feof -> dosya sonunu verir. 

  // var_dump(feof($dosyam));
    // $i = 1;
   /* while(!feof($dosyam)){
        //echo "<h2>".fgets($dosyam)."</h2";
        $char = fgetc($dosyam);

        if($char == 'a'){
            echo "<h1>".$char."</h1>";
        }else{
            echo $char;
        }

        //echo fgetc($dosyam) == " " ? '': fgetc($dosyam);
        //echo "<br>";
    }
    */

    $myfile = fopen("web1.txt", "w") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);

    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);

   
    $myfile = fopen("web1.txt", "w") or die("Unable to open file!");
    $txt = "Mickey Mouse\n";
    fwrite($myfile, $txt);
    $txt = "Minnie Mouse\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    $myfile = fopen("web1.txt", "a") or die("Unable to open file!");
    $txt = "Donald Duck\n";
    fwrite($myfile, $txt);
    $txt = "Goofy Goof\n";
    fwrite($myfile, $txt);
    fclose($myfile);

   
   $dosyam = fopen("web1.txt", "r") or 
        die("Dosya açılamadı, dosyanın var olduğundan emin olunuz ...");
   echo fread($dosyam, filesize("web.txt"));
   fclose($dosyam);
?>