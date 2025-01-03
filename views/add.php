<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm khách hàng mới</title>
    
    <link rel="stylesheet" href="views\styles\add.css">
</head>
<body>
    <div class="form-container">
        <h1>Thêm khách hàng mới</h1>
        <form method="POST" action="index.php?action=add">
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <button type="submit">Thêm khách hàng</button>
            <a href="index.php?action=list">Quay lại danh sách</a>
        </form>
    </div>
</body>
</html>