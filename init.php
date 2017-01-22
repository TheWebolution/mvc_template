<?php
function CheckUser() {
    global $Page;
    global $User;

    $sections = explode("/", $Page);
    if ($sections[0] === "admin" && !$User->logged) {
        header('Location: home');
    }
}

$Page = isset($_GET["p"]) ? $_GET["p"] : "home";

$IsUserControlActive = false;
if ($IsUserControlActive) {
    $User = new User($_SESSION["username"], $_SESSION["password"]);
    CheckUser();
}
?>
