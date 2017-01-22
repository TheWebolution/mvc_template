<?php
require "Models/classes.php";
require "Views/views.php";
$page = isset($_GET["p"]) ? $_GET["p"] : "home";
?>

<html>
<head>
<?php
RenderView("scripts");
RenderView("styles");
?>
</head>
</html>

<body>
    <main class="<?php echo $page; ?>">
        <?php RenderView($page); ?>
    </main>
</body>
