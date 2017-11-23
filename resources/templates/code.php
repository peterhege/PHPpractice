<?php
$homepage = file_get_contents(TEMPLATES_PATH.'/home.php');
echo "<div>".nl2br(htmlentities($homepage))."</div>";
?>