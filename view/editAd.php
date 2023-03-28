<?php
ob_start();
?>
<script src="public/js/editAd.js"></script>
<div class="content">
    <h2>Edit advertisement</h2>
    <form action="editAd" class="createAdv" enctype="multipart/form-data" method="post">
        <input type="text" value="<?php echo $ad['id'] ?>" style='display: none;' readonly name='id'>
        <div class="picture">
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>
                    <?php
                    foreach ($ad['photos'] as $key => $value) {
                        echo "<li><div class='img_slider' style='background-image: url(public/uploads/user_$_SESSION[userId]/ad_$ad[id]/$value[photo]);'></div></li>";
                    }
                    ?>
                </ul>
            </div>
            <input type="file" name="files[]" accept="image/png, image/jpeg, image/jpg" class="form-control" id="files" multiple>
            <p style="margin-bottom: 0"><b>Files are overwritten in the folder, so be careful</b></p>
        </div>
        <ul>
            <li>
                <select name="type" id="adType" class="form-control" required disabled>
                    <option selected disabled value="<?php echo $ad['type']; ?>"><?php echo $ad['type']; ?></option>
                </select>
            </li>
            <li><input type="text" id="adAddress" name="address" class="form-control" placeholder="Address" autocomplete="off" required value="<?php echo $ad['address'] ?>"></li>
            <li>
                <input type="text" name="city" list="cities" id="adTowns" placeholder="City" class="form-control" autocomplete="off" value="<?php echo $ad['city'] ?>">
                <datalist id="cities">
                    <?php
                    foreach (ModelAd::GetCities() as $key => $value) {
                        echo "<option value='$value[name]'></option>";
                    }
                    ?>
                </datalist>
            </li>
            <?php
            switch ($ad['type']) {
                case 'House':
                    echo "<li><input class='form-control' type='number' id='adRoomCount' name='roomCount' value='$ad[roomCount]' placeholder='Room count'></li>
                        <li><input class='form-control' type='number' id='adFloorCount' name='floorCount' value='$ad[floorCount]' placeholder='Floor count'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='$ad[area]'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adTerritory' name='territory' placeholder='Territory' value='$ad[territory]'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='adBasement_container'>
                            <label>Basement</label>
                            <input type='checkbox' class='form-check-label' name='basement' id='adBasement' checked='$ad[basement]'>
                        </li>
                        <li><input class='form-control' type='number' name='year' id='adYear' value='$ad[year]' placeholder='Year'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                            <span class='input-group-text' id='basic-addon1'>€</span>
                        </li>
                        <li>
                            <select name='conditions' id='adConditions' class='form-control'>";
                    $conditions = array('good', 'need repair', 'need overhaul');
                    for ($i = 0; $i < count($conditions); $i++) {
                        if ($ad['conditions'] == $conditions[$i]) {
                            echo "<option selected value='$ad[conditions]'>" . ucfirst($ad['conditions']) . "</option>";
                        } else {
                            echo "<option value='$conditions[$i]'>" . ucfirst($conditions[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>
                        <li>
                            <select name='heatSystem' id='adHeat' class='form-control'>";
                    $heatSystems = array('water', 'air', 'electric', 'gas');
                    for ($i = 0; $i < count($heatSystems); $i++) {
                        if ($ad['heatSystem'] == $heatSystems[$i]) {
                            echo "<option selected value='$ad[heatSystem]'>" . ucfirst($ad['heatSystem']) . "</option>";
                        } else {
                            echo "<option value='$heatSystems[$i]'>" . ucfirst($heatSystems[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>";
                    break;
                case 'Apartment':
                    echo "<li><input class='form-control' type='number' id='adRoomCount' name='roomCount' value='$ad[roomCount]' placeholder='Room count'></li>
                        <li><input class='form-control' type='number' id='adFloorCount' name='floorCount' value='$ad[floorCount]' placeholder='Floor count'></li>
                        <li><input class='form-control' type='number' id='adFloor' name='floor' value='$ad[floor]' placeholder='Floor'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='area' value='$ad[area]'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li><input class='form-control' type='number' name='year' id='adYear' value='$ad[year]' placeholder='Year'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                            <span class='input-group-text' id='basic-addon1'>€</span>
                        </li>
                        <li>
                            <select name='conditions' id='adConditions' class='form-control'>";
                    $conditions = array('good', 'need repair', 'need overhaul');
                    for ($i = 0; $i < count($conditions); $i++) {
                        if ($ad['conditions'] == $conditions[$i]) {
                            echo "<option selected value='$ad[conditions]'>" . ucfirst($ad['conditions']) . "</option>";
                        } else {
                            echo "<option value='$conditions[$i]'>" . ucfirst($conditions[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>
                        <li>
                            <select name='heatSystem' id='adHeat' class='form-control'>";
                    $heatSystems = array('water', 'air', 'electric', 'gas');
                    for ($i = 0; $i < count($heatSystems); $i++) {
                        if ($ad['heatSystem'] == $heatSystems[$i]) {
                            echo "<option selected value='$ad[heatSystem]'>" . ucfirst($ad['heatSystem']) . "</option>";
                        } else {
                            echo "<option value='$heatSystems[$i]'>" . ucfirst($heatSystems[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>";
                    break;
                case 'Garage':
                    echo "<li class='input-group'>
                        <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='$ad[area]'>
                        <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='adBasement_container'>
                            <label>Basement</label>
                            <input type='checkbox' class='form-check-label' name='basement' id='adBasement' checked='$ad[basement]'>
                        </li>
                        <li><input class='form-control' type='number' name='year' id='adYear' value='$ad[year]' placeholder='Year'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                            <span class='input-group-text' id='basic-addon1'>€</span>
                        </li>
                        <li>
                            <select name='conditions' id='adConditions' class='form-control'>";
                    $conditions = array('good', 'need repair', 'need overhaul');
                    for ($i = 0; $i < count($conditions); $i++) {
                        if ($ad['conditions'] == $conditions[$i]) {
                            echo "<option selected value='$ad[conditions]'>" . ucfirst($ad['conditions']) . "</option>";
                        } else {
                            echo "<option value='$conditions[$i]'>" . ucfirst($conditions[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>
                        <li>
                            <select name='heatSystem' id='adHeat' class='form-control'>";
                    $heatSystems = array('water', 'air', 'electric', 'gas');
                    for ($i = 0; $i < count($heatSystems); $i++) {
                        if ($ad['heatSystem'] == $heatSystems[$i]) {
                            echo "<option selected value='$ad[heatSystem]'>" . ucfirst($ad['heatSystem']) . "</option>";
                        } else {
                            echo "<option value='$heatSystems[$i]'>" . ucfirst($heatSystems[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>";
                    break;
                case 'Land':
                    echo "<li class='input-group'>
                        <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='$ad[area]'>
                        <span class='input-group-text' id='basic-addon1'>m²</span>
                    </li>
                    <li class='input-group'>
                        <input class='form-control' type='number' id='adTerritory' name='territory' value='$ad[territory]' placeholder='Territory'>
                        <span class='input-group-text' id='basic-addon1'>m²</span>
                    </li>
                    <li class='input-group'>
                        <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                        <span class='input-group-text' id='basic-addon1'>€</span>
                    </li>";
                    break;
                case 'Summer house':
                    echo "<li><input class='form-control' type='number' id='adRoomCount' name='roomCount' value='$ad[roomCount]' placeholder='Room count'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='$ad[area]'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adTerritory' name='territory' value='$ad[territory]' placeholder='Territory'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='adBasement_container'>
                            <label>Basement</label>
                            <input type='checkbox' class='form-check-label' name='basement' id='adBasement' checked='$ad[basement]'>
                        </li>
                        <li><input class='form-control' type='number' name='year' id='adYear' value='$ad[year]' placeholder='Year'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                            <span class='input-group-text' id='basic-addon1'>€</span>
                        </li>
                        <li>
                            <select name='conditions' id='adConditions' class='form-control'>";
                    $conditions = array('good', 'need repair', 'need overhaul');
                    for ($i = 0; $i < count($conditions); $i++) {
                        if ($ad['conditions'] == $conditions[$i]) {
                            echo "<option selected value='$ad[conditions]'>" . ucfirst($ad['conditions']) . "</option>";
                        } else {
                            echo "<option value='$conditions[$i]'>" . ucfirst($conditions[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>
                        <li>
                            <select name='heatSystem' id='adHeat' class='form-control'>";
                    $heatSystems = array('water', 'air', 'electric', 'gas');
                    for ($i = 0; $i < count($heatSystems); $i++) {
                        if ($ad['heatSystem'] == $heatSystems[$i]) {
                            echo "<option selected value='$ad[heatSystem]'>" . ucfirst($ad['heatSystem']) . "</option>";
                        } else {
                            echo "<option value='$heatSystems[$i]'>" . ucfirst($heatSystems[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>";
                    break;
                case 'Part':
                    echo "<li><input class='form-control' type='number' id='adRoomCount' name='roomCount' value='$ad[roomCount]' placeholder='Room count'></li>
                        <li><input class='form-control' type='number' id='adFloor' name='floor' value='$ad[floor]' placeholder='Floor'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adArea' name='area' placeholder='Area' required value='$ad[area]'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adTerritory' name='territory' value='$ad[territory]' placeholder='Territory'>
                            <span class='input-group-text' id='basic-addon1'>m²</span>
                        </li>
                        <li class='adBasement_container'>
                            <label>Basement</label>
                            <input type='checkbox' class='form-check-label' name='basement' id='adBasement' checked='$ad[basement]'>
                        </li>
                        <li><input class='form-control' type='number' name='year' id='adYear' value='$ad[year]' placeholder='Year'></li>
                        <li class='input-group'>
                            <input class='form-control' type='number' id='adPrice' name='price' step='.01' placeholder='Price' required value='$ad[price]'>
                            <span class='input-group-text' id='basic-addon1'>€</span>
                        </li>
                        <li>
                            <select name='conditions' id='adConditions' class='form-control'>";
                    $conditions = array('good', 'need repair', 'need overhaul');
                    for ($i = 0; $i < count($conditions); $i++) {
                        if ($ad['conditions'] == $conditions[$i]) {
                            echo "<option selected value='$ad[conditions]'>" . ucfirst($ad['conditions']) . "</option>";
                        } else {
                            echo "<option value='$conditions[$i]'>" . ucfirst($conditions[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>
                        <li>
                            <select name='heatSystem' id='adHeat' class='form-control'>";
                    $heatSystems = array('water', 'air', 'electric', 'gas');
                    for ($i = 0; $i < count($heatSystems); $i++) {
                        if ($ad['heatSystem'] == $heatSystems[$i]) {
                            echo "<option selected value='$ad[heatSystem]'>" . ucfirst($ad['heatSystem']) . "</option>";
                        } else {
                            echo "<option value='$heatSystems[$i]'>" . ucfirst($heatSystems[$i]) . "</option>";
                        }
                    }
                    echo "
                            </select>
                        </li>";
                    break;
            }
            ?>
        </ul>
        <div class="des">
            <textarea name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control"><?php echo $ad['description'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Edit ad</button>
    </form>
</div>
<?php
$content = ob_get_clean();
include 'view/templates/main.php';
?>