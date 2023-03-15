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
        <div class="agent">
            <div class="picture" style="background-image: url(public/uploads/user_1/about.png);"></div>
            <div class="inf">
                <h3>Aleksei Kozlov</h3>
                <p><span>Email:</span> aleksei22891@gmail.com</p>
                <p><span>Phone:</span> +37259024698</p>
            </div>
            <div class="inf">
                <p><span>Count estates:</span>4</p>
                <a href="users?user=MiFista">See user</a>
            </div>
        </div>
        <div class="agent">
            <div class="picture" style="background-image: url(public/uploads/user_1/about.png);"></div>
            <div class="inf">
                <p><span>Name:</span> Aleksei Kozlov</p>
                <p><span>Email:</span> aleksei22891@gmail.com</p>
                <p><span>Phone:</span> +37259024698</p>
            </div>
            <div class="inf">
                <p><span>Count estates:</span>4</p>
                <a href="users?user=MiFista">See user</a>
            </div>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>