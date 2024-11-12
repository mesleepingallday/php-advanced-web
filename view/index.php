<h1>Danh sách sinh viên</h1>
<a href="?action=create">Thêm sinh viên</a>
<table border="1" width="100%">
    <tr>
        <th>Mã sinh viên</th>
        <th>Họ tên sinh viên</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($students as $student){ ?>
        <tr>
            <td><?php echo $student['student_id'] ?></td>
            <td><?php echo $student['student_name'] ?></td>
            <td>
                <a href="?action=edit&id=<?php echo $student['student_id'] ?>">Sửa</a><br>
                <a href="?action=delete&id=<?php echo $student['student_id'] ?>">Xóa</a>
            </td>
        </tr>
    <?php } ?>

</table>