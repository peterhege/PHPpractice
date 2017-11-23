<?php
$code = file_get_contents(TEMPLATES_PATH.'/'.$segments[1].'.php');
?>

<div class="container">
    <h1><?=$segments[1]?></h1>
    <div class="code-container">
        <?=highlight_string($code,true);?>
    </div>
</div>

<form action="" method="get">
    <input name="hello" type="text">
    <button>Submit</button>
</form>