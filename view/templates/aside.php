<aside>
    <form id="filters" action="findByFilters" method="POST">
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
                <option selected disabled value="none">County</option>
                <?php
                    foreach($countiesCities[0] as $county){
                        echo '<option value="'.$county['id'].'">'.$county['name'].' County</option>';
                    }
                ?>
            </select>
            <select name="towns" id="towns" disabled>
                <option value="none" selected>Towns</option>
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