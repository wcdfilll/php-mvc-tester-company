<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa khách hàng</title>
    
    <link rel="stylesheet" href="views\styles\edit.css">
</head>
<body>
    <div class="form-container">
        <h1>Chỉnh sửa khách hàng</h1>
        <?php if ($customer): ?>
            <form method="POST" action="index.php?action=edit&id=<?php echo $customer->id; ?>">
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars(string: $customer->name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars(string: $customer->email); ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars(string: $customer->address); ?>" required>
                </div>
                <button type="submit">Cập nhật</button>
                <a href="index.php?action=list">Quay lại danh sách</a>
            </form>
        <?php else: ?>
            <p>Không tìm thấy khách hàng</p>
        <?php endif; ?>
    </div>
</body>
</html>