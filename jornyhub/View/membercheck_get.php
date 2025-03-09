<?php
// ตรวจสอบและกำหนดค่าตัวแปร
$activity_name = isset($activity['name']) ? htmlspecialchars($activity['name']) : "ไม่พบชื่อกิจกรรม";
$images = isset($activity['image']) ? explode(',', $activity['image']) : ['default.jpg'];

// ข้อมูลตัวอย่าง (อาจต้องดึงจากฐานข้อมูล)
$time_remaining = "4.59"; // เวลาสุ่มตัวอย่าง
$current_participants = 15;
$max_participants = 20;
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiRA CORE CAMP #4</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: white;
        }

        .banner img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }

        .camp-info {
            text-align: center;
            margin-top: 20px;
        }

        .check {
            background-color: #3F627E;
            color: white;
            border: 2px solid black;
            padding: 5px 15px;
            font-size: 14px;
            border-radius: 20px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            display: inline-block;
            text-decoration: none;
        }

        .check:hover {
            background-color: #2c4a63;
        }
    </style>
</head>

<body>
    <main>
        <section class="banner">
            <!-- รูปภาพกิจกรรมในฟอร์ม -->
            <form action="/homeactivity" method="POST">
                <input type="hidden" name="activity_name" value="<?php echo htmlspecialchars($activity_name); ?>"> <!-- ส่งชื่อกิจกรรม -->
                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>"> <!-- ส่ง ID กิจกรรม -->
                <button type="submit" style="border: none; background: none;">
                    <img src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image">
                </button>
            </form>
        </section>
        <section class="camp-info">
            <h2><?php echo $activity_name; ?></h2> <!-- ✅ แสดงชื่อกิจกรรม -->
            <p>มีเวลาเช็คชื่ออีก : <?php echo $time_remaining; ?></p>

            <!-- ปุ่มกดไปหน้าเช็คชื่อ -->
            <a href="/memberlist" class="check">เช็คชื่อ</a>

            <p><?php echo "$current_participants/$max_participants"; ?> <span class="icon">👤</span></p>
        </section>
    </main>
</body>

</html>