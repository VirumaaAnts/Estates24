<?php
ob_start();
?>
<div class="content">
    <div class="back">
        <img src="images/favourites_back.jpg" alt="">
    </div>
    <h2>Favourites</h2>
    <div class="favourites">
        <?php
        foreach ($favourites[0] as $estate) {
            echo "
            <div class='estate'>
                <div class='slider' show='1' scroll='1' time='200'>
                    <ul>
                        ";
                            foreach ($favourites[1] as $photo) {
                                if($photo['houseId'] == $estate['id']) {
                                    echo "
                                        <li>
                                            <a href='public/uploads/".$_SESSION['userId']."/".$estate['id']."/".$photo['photo']."' data-lightbox='user1-9' data-title='".$photo['description']."'>
                                                <div class='img_slider' style='background-image: url(public/uploads/".$_SESSION['userId']."/".$estate['id']."/".$photo['photo'].");'></div>
                                            </a>
                                        </li>
                                    ";
                                }
                            }
                        echo "
                    </ul>
                </div>
                <div class='inf'>
                    <h3>".$estate['address']."</h3>
                    <p><span>City:</span>".$estate['cityId']."</p>
                    <p><span>Price:</span>".$estate['price']." €</p>
                </div>
            </div>
            ";
        }
        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>