<?php
ob_start();
?>
<script src="public/js/adForm.js"></script>
<div class="content">
    <form action="addSend" method="POST" class="createAdv" enctype="multipart/form-data">
        <h1>Добавить объявление</h1>
        <div class="picture">
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>
                    <li><div class='img_slider' style='background-image: url();'></div></li>
                </ul>
            </div>
            <input type="file" name="files" class="form-control" id="files" multiple>
        </div>
        <ul>
            <li>
                <select name="type" id="adType">
                    <option selected disabled value="--">Type</option>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Garage">Garage</option>
                    <option value="Land">Land</option>
                    <option value="Part">Part</option>
                    <option value="Summer house">Summer house</option>
                </select>
            </li>
            <li><input type="text" class="form-control" id="adAddress" name="address" placeholder="Address" autocomplete="off"></li>
            <li>
                <select name="county" id="adCounty" class="form-control">
                    <option selected disabled value="none">County</option>
                    <?php
                        foreach($countiesCities[0] as $county){
                            echo '<option value="'.$county['id'].'">'.$county['name'].' County</option>';
                        }
                    ?>
                </select>
            </li>
            <li>
                <select name="towns" id="adTowns" class="form-control" disabled>
                    <option value="none" selected>Towns</option>
                </select>
            </li>
            <li><input class="form-control" type="number" id="adRoomCount" name="roomCount" placeholder="Room count"></li>
            <li><input class="form-control" type="number" id="adFloorCount" name="floorCount" placeholder="Floor count"></li>
            <li><input class="form-control" type="number" id="adFloor" name="floor" placeholder="Floor"></li>
            <li class="input-group">
                <input class="form-control" type="number" id="adArea" name="area" placeholder="Area">
                <span class="input-group-text" id="basic-addon1">m²</span>
            </li>
            <li class="input-group">
                <input class="form-control" type="number" id="adTerritory" name="territory" placeholder="Territory">
                <span class="input-group-text" id="basic-addon1">m²</span>
            </li>
            <li>
                <label>Basement</label>
                <input type="checkbox" class="form-check-label" name="basement" id="adBasement">
            </li>
            <li><input class="form-control" type="number" name="year" id="adYear" placeholder="Year"></li>
            <li class="input-group">
                <input class="form-control" type="number" id="adPrice" name="price" placeholder="Price">
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
                <select name="heat" id="adHeat" class="form-control">
                    <option selected disabled value="--">Heat</option>
                    <option value="water">Water</option>
                    <option value="air">Air</option>
                    <option value="electric">Electric</option>
                    <option value="gas">Gas</option>
                </select>
            </li>
        </ul>
        <div class="des">
            <textarea name="desription" class="form-control" id="" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
        <button>Create ad</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>