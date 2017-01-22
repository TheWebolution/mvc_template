<?php
$Titles = [
    "home" => "Page Title"
];

function RenderTitle($Titles) {
    global $Page;
    echo "<title>" . $Titles[$Page] . "</title>";
}

RenderTitle($Titles);
?>
