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
            <h1 style="color: white;">All offers</h1>
            <?php
            foreach ($data[0] as $estate) {
                if($estate['offer'] == 1){
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
            }
            ?>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>