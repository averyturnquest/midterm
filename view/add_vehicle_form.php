<?php include '../view/admin_header.php';?>

<section>
        <h2>Add Vehicle</h2>
        <label>Make:</label>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <form action="." method="get" id="list_header_select" class="list_header_select">
            <input type="hidden" name="action" value="make">
            <select name="make_id" required>
                <?php foreach($makes as $make) : ?>
                    <?php if($make_id == $make['makeID']) { ?>
                        <option value="<?=$make['makeID'] ?>" selected>
                        <?php } else { ?>
                            <option value="<?=$make['makeID'] ?>">
                            <?php } ?>
                            <?=$make['makeName'] ?>
                        </option>
                        <?php endforeach; ?>
            </select>
            </form>
            
            <label>Type:</label>
            <form action="." method="get" id="list_header_select" class="list_header_select">
            <input type="hidden" name="action" value="type">
            <select name="type_id" required>
                <?php foreach($types as $type) : ?>
                    <?php if($type_id == $type['typeID']) { ?>
                        <option value="<?=$type['typeID'] ?>" selected>
                        <?php } else { ?>
                            <option value="<?=$type['typeID'] ?>">
                            <?php } ?>
                            <?=$type['typeName'] ?>
                        </option>
                        <?php endforeach; ?>
            </select>
            </form>
            
            <label>Class:</label>
            <form action="." method="get" id="list_header_select" class="list_header_select">
            <input type="hidden" name="action" value="class">
            <select name="class_id" required>
                <?php foreach($classes as $class) : ?>
                    <?php if($class_id == $class['classID']) { ?>
                        <option value="<?=$class['classID'] ?>" selected>
                        <?php } else { ?>
                            <option value="<?=$class['classID'] ?>">
                            <?php } ?>
                            <?=$class['className'] ?>
                        </option>
                        <?php endforeach; ?>
            </select>
            </form>

            <form action="." method="post">
            <label>Year:</label>
            <input type="hidden" name="action" value="add_vehicle">
            <input type="hidden" name="make_id" value="<?php echo $make_id; ?>">
            <input type="text" id="year" name="year" required>
            <br>
            <label>Model:</label>
            <input type="text" id="model" name="model" required>
            <br>
            <label>Price:</label>
            <input type="text" id="price" name="price" required>
            <br>
            <button type="submit" name="add_vehicle" value="add_vehicle">Add Vehicle</button>
            </form>
</form>
</section>

<p><a href=".?action=list_vehicles">View Full Vehicle List</a></p>
<p><a href=".?action=list_makes">View/Edit Vehicle Makes</a></p>
<p><a href=".?action=list_types">View/Edit Vehicle Types</a></p>
<p><a href=".?action=list_classes">View/Edit Vehicle Classes</a></p>
<?php include '../view/admin_footer.php';?>