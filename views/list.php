<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH KHÁCH HÀNG</title>

    <link rel="stylesheet" href="views\styles\list.css">
</head>

<body>
    <?php
    // try {
    //     $db = new PDO(dsn: "mysql:host=localhost;dbname=qlkh_tester_aht", username: "root", password: "");
    //     $db->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    //     echo "<div class='connection-status success'>Kết nối database thành công!</div>";
    // } catch(PDOException $e) {
    //     echo "<div class='connection-status error'>Kết nối database thất bại: " . $e->getMessage() . "</div>";
    // }
    ?>

    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <hr>
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
    <div class="pagination" style="text-align: center; margin: 20px 0;">
        <?php
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        for($i = 1; $i <= 5; $i++): // Giả sử có 5 trang
        ?>
            <a href="index.php?action=list&page=<?php echo $i; ?>" 
            style="margin: 0 5px; padding: 5px 10px; text-decoration: none; 
                    <?php echo $current_page == $i ? 'background-color: #009879; color: white;' : ''; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>
</body>

</html>