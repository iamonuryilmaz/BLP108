<?php

if($_POST){
    echo htmlspecialchars($_POST["name"]);
    $_SESSION["success"] = true;

    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);


    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    }
    fclose($myfile);


   // header('Location: t.html');
}else{
    print_r(1);
}


?>