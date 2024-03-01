<?php 

$fruits = ["Banana" , "Avocado" , "Melon"];
echo $fruits[1];

echo "<ol>";
    foreach ($fruits as $fruit){
        echo "<li>" .  $fruit . "</li>";
    }
echo "</ol>"

?>