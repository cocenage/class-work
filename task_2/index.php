<?php
$college = array(
    "студент" => array("никита","никита","никита","никита"),
    "преподаватели" => array("никита","никита","никита","никита")
);
foreach ($college as $people => $items) {
    $college[$people] = $value;
    echo "<h1>$people</h1>";
    echo "<ul>$people</ul>";
    foreach ($items as $item => $value) {
        echo "<li>$value</li>";
    }
}

