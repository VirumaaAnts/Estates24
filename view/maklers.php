<?php
    ob_start();
?>
<div class="content">
    <aside class="makler">
        <form action="">
            <div class="btns">
                <div class="selected">
                    <input type="radio" name="type" id="type" value="makler" class="radio form-control" checked>
                    <img src="../images/makler.png" alt="">
                    <p>Maklers</p>
                </div>
                <div>
                    <input type="radio" name="type" id="type" class="radio form-control" value="company">
                    <img src="../images/companies.png" alt="">
                    <p>Real estate agencies</p>
                </div>
            </div>
            <div class="fields">
                    
            </div>
            <input type="text" name="query" id="query" class="form-control" placeholder="Search query">
            <button class="btn btn-primary">Find</button>
        </form>
    </aside>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>