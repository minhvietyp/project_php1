<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form PHP Đơn Giản</title>
</head>
<body>

    <h1>Chào mừng!</h1>

    <form method="POST" action="">
        <label>Nhập tên của bạn:</label>
        <input type="text" name="username" required>
        <button type="submit" name="submit">Gửi</button>
    </form>

    <hr>

    <?php
    // Kiểm tra nếu người dùng đã nhấn nút "Gửi"
    if (isset($_POST['submit'])) {
        // Lấy dữ liệu từ ô nhập liệu
        $name = htmlspecialchars($_POST['username']); 
        echo "<h2>Xin chào, " . $name . "! Chúc bạn một ngày tốt lành.</h2>";
    }
    ?>

</body>
</html>
