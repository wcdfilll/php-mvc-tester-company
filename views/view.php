<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khách hàng</title>

    <link rel="stylesheet" href="views\styles\view.css">
</head>
<body>
    <div class="customer-detail">
        <h1>Chi tiết khách hàng</h1>
        <?php if ($customer): ?>
            <div class="detail-item">
                <span class="label">Tên:</span>
                <span><?php echo htmlspecialchars(string: $customer->name); ?></span>
            </div>
            <div class="detail-item">
                <span class="label">Email:</span>
                <span><?php echo htmlspecialchars(string: $customer->email); ?></span>
            </div>
            <div class="detail-item">
                <span class="label">Địa chỉ:</span>
                <span><?php echo htmlspecialchars(string: $customer->address); ?></span>
            </div>
            <a href="index.php?action=list">Quay lại danh sách</a>
        <?php else: ?>
            <p>Không tìm thấy khách hàng</p>
        <?php endif; ?>
    </div>
</body>
</html>