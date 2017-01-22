<?php
require "Models/classes.php";
require "Views/views.php";
$Page = isset($_GET["p"]) ? $_GET["p"] : "home";
?>

<html>

<?php
RenderView("shared/head");
?>

<body>
    <main class="<?php echo $Page; ?>">
        <?php RenderView($Page); ?>
    </main>
</body>
