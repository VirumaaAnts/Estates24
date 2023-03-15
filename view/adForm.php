<?php
ob_start();
?>
<script src="public/js/adForm.js"></script>
<div class="content">
<<<<<<< HEAD
    <form action="createObj" class="createAdv" enctype="multipart/form-data" method="post">
=======
    <form action="addAd" method="POST" class="createAdv" enctype="multipart/form-data">
>>>>>>> 817bc6ecbefc1d7ed891eb4e94043c3042bc01cc
        <h1>Добавить объявление</h1>
        <div class="picture">
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>
                    <li><div class='img_slider' style='background-image: url();'></div></li>
                </ul>
            </div>
<<<<<<< HEAD
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
=======
            <input type="file" name="files[]" accept="image/png, image/jpeg, image/jpg" class="form-control" id="files" multiple required>
        </div>
        <ul>
            <li>
                <select name="type" id="adType" required>
                    <option selected disabled value="--">Type</option>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Garage">Garage</option>
                    <option value="Land">Land</option>
                    <option value="Part">Part</option>
                    <option value="Summer house">Summer house</option>
                </select>
            </li>
            <li><input type="text" class="form-control" id="adAddress" name="address" placeholder="Address" autocomplete="off" required></li>
            <li>
                <select name="county" id="adCounty" class="form-control">
                    <option selected disabled value="none">County</option>
                    <?php
                        foreach($countiesCities[0] as $county){
                            echo '<option value="'.$county['id'].'">'.$county['name'].' County</option>';
                        }
                    ?>
                </select>
>>>>>>> 817bc6ecbefc1d7ed891eb4e94043c3042bc01cc
            </li>
            <li>
                <select name="towns" id="adTowns" class="form-control" disabled required>
                    <option selected disabled value="none">City</option>
                    <?php
                        foreach($countiesCities[0] as $county){
                            echo '<option value="'.$county['id'].'">'.$county['name'].' County</option>';
                        }
                    ?>
                </select>
            </li>
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
<<<<<<< HEAD
                <select name="heatSystem" id="">
                    <option selected disabled value="--">heat</option>
                    <option value="water">water</option>
                    <option value="air">air</option>
                    <option value="electric">electric</option>
                    <option value="gas">gas</option>
=======
                <select name="heat" id="adHeat" class="form-control">
                    <option selected disabled value="--">Heat</option>
                    <option value="water">Water</option>
                    <option value="air">Air</option>
                    <option value="electric">Electric</option>
                    <option value="gas">Gas</option>
>>>>>>> 817bc6ecbefc1d7ed891eb4e94043c3042bc01cc
                </select>
            </li>
        </ul>
        <div class="des">
<<<<<<< HEAD
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <button type="submit">Create ad</button>
=======
            <textarea name="desription" class="form-control" id="" cols="30" rows="10" placeholder="Description" value=""></textarea>
        </div>
        <button name="send" class="btn btn-primary w-100">Create ad</button>
>>>>>>> 817bc6ecbefc1d7ed891eb4e94043c3042bc01cc
    </form>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>