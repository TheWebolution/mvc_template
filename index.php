<?php
require "init.php";
require "Models/classes.php";
require "Views/views.php";
?>

<html>

<?php RenderView("shared/head"); ?>

<body class="<?php echo $Page; ?>">
    <?php RenderView($Page); ?>
</body>
