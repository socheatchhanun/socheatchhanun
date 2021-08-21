
<?php


$phones = array(
    "iPhone" => 1450,
    "SamSung" => 980,
    "Nokai" => 330,
    "Oppo" => 850
);

$sort = sort($phones);

echo "<pre>" . print_r($sort, 1) . "</pre>";

