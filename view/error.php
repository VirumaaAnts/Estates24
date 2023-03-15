<?php
    ob_start();
?>

<div class="content">
    <div class="error_page">
        <div>
            <img src="images/error_page.png">
        </div>
        <div>
            <p>Awwww... Dont' Cry.</p>
            <p>It's just a 404 Error!</p>
            <p>What you're looking for may have been misplaced in Long Term Memory.</p>
        </div>
    </div>
</div>

<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>