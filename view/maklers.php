<?php
    ob_start();
?>
<div class="content">
    <aside class="makler">
        <form action="">
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