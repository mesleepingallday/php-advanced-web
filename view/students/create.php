<form action="?action=store&controller=students" method="POST">
    Tên
    <input type="text" name="name">
    Lớp
    <select name="class_id" id="">
        <?php foreach ($classes as $class){ ?>
            <option value="<?php echo $class['id'] ?>">
                <?php echo $class['name'] ?>
            </option>
        <?php } ?>
    </select>
    <button type="submit">Thêm</button>
</form>