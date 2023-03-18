<?php
ob_start();
?>
<div class="content">
    <div class="back">
        <img src="images/favorites_back.jpg" alt="">
    </div>
    <h2>favorites</h2>
    <div class="favorites">
        <?php
        if(is_iterable($favorites)) {
            foreach ($favorites[0] as $estate) {
                echo "
                <div class='estate' page='ad?user=".$estate['ownerId']."&ad=".$estate['id']."&fav=yes'>
                    <div class='slider' show='1' scroll='1' time='200'>
                        <ul>
                            ";
                                foreach ($favorites[1] as $photo) {
                                    if($photo['houseId'] == $estate['id']) {
                                        echo "
                                            <li>
                                                <a href='public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo']."' data-lightbox='user1-9' data-title='".$photo['description']."'>
                                                    <div class='img_slider' style='background-image: url(public/uploads/user_".$estate['ownerId']."/ad_".$estate['id']."/".$photo['photo'].");'></div>
                                                </a>
                                            </li>
                                        ";
                                    }
                                }
                            echo "
                        </ul>
                    </div>
                    <div class='inf'>
                        <div class='inf_text'>
                            <h3>".$estate['address']."</h3>
                            <p><span>City:</span> ".$estate['city']."</p>
                            <p><span>Price:</span> ".$estate['price']." €</p>
                        </div>
                    </div>
                    <div class='btn_container'>
                        <a class='btn btn-primary' href='ad?user=".$estate['ownerId']."&ad=".$estate['id']."&fav=yes'>Visit</a>
                    </div>
                </div>
                ";
            }
        } else {
            echo "<p class='no_favorites'>You do not have favorite estates yet.</p>";
        }
        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>