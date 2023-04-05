<?php

/*
    //GLOBALS 
    $x = 75;
    $y = 25;

    function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    addition();
    echo $z;
*/

/*
    //SERVERS


*/


echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}


?>