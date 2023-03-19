<?php
    ob_start();
?>
<script src="public/js/ad.js"></script>
<?php
echo "
    <div class='Ad'>
        "; 
        if(isset($_SESSION['userId'])) {
            echo "
                <form action='ad' method='GET' id='favForm' class='fav_btn'>
                    <input type='text' name='fav' id='favBool' value='".$_GET['fav']."'/>
                    <input type='text' id='adFav' name='ad' value='".$data[0]['id']."'/>
                    <input type='text' name='user' value='".$data[0]['ownerId']."'/>
                    <input type='checkbox' name='fav_status' id='favCheckbox'/>
                    <label for='favCheckbox'>
                        <img id='favStar' src='images/star-2768.svg'>
                    </label>
                </form>
            ";
        }
        echo "
        <h1>".$data[0]['address']."</h1>
        <div class='picture'>
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>";
                    foreach ($data[2] as $photo) { 
                        echo "
                        <li>
                            <a 
                                href='public/uploads/user_".$data[0]['ownerId']."/ad_".$data[0]['id']."/".$photo['photo']."' 
                                data-lightbox='user".$data[1]['id']."-".count($data[2])."' data-title='".$photo['description']."'
                            >
                                <div class='img_slider' 
                                    style='background-image: url(public/uploads/user_".$data[0]['ownerId']."/ad_".$data[0]['id']."/".$photo['photo'].");'>
                                </div>
                            </a>
                        </li>
                        ";
                    }; echo "
                </ul>
            </div>
        </div>
        <ul class='inf'>
            <li><p>Location: ".$data[0]['city'].", ".$data[0]['county']."maa</p></li>
            <li><p>Property type: ".$data[0]['type']."</p></li>";
            if($data[0]['basement'] == 1) {
                $basement = 'available';
            } else {
                $basement = 'not available';
            }
            if($data[0]['type'] == 'House') {
                echo "
                    <li><p>Rooms: ".$data[0]['roomCount']."</p></li>
                    <li><p>Floors: ".$data[0]['floorCount']."</p></li>
                    <li><p>Heat system: ".$data[0]['heatSystem']."</p></li>
                    <li><p>Conditions: ".$data[0]['conditions']."</p></li>
                    <li><p>Basement: $basement</p></li>
                    <li><p>Territory: ".$data[0]['territory']." m²</p></li>
                ";
            }
            if($data[0]['type'] == 'Summer house') {
                echo "
                    <li><p>Rooms: ".$data[0]['roomCount']."</p></li>
                    <li><p>Heat system: ".$data[0]['heatSystem']."</p></li>
                    <li><p>Conditions: ".$data[0]['conditions']."</p></li>
                    <li><p>Territory: ".$data[0]['territory']." m²</p></li>
                ";
            }
            if($data[0]['type'] == 'Apartment') {
                echo "
                    <li><p>Rooms: ".$data[0]['roomCount']."</p></li>
                    <li><p>Floors: ".$data[0]['floorCount']."</p></li>
                    <li><p>Heat system: ".$data[0]['heatSystem']."</p></li>
                    <li><p>Conditions: ".$data[0]['conditions']."</p></li>
                ";
            }
            if($data[0]['type'] == 'Garage') {
                echo "
                    <li><p>Conditions: ".$data[0]['conditions']."</p></li>
                    <li><p>Territory: ".$data[0]['territory']." m²</p></li>
                ";
            }
            if($data[0]['type'] == 'Land') {
                echo "
                    <li><p>Territory: ".$data[0]['territory']." m²</p></li>
                ";
            }
            if($data[0]['type'] == 'Part') {
                echo "
                    <li><p>Rooms: ".$data[0]['roomCount']."</p></li>
                    <li><p>Floor: ".$data[0]['floor']."</p></li>
                    <li><p>Heat system: ".$data[0]['heatSystem']."</p></li>
                    <li><p>Conditions: ".$data[0]['conditions']."</p></li>
                ";
            }
            echo "
            <li><p>Area: ".$data[0]['area']." m²</p></li>
            <li><p>Price: ".$data[0]['price']." €</p></li>
            <li>
                <form action=''>
                    <h3>Ask further information:</h3>
                    <input type='text' name='name' class='form-control' id='name' placeholder='Name' autocomplete='off'>
                    <input type='email' name='email' class='form-control' id='email' placeholder='Email' autocomplete='off'>
                    <input type='tel' name='tel' class='form-control' id='tel' placeholder='Phone' autocomplete='off'>
                    <textarea name='question' id='question' class='form-control' cols='30' rows='10' placeholder='Your question'></textarea>
                    <button class='btn btn-secondary w-100'>Send</button>
                </form>
            </li>
        </ul>
        <div class='des'>
            <h3>Description</h3>
            <p>".$data[0]['description']."</p>
            <p>More information:</p>
            <p>".$data[1]['email']."</p>
            <p>tel: ".$data[1]['phone']."</p>
        </div>
    </div>
";
?>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>