<?php
    ob_start();
?>
<div class="back">
    <img src="images/estates_back.jpg" alt="">
</div>
<div class="content" >
    <h2 style="color: white; font-weight: 900;">The best place to sell real estate</h2>
    <?php 
        require 'templates/aside.php';
    ?>
    <div class="estates">
        
        <div class="ads">
            <h1 style="color: white;">All estates</h1>
            <?php
            foreach ($data[0] as $estate) {
                echo "
                <div class='ad' page='ad?user=".$estate['ownerId']."&ad=".$estate['id']."'>
                    <div class='slider' show='1' scroll='1' time='300'>
                        <ul>";
                            foreach ($data[1] as $photo) {
                                if($estate['id'] == $photo['houseId']) {
                                    echo "
                                    <li>
                                        <a 
                                            href='public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo']."' 
                                            data-lightbox='user".$estate['ownerId']."-".count($data[1])."' data-title='".$photo['description']."'
                                        >
                                            <div class='img_slider' style='background-image: url(public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo'].");'></div>
                                        </a>
                                    </li>
                                    ";
                                }
                            }; echo "
                        </ul>
                    </div>
                    <div class='estate_inf'>
                        <h2>".$estate['type']."</h2>
                        <p>".$estate['city']."</p>
                        <p>Number of rooms: ".$estate['roomCount']."</p>
                        <p>Area: ".$estate['area']." m²</p>
                        <h3>".$estate['price']." €</h3>
                    </div>
                </div>
                ";
            }
            ?>
            <!-- <div class="ad" page="/ad?user=1&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user1/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/4.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/6.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad2/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/6.jpg);"></div></a></li>
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
            <div class="ad" page="/ad?user=1&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user1/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/4.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/6.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad2/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/6.jpg);"></div></a></li>
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
            <div class="ad" page="/ad?user=1&ad=1">
                <div class="slider" show="1" scroll="1" time="300">
                    <ul>
                        <li><a href="public/uploads/user1/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user1/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad1/4.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad1/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad1/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user2/ad1/6.jpg);"></div></a></li>
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
                        <li><a href="public/uploads/user2/ad2/1.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/1.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/2.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/2.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/3.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/3.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/4.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/4.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/5.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/5.jpg);"></div></a></li>
                        <li><a href="public/uploads/user2/ad2/6.jpg" data-lightbox="user1-1" data-title=""><div class="img_slider" style="background-image: url(public/uploads/user1/ad2/6.jpg);"></div></a></li>
                    </ul>
                </div>
                <div class="estate_inf">
                    <h2>Aia tn 17</h2>
                    <p>Narva-Jõesuu linn , Ida-Viru maakond</p>
                    <p>Floor: 4</p>
                    <p>Area: 38861.00 m²</p>
                    <h3>12 000 000€</h3>
                </div>
            </div> -->
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>