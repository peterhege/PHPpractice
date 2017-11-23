<?php
$file = $segments[1];
$code = file_get_contents(TEMPLATES_PATH.'/codes/'.$file.'.php');
$test_code = file_get_contents(TEMPLATES_PATH.'/examples/'.$file.'.txt');
include 'codes/'.$file.'.php';
?>

<div class="container">
    <h1><?=$file?></h1>
    <div class="code-container">
        <?=highlight_string($code,true);?>
    </div>


    <h1>Test</h1>
    <form action="" method="post" class="my-form">
        <div class="form-group">
            <textarea name="code" class="form-control" id="exampleTextarea" rows="3" spellcheck="false"><?php
                if(isset($_POST['code']))
                    echo $_POST['code'];
                else
                    echo $test_code;
            ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Test</button>
    </form>
    <?php if(isset($_POST['code'])){ ?>
    <h1>Output</h1>
    <div class="code-container">
        <?=eval($_POST['code']);?>
    </div>
    <?php } ?>
</div>