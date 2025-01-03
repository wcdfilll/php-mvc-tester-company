<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH KHÁCH HÀNG</title>
    <link rel="stylesheet" href="views\styles\list.css">
    <style>
        .add-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #009879;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .add-button:hover {
            background-color: #007f67;
        }
    </style>
</head>

<body>
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <hr>
    <a href="index.php?action=add" class="add-button">Thêm khách hàng</a>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Địa Chỉ</th>
                <th>Thao Tác Thực Hiện</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($customers) && is_array(value: $customers)): ?>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?php echo htmlspecialchars(string: $customer['name']) ?></td>
                    <td><?php echo htmlspecialchars(string: $customer['email']) ?></td>
                    <td><?php echo htmlspecialchars(string: $customer['address']) ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?php echo htmlspecialchars(string: $customer['id']);?>">Sửa</a>
                        <a href="index.php?action=delete&id=<?php echo htmlspecialchars(string: $customer['id']);?>">Xoá</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>