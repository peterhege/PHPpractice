<?php
    $file = $segments[1];
    $code = file_get_contents(TEMPLATES_PATH.'/codes/'.$file.'.php');
    $test_code = file_get_contents(TEMPLATES_PATH.'/examples/'.$file.'.txt');
    if (file_exists(TEMPLATES_PATH.'/codes/' . $file . '.php')) {
?>

    <div class="container">
        <h1><?= $file ?></h1>
        <div class="code-container"><?=highlight_string($code, true)?></div>
        <div class="col-sm-6">
            <h1>Test</h1>
            <form class="my-form">
                <div class="form-group">
                <textarea name="code" class="form-control" id="codeTextarea" rows="3" spellcheck="false"><?=$test_code?></textarea>
                </div>
                <input id="code_url" type="hidden" value="<?=$file?>">
                <button type="button" id="submitTextarea" class="btn btn-primary">Test</button>
            </form>
        </div>
        <div id="codeContainer" class="col-sm-6">
            <h1>Output</h1>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#submitTextarea').click(function() {
                info = $('#codeTextarea').val();
                test_url = '/phppractice/resources/testphp.php';
                code_url = $('#code_url').val();
                $.ajax({
                    type: "POST",
                    url: test_url,
                    data: ({code: info, url: code_url}),
                    success: function(result) {
                        $("#codeContainer").html(result);
                    }
                });
            });
        });
    </script>
<?php
}
else
    require_once(TEMPLATES_PATH . "/error.php");
?>