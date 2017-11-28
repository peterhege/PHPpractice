<h1>Output</h1>
<div class="code-container">
    <?php
        include 'templates/codes/'.$_POST['url'].'.php';
        eval($_POST["code"]);
    ?>
</div>