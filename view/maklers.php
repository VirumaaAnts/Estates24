<?php
    ob_start();
?>
<div class="content">
    <aside>
        <form action="">
            <div class="btns">
                <div>
                    <img src="../images/makler.png" alt="">
                    <p>Maklers</p>
                </div>
                <div>
                    <img src="../images/companies.png" alt="">
                    <p>Real estate agencies</p>
                </div>
                <div class="fields">
                    
                </div>
            </div>
        </form>
    </aside>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>