<?php
    ob_start();
?>
<div class="Ad" data-id="">
    <h1>Summer house</h1>
    <h2>--,Pärne</h2>
    <div class="picture">
        <div class='slider' show='1' scroll='1' time='200'>
            <ul>
                <li><a href='../public/uploads/user1/ad1/1.jpg' data-lightbox='ad1'><div class='img_slider' style='background-image: url(../public/uploads/user1/ad1/1.jpg);'></div></a></li>
                <li><a href='../public/uploads/user1/ad1/2.jpg' data-lightbox='ad1'><div class='img_slider' style='background-image: url(../public/uploads/user1/ad1/2.jpg);'></div></a></li>
                <li><a href='../public/uploads/user1/ad1/3.jpg' data-lightbox='ad1'><div class='img_slider' style='background-image: url(../public/uploads/user1/ad1/3.jpg);'></div></a></li>
                <li><a href='../public/uploads/user1/ad1/4.jpg' data-lightbox='ad1'><div class='img_slider' style='background-image: url(../public/uploads/user1/ad1/4.jpg);'></div></a></li>
            </ul>
        </div>
    </div>
    <ul class="inf">
        <li><p>Location: , Maardu linn</p></li>
        <li><p>Property type: Summer house</p></li>
        <li><p>Number of rooms: 8</p></li>
        <li><p>Floors: 2</p></li>
        <li><p>Area: 235m²</p></li>
        <li><p>Price: 1 560 700 €</p></li>
        <li>
            <form action="">
            <h3>Ask further information:</h3>
                <input type="text" name="name" id="name" placeholder="Name" autocomplete="off">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
                <input type="tel" name="tel" id="tel" placeholder="Phone" autocomplete="off">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your questions"></textarea>
            </form>
        </li>
    </ul>
    <div class="des">
        <h3>Description</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem rerum blanditiis quod cupiditate delectus veritatis magni totam fugit excepturi repellat illo, magnam quas consectetur, sunt, tempore quisquam ratione ipsa officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aut alias itaque corporis sequi ducimus, omnis voluptatibus beatae ex porro ipsum et nemo, fugiat hic architecto aliquam! Nulla, quia assumenda!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem rerum blanditiis quod cupiditate delectus veritatis magni totam fugit excepturi repellat illo, magnam quas consectetur, sunt, tempore quisquam ratione ipsa officiis! Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <p>More information:</p>
        <p>aaa@gmail.com</p>
        <p>tel: +372586945</p>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>