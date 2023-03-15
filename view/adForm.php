<?php
ob_start();
?>
<div class="content">
    <form action="createObj" class="createAdv" enctype="multipart/form-data" method="post">
        <h1>Добавить объявление</h1>
        <div class="picture">
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>
                    <li><div class='img_slider' style='background-image: url();'></div></li>
                </ul>
            </div>
            <input type="file" name="files[]" id="files" multiple>
        </div>
        <ul>
            <li>
                <select name="type" id="" required>
                    <option selected disabled value="--">Type</option>
                    <option value="house">House</option>
                    <option value="flat">Flat</option>
                    <option value="garage">Garage</option>
                    <option value="business">Business</option>
                    <option value="land">Land</option>
                    <option value="part">Part</option>
                </select>
            </li>
            <li><input type="text" name="address" placeholder="Adress" autocomplete="off" required></li>
            <li>
                <input type="text" name="city" list="cities" placeholder="City" autocomplete="off">
                <datalist id="cities">
                    <?php 
                    foreach (ModelAd::GetCities() as $key => $value) {
                        echo "<option value='$value[name]'></option>";
                    }
                    ?>
                </datalist>
            </li>
            <li><input type="number" name="roomCount" placeholder="Room count"></li>
            <li><input type="number" name="floorCount" placeholder="Floor count"></li>
            <li><input type="number" name="floor" placeholder="Floor"></li>
            <li><input type="number" name="area" placeholder="Area"><p>m²</p></li>
            <li><input type="number" name="territory" placeholder="Territory"><p>m²</p></li>
            <li><label>Basement</label><input type="checkbox" name="basement" id=""></li>
            <li><input type="number" name="year" placeholder="Year"></li>
            <li><input type="number" name="price" placeholder="Price"><p>€</p></li>
            <li>
                <select name="conditions" id="">
                    <option selected disabled value="--">Conditions</option>
                    <option value="good">Good</option>
                    <option value="need repair">Need repair</option>
                    <option value="need overhaul">Need overhaul</option>
                </select>
            </li>
            <li>
                <select name="heatSystem" id="">
                    <option selected disabled value="--">heat</option>
                    <option value="water">water</option>
                    <option value="air">air</option>
                    <option value="electric">electric</option>
                    <option value="gas">gas</option>
                </select>
            </li>
        </ul>
        <div class="des">
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <button type="submit">Create ad</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>