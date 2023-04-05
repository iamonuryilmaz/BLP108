<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname" value="<?php echo $_POST["fname"]; ?>" required> <input type="submit">
</form>


<?php

if($_POST){

    echo htmlspecialchars($_POST["fname"]);


}

/*
if($_GET){
    //var_dump($_POST);
    // mapping
    $status = $_GET["status"];
    
    if($status == "1"){
        echo "BAŞARILI !!";
    }else{
        echo "<h1>HATA !!!!!</h1>";
    }

}
*/

/*
if($_POST){
    //var_dump($_POST);
    // mapping
    $isim = $_POST["fname"];
    $soyisim = $_POST["lname"];

    if(!$_POST["status"] || !$isim = $_POST["fname"]){
        echo "<h1>HATA</h1>";
        die;
    }
    
//veritabanı kayıt yeri
    switch($_POST["status"]){
        case 'Student': $durum = "Öğrenci"; break;
        case 'Employee': $durum = "Çalışan"; break;
    }

    $isim_soyisim = $isim." ".$soyisim;
    echo "Merhaba! ".$isim_soyisim." ".$durum. " statüsünüzdür.";

}
*/

?>