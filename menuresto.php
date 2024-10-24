<?php

$menu = array(
    "Entrées" => array("Pain", "Légumes", "Toast"),
    "Plats" => array("Agneau", "Kebab", "Pizza"),
    "Desserts" => array("Tiramisu", "Glace")
);

echo '<pre>';
print_r($menu);
echo '</pre>';


foreach($menu as $key => $value) {
    echo "<li>$key :</li>";
    echo '<ul>';
    foreach($value as $value) {
        echo "<li> $value</li>";
    }
 echo '</ul>';
}

?>