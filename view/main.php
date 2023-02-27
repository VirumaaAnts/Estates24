<?php
    ob_start();
?>
<div class="main_back">
    <img src="images/home_back.jpg" alt="">
</div>
<div class="content">
    <h2>The best place to sell real estate</h2>
    <aside>
        <div class="types">
            <div class="type">
                <p>200</p>
                <img src="images/apartment.png" alt="">
                <p class="name">Apart..</p>
            </div>
            <div class="type">
                <p>560</p>
                <img src="images/home.png" alt="">
                <p class="name">Homes</p>
            </div>
            <div class="type">
                <p>758</p>
                <img src="images/country_house.png" alt="">
                <p class="name">Summer...</p>
            </div>
        </div>
    </aside>
    <div class="ads">
        <div class="ad">
            <div class="slider" show="1" slide="1">
                
                <ul>
                    <li><img src="public/uploads/user1/home1.jpg" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>