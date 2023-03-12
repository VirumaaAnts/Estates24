<?php
    ob_start();
?>
<div class="main_back">
    <img src="images/home_back.jpg" alt="">
</div>
<div class="content">
    <h2>The best place to sell real estate</h2>
    <?php 
        require 'templates/aside.php';
    ?>
    <div class="estates">
        <div class="ads">
            <h1>Last added estates</h1>
            <div class="ad" page="/ad?user=1&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_1/ad1/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/4.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>Summer house</h2>
                    <p>---, Pärne</p>
                    <p>Number of rooms: 8</p>
                    <p>Area: 250 m²</p>
                    <h3>1 560 700 €</h3>
                </div>
            </div>
            <div class="ad" page="/ad?user=2&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_2/ad1/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/5.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/6.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/6.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>ROCCA TOWERS II-III</h2>
                    <p>Haabersti linnaosa, Tallinn</p>
                    <p>Number of rooms: 2 - 4</p>
                    <p>Area: 21 - 127 m²</p>
                    <h3>1 493 - 469 900 €</h3>
                </div>
            </div>
            <div class="ad" page="/ad?user=1&ad=2">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_2/ad2/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/5.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/6.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/6.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>Aia tn 17</h2>
                    <p>Narva-Jõesuu linn , Ida-Viru maakond</p>
                    <p>Floor: 4</p>
                    <p>Area: 38861.00 m²</p>
                    <h3>12 000 000€</h3>
                </div>
            </div>
            <a href="estates">All estates&#8594;</a>
        </div>
        <div class="ads">
            <h1>Special offers</h1>
            <div class="ad" page="/ad?user=1&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_1/ad1/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_1/ad1/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad1/4.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>Summer house</h2>
                    <p>---, Pärne</p>
                    <p>Number of rooms: 8</p>
                    <p>Area: 250 m²</p>
                    <h3>1 560 700 €</h3>
                </div>
            </div>
            <div class="ad" page="/ad?user=2&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_2/ad1/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/5.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad1/6.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_2/ad1/6.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>ROCCA TOWERS II-III</h2>
                    <p>Haabersti linnaosa, Tallinn</p>
                    <p>Number of rooms: 2 - 4</p>
                    <p>Area: 21 - 127 m²</p>
                    <h3>1 493 - 469 900 €</h3>
                </div>
            </div>
            <div class="ad" page="/ad?user=1&ad=2">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user_2/ad2/1.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/2.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/3.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/4.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/5.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user_2/ad2/6.jpg" data-lightbox="user_1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user_1/ad2/6.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>Aia tn 17</h2>
                    <p>Narva-Jõesuu linn , Ida-Viru maakond</p>
                    <p>Floor: 4</p>
                    <p>Area: 38861.00 m²</p>
                    <h3>12 000 000€</h3>
                </div>
            </div>
            <a href="offers">All offers&#8594;</a>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>