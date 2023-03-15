<?php
ob_start();
?>
<script src="public/js/adForm.js"></script>
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
            <!-- <li>
                <select name="towns" id="adTowns" class="form-control" disabled required>
                    <option selected disabled value="none">City</option>
                    <?php
                        foreach($countiesCities[0] as $county){
                            echo '<option value="'.$county['id'].'">'.$county['name'].' County</option>';
                        }
                    ?>
                </select>
            </li> -->
            <li><input class="form-control" type="number" id="adRoomCount" name="roomCount" value="" placeholder="Room count"></li>
            <li><input class="form-control" type="number" id="adFloorCount" name="floorCount" value="" placeholder="Floor count"></li>
            <li><input class="form-control" type="number" id="adFloor" name="floor" value="" placeholder="Floor"></li>
            <li class="input-group">
                <input class="form-control" type="number" id="adArea" name="area" placeholder="Area" required>
                <span class="input-group-text" id="basic-addon1">m²</span>
            </li>
            <li class="input-group">
                <input class="form-control" type="number" id="adTerritory" name="territory" value="" placeholder="Territory">
                <span class="input-group-text" id="basic-addon1">m²</span>
            </li>
            <li>
                <label>Basement</label>
                <input type="checkbox" class="form-check-label" name="basement" value="" id="adBasement">
            </li>
            <li><input class="form-control" type="number" name="year" id="adYear" value="" placeholder="Year"></li>
            <li class="input-group">
                <input class="form-control" type="number" id="adPrice" name="price" step=".01" placeholder="Price" required />
                <span class="input-group-text" id="basic-addon1">€</span>
            </li>
            <li>
                <select name="conditions" id="adConditions" class="form-control">
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