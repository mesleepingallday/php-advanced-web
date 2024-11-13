<h1>Danh sách sinh viên</h1>

<a href="?action=create&controller=students">Thêm sinh viên</a>

<table border="1" width="50%">
    <tr>
        <th>Mã sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Thuộc lớp</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($students as $student){ ?>
    <tr>
        <td><?php echo $student['id'] ?></td>
        <td><?php echo $student['name'] ?></td>
        <td><?php echo $student['class_name'] ?></td>
        <td>
            <a href="?action=edit&controller=students&id=<?php echo $student['id'] ?>">Sửa</a><br>
            <a href="?action=delete&controller=students&id=<?php echo $student['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>