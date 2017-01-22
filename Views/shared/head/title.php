<?php
$Titles = [
    "home" => "Page Title"
];

function RenderTitle($Titles) {
    global $Page;

    $title = $Titles[$Page] !== null ? $Titles[$Page] : $Titles["home"];
    echo "<title>" . $title . "</title>";
}

RenderTitle($Titles);
?>
