<aside>
    <form id="filters" action="findByFilters" method="POST">
        <div class="types">
            <?php 
            foreach ($countiesCities[3] as $type) {
                echo "
                    <div class='type btn_filter'>
                        <input type='checkbox' name='type' value='".strtolower($type)."'>
                        ";
                        if (is_iterable($countiesCities)) {
                            $typeCheck = 0;
                            foreach ($countiesCities[2] as $types) {
                                if ($types['type'] == $type) {
                                    echo "<p class='types_count'>" . $types['typeCount'] . '</p>';
                                    $typeCheck++;
                                    break;
                                }
                            }
                            if ($typeCheck == 0) {
                                echo "<p>0</p>";
                            }
                        } else {
                            echo "<p>0</p>";
                        }
                        $typeStrFormat = str_replace(' ', '_', strtolower($type));
                        echo "
                        <img src='images/$typeStrFormat.png' alt=''>
                        <p class='name'>$type</p>
                    </div>
                ";
            }
            ?>
            
        </div>
        <div class="place">
            <select name="county" id="county" class="form-control">
                <option selected disabled value="none">County</option>
                <?php
                foreach ($countiesCities[0] as $county) {
                    echo '<option value="' . $county['id'] . '">' . $county['name'] . ' County</option>';
                }
                ?>
            </select>
            <select name="towns" id="towns" class="form-control" disabled>
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
                    <input class="form-control"  type="number" name="min_area" id="min_area" min=0 placeholder="Min">
                    <p>—</p>
                    <input class="form-control"  type="number" name="max_area" id="max_area" min=0 placeholder="Max">
                </div>
            </div>
            <div>
                <label>Price</label>
                <div>
                    <input class="form-control"  type="number" name="min_price" id="min_price" min=0 placeholder="Min">
                    <p>—</p>
                    <input class="form-control"  type="number" name="max_price" id="max_price" min=0 placeholder="Max">
                </div>
            </div>
        </div>
        <button class="btn btn-primary">Find</button>
    </form>
</aside>