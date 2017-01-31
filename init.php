<?php
require "conf.php";

function CheckUser() {
    global $Page;
    global $User;

    $sections = explode("/", $Page);
    if ($sections[0] === "admin" && !$User->logged) {
        header('Location: home');
    }
}

$Page = isset($_GET["p"]) ? $_GET["p"] : "home";
$UrlSections = explode("/", $Page);
$PageName = $UrlSections[0];
$Root = "";

for ($i = 0; $i < count($UrlSections); $i++) {
    $Root .= "../";
}

if ($IsUserControlActive) {
    $User = new User($_SESSION["username"], $_SESSION["password"]);
    CheckUser();
}
?>
