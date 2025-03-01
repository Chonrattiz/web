<?php
    // เชื่อมต่อฐานข้อมูลหรือกำหนดค่าเซสชันที่นี่ถ้าจำเป็น
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
        }
        .check{
            background-color: #3F627E;
    color: white;
    border: 2px solid black;
    padding: 5px 15px; /* ลดขนาด padding ให้ปุ่มเล็กลง */
    font-size: 14px; /* ลดขนาดตัวหนังสือ */
    border-radius: 20px; /* ให้โค้งเล็กลง */
    cursor: pointer;
    transition: 0.3s;
    margin-right: 10px;

        }
    </style>
</head>
<body>    
    <main>
        <section class="banner">
            <img src="https://www.camphub.in.th/wp-content/uploads/2025/01/CiRA-CORE-CAMP-4.jpg" alt="CiRA CORE CAMP #4">
        </section>
        <section class="camp-info">
            <h2>GTC : Cira Core Camp</h2>
            <?php 
                $time_remaining = "4.59"; // เวลาสุ่มตัวอย่าง
                $current_participants = 15;
                $max_participants = 20;
            ?>
            <p>มีเวลาเช็คชื่ออีก : <?php echo $time_remaining; ?></p>
            <form method="POST" action="checkin.php">
                <button type="check" class="check">เช็คชื่อ</button>

            </form>
            <p><?php echo "$current_participants/$max_participants"; ?> <span class="icon">👤</span></p>
        </section>
    </main>
</body>
</html>
