<?php
    ob_start();
?>
<div class="content">
    <aside class="makler">
        <form action="">
            <div class="btns">
                <div class="selected">
                    <input type="radio" name="type" id="type" value="makler" class="radio" checked>
                    <img src="../images/makler.png" alt="">
                    <p>Maklers</p>
                </div>
                <div>
                    <input type="radio" name="type" id="type" class="radio" value="company">
                    <img src="../images/companies.png" alt="">
                    <p>Real estate agencies</p>
                </div>
            </div>
            <div class="fields">
                    
            </div>
            <input type="text" name="query" id="query" placeholder="Search query">
            <button>Find</button>
        </form>
    </aside>
</div>
<script src="../public/js/maklelPage.js"></script>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>