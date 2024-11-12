<form action="?action=update" method="POST">
    <input type="hidden" name="id" value="<?php echo $student['student_id'] ?>">
    Tên
           <input type="text" name="name" value="<?php echo $student['student_name'] ?>" />
    <br>
    <button type="submit">Sửa</button>

</form>