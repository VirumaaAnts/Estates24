<?php
    ob_start();
?>
<div class="main_back">
    <img src="images/home_back.jpg" alt="">
</div>
<div class="content">
    <h2>The best place to sell real estate</h2>
    <aside>
        <form id="filters">
            <div class="types">
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="apartmnent">
                    <p>200</p>
                    <img src="images/apartment.png" alt="">
                    <p class="name"><?php echo substr("Apartment",0,5)?>...</p>
                </div>
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="homes">
                    <p>560</p>
                    <img src="images/home.png" alt="">
                    <p class="name"><?php echo substr("Home",0,5)?></p>
                </div>
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="summer">
                    <p>758</p>
                    <img src="images/country_house.png" alt="">
                    <p class="name"><?php echo substr("Summer house",0,5)?>...</p>
                </div>
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="garage">
                    <p>323</p>
                    <img src="images/garage.png" alt="">
                    <p class="name"><?php echo substr("Garage",0,5)?>...</p>
                </div>
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="land">
                    <p>751</p>
                    <img src="images/land.png" alt="">
                    <p class="name"><?php echo substr("Land",0,5)?></p>
                </div>
                <div class="type btn_filter">
                    <input type="checkbox" name="type" value="part">
                    <p>560</p>
                    <img src="images/part.png" alt="">
                    <p class="name"><?php echo substr("Part",0,5)?></p>
                </div>
            </div>
            <div class="place">
                <select name="county" id="county">
                    <option value="none" selected disabled>County</option>
                    <option value="Harju">Harju County</option>
                    <option value="Hiiu">Hiiu County</option>
                    <option value="Ida-Viru">Ida-Viru County</option>
                    <option value="Jõgeva">Jõgeva County</option>
                    <option value="Järva">Järva County</option>
                    <option value="Lääne">Lääne County</option>
                    <option value="Lääne-Viru">Lääne-Viru County</option>
                    <option value="Põlva">Põlva County</option>
                    <option value="Pärnu">Pärnu County</option>
                    <option value="Rapla">Rapla County</option>
                    <option value="Saare">Saare County</option>
                    <option value="Tartu">Tartu County</option>
                    <option value="Valga">Valga County</option>
                    <option value="Viljandi">Viljandi County</option>
                    <option value="Võru">Võru County</option>
                </select>
                <select name="towns" id="towns" disabled>
                    <option value="none" selected disabled>Towns</option>
                </select>
            </div>
            <div class="parametrs">
                <div>
                    <label>Rooms</label>
                    <div>
                        <input class="form-control" type="number" name="min_rooms" id="min_rooms" placeholder="Min">
                        <p>—</p>
                        <input class="form-control"  type="number" name="max_rooms" id="max_rooms" placeholder="Max">
                    </div>
                </div>
                <div>
                    <label>Area</label>
                    <div>
                        <input class="form-control"  type="number" name="min_area" id="min_area" placeholder="Min">
                        <p>—</p>
                        <input class="form-control"  type="number" name="max_area" id="max_area" placeholder="Max">
                    </div>
                </div>
                <div>
                    <label>Price</label>
                    <div>
                        <input class="form-control"  type="number" name="min_price" id="min_price" placeholder="Min">
                        <p>—</p>
                        <input class="form-control"  type="number" name="max_price" id="max_price" placeholder="Max">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Find</button>
        </form>
    </aside>
    <div class="estates">
        <div class="ads">
            <h1>Last added estates</h1>
            <div class="ad" page="/user1/1">
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
            <div class="ad" page="/user2/1">
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
            <div class="ad" page="/user1/2">
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
            <a href="estates">All estates&#8594;</a>
        </div>
        <div class="ads">
            <h1>Special offers</h1>
            <div class="ad" page="/user1/1">
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
            <div class="ad" page="/user2/1">
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
            <div class="ad" page="/user1/2">
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
            <a href="offers">All offers&#8594;</a>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>