<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận xóa khách hàng</title>
    
    <link rel="stylesheet" href="views\styles\delete.css">
</head>
<body>
    <div class="delete-container">
        <h2>Xác nhận xóa khách hàng</h2>
        <div class="warning-message">
            <p>Bạn có chắc chắn muốn xóa thông tin khách hàng này không?</p>
        </div>
        <div class="customer-info">
            <p><strong>Tên:</strong> <?php echo htmlspecialchars(string: $customer->name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars(string: $customer->email); ?></p>
            <p><strong>Địa chỉ:</strong> <?php echo htmlspecialchars(string: $customer->address); ?></p>
        </div>
        <div class="button-group">
            <form method="POST" action="index.php?action=delete&id=<?php echo $customer->id; ?>&confirm=yes">
                <button type="submit" class="delete-button">Xác nhận xóa</button>
            </form>
            <a href="index.php?action=list" class="cancel-button">Hủy</a>
        </div>
    </div>
</body>
</html>