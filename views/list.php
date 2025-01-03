<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH KHÁCH HÀNG</title>
</head>

<style>
    h1{
        font-family: 'Arial', sans-serif;
    }
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    font-family: 'Arial', sans-serif;
    width: 100%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th, .styled-table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #ddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
        cursor: pointer;
    }
</style>

<body>
    <h1>DANH SÁCH KHÁCH HÀNG</h1>
    <hr>
    <table class="styled-table">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Thao Tác Thực Hiện</th>
        </tr>
        <tr>
            <td>Test</td>
        </tr>
    </table>
</body>
</html>