<?php

    $test="I'm a \"variable\"!";
    $test2="Me too!";

    // concatenate
    echo $test.$test2;

    $num = 75;
    echo $num/3;

    // use variable as another variable's name
    $name = "Lani";
    $a = "name";

    echo $$a;
    echo "<br /><br />";

    /********************Array*************************/

    // Create Array
    $myArr=array("pizza", "chocolate", "coffee");
    print_r($myArr);
    echo myArr[2];

    $anotherArr[0] = "pizza";
    print_r($anotherArr);

    echo "<br /><br />";

    $thirdArr = array(
      "France" => "French",
      "USA" => "English",
      "Germany" => "German"
    );
    print_r($thirdArr);

    // append
    $anotherArr[]="salad";

    // delete element
    unset($thirdArr["Germany"]);

    // unset can be used for any variable
    unset($num);

    // foreach loop
    foreach ($myArr as $key => $value) {
      echo "Key: $key Value: $value";
    }

?>
