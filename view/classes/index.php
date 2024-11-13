<h1>Danh sách lớp</h1>

<a href="?action=create&controller=classes">Thêm lớp</a>

<table border="1" width="50%">
    <tr>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Chức năng</th>
    </tr>
    <?php foreach ($classes as $class){ ?>
    <tr>
        <td><?php echo $class['id'] ?></td>
        <td><?php echo $class['name'] ?></td>
        <td>
            <a href="?action=edit&controller=classes&id=<?php echo $class['id'] ?>">Sửa</a><br>
            <a href="?action=delete&controller=classes&id=<?php echo $class['id'] ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
</table>