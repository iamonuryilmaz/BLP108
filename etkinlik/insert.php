<?php

if(control()){

    $isim = $_POST["fullname"];
    $vize = $_POST["vize"];
    $final = $_POST["final"];
    $ort = ($vize*0.4) + ($final*0.6);

    // var_dump($isim, $vize, $final, $ort);

    if($ort>55){
        header("Location: index.php?status=1");
        dosya_yaz($isim, $vize, $final, $ort, "GEÇTİ");
    }else{
        header("Location: index.php?status=0");
        dosya_yaz($isim, $vize, $final, $ort, "KALDI");
    }
}else{
    header("Location: index.php?status=3");
}

function control(){
    if($_POST["final"] && $_POST["final"] && $_POST["final"]) return true;
    
    return false;
}

function dosya_yaz($a, $v, $f, $o, $s){
    $myfile = fopen("sonuclar.txt", "a+") or die("Dosya bozuk");
    $txt = $a."|".$v."|".$f."|".$o."|".$s."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}

?>