<?php
$root_dir = dirname(__DIR__);
require $root_dir . '/vendor/autoload.php';

$pd = new Parsedown;
?>
<!DOCTYPE html>
<meta charset="utf-8">
<title>Markdown parser</title>

<?= $pd->text(file_get_contents("${root_dir}/markdown.md")); ?>

