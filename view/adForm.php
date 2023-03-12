<?php
    ob_start();
?>
<div class="content">
    <form action="addSend" class="createAdv" enctype="multipart/form-data">
        <h1>Добавить объявление</h1>
        <div class="picture">
            <div class='slider' show='1' scroll='1' time='200'>
                <ul>
                    <li><div class='img_slider' style='background-image: url();'></div></li>
                </ul>
            </div>
            <input type="file" name="files" id="files" multiple>
        </div>
        <ul>
            <li>
                <select name="type" id="">
                    <option selected disabled value="--">Type</option>
                    <option value="house">House</option>
                    <option value="flat">Flat</option>
                    <option value="garage">Garage</option>
                    <option value="business">Business</option>
                </select>
            </li>
            <li><input type="text" name="adress" placeholder="Adress" autocomplete="off"></li>
            <li>
                <input type="text" name="city" list="cities" placeholder="City" autocomplete="off">
                <datalist id="cities">
                    <option value="Kivioli"></option>
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
                <select name="heat" id="">
                    <option selected disabled value="--">heat</option>
                    <option value="water">water</option>
                    <option value="air">air</option>
                    <option value="electric">electric</option>
                    <option value="gas">gas</option>
                </select>
            </li>
        </ul>
        <div class="des">
            <textarea name="desription" id="" cols="30" rows="10" placeholder="Description"></textarea>
        </div>
    </form>
</div>
<?php
    $content = ob_get_clean();
    include 'view/templates/main.php';
?>