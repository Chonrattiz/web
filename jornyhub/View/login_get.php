<head>
    <style>
    

        .card {
            width: 350px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-left: 450px;
        }

        h1 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            text-align: left;
            margin: 5px 0;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            padding: 10px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color:rgb(18, 18, 19);
        }
    </style>
</head>


<body>
    <div class="card">
        <h1>เข้าสู่ระบบ</h1>
        <form action="/login" method="post">
            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="เข้าสู่ระบบ">
        </form>
        <?php


                // แสดงข้อความแจ้งเตือนถ้ามี
                if (isset($_SESSION['message'])) {
                    echo "<p>{$_SESSION['message']}</p>";
                    unset($_SESSION['message']);  // ลบข้อความออกหลังจากแสดงผลแล้ว
                }

?>
    </div>

    <div style="display: flex; margin-left: 450px; margin-top: 50px;">
    <?php
// เรียกฟังก์ชันเพื่อดึงอีเมลทั้งหมดจากฐานข้อมูล
$emails = getAllEmailsFromDatabase();

if ($emails) {
    // ถ้ามีอีเมล
    foreach ($emails as $email) {
        echo "อีเมล: " . $email . "<br>";
    }
} else {
    echo "ไม่พบข้อมูลอีเมล";
}

?>
    </div>
</body>

