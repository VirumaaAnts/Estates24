<?php
    ob_start();
?>
<div class="content">
    <aside class="makler">
        <form action="">
            <div class="btns">
                <div class="selected">
                    <img src="../images/makler.png" alt="">
                    <p>Maklers</p>
                </div>
                <div>
                    <img src="../images/companies.png" alt="">
                    <p>Real estate agencies</p>
                </div>
            </div>
            <div class="fields">
                    
            </div>
        </form>
    </aside>
</div>
<script src="../public/js/maklelPage.js"></script>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>