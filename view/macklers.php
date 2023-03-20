<?php
    ob_start();
?>
<div class="content">
    <div class="back">
        <img src="images/macklers_back.jpg" alt="">
    </div>
    <h2 class="topic">A real estate agent can help you fulfill your dreams!</h2>
    <aside class="mackler">
        <form action="">
            <div class="fields">
                    
            </div>
            <input type="text" name="query" id="query" class="form-control" placeholder="Search query">
            <button class="btn btn-primary">Find</button>
        </form>
    </aside>
    <div class="macklers">
        <?php 
        if(is_iterable($macklers)) {
            foreach ($macklers as $mackler) {
                echo "
                    <div class='agent'>
                        <div class='picture' style='background-image: url(public/uploads/user_$mackler[id]/$mackler[photo]);'></div>
                        <div class='inf'>
                            <h3>$mackler[name] $mackler[surname]</h3>
                            <p><span>Email:</span> $mackler[email]</p>
                            <p><span>Phone:</span> $mackler[phone]</p>
                        </div>
                        <div class='inf'>
                            <p><span>Count estates:</span> $mackler[adsCount]</p>
                            <a href='user?id=$mackler[id]'>See user</a>
                        </div>
                    </div>
                ";
            }
        }
        ?>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>