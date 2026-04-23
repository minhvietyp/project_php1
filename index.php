<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang PHP Đơn Giản</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { color: #333; }
    </style>
</head>
<body>

    <div class="container">
        <h1>Chào mừng bạn đến với dự án PHP!</h1>
        
        <?php
            // Logic PHP đơn giản: hiển thị lời chào theo thời gian
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $hour = date('H');
            $greeting = ($hour < 12) ? "Chào buổi sáng!" : "Chào buổi chiều!";
            
            echo "<p><strong>" . $greeting . "</strong></p>";
            echo "<p>Bây giờ là: " . date('H:i:s - d/m/Y') . "</p>";
        ?>
    </div>

</body>
</html>