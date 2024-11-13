<form action="?action=update&controller=students" method="POST">
    <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
    Tên
    <input type="text" name="name" value="<?php echo $student['name'] ?>">
    Lớp
    <select name="class_id">
        <?php foreach ($classes as $class){ ?>
            <option value="<?php echo $class['id'] ?>">
                <?php echo $class['name'] ?>
            </option>
        <?php } ?>
    </select>
    <button type="submit">Sửa</button>
</form>