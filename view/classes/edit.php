<form action="?action=update&controller=classes" method="POST">
    <input type="hidden" name="id" value="<?php echo $class['id']; ?>">
    Tên
    <input type="text" name="name" value="<?php echo $class['name'] ?>">
    <button type="submit">Thêm</button>
</form>