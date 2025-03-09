<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ลิงก์ฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        /* ใช้ฟอนต์ Itim ทั่วทั้งเว็บ */
        body {
            font-family: 'Itim', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container img {
            max-width: 100%;
            height: auto;
            width: 600px;
        }

        .container-title {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .container-titlep {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .container-info {
            margin: 0 30%;
            font-family: 'Itim', sans-serif;
            /* ใช้ฟอนต์ Itim */
            font-size: 15px;
            font-weight: 500;
            line-height: 2.0rem;
        }

        .title-info {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .detail {
            width: 40%;
            margin: 0 30%;
            font-family: 'Itim', sans-serif;
            /* ใช้ฟอนต์ Itim */
            font-size: 15px;
            font-weight: 500;
            line-height: 2.2rem;
        }

        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .btn button {
            background-color: #3F627E;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            border: none;
            border-radius: 10px;
        }

        .btn button:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }

        .nav-btn {
            background-color: #3F627E;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
        }

        .nav-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <?php
    // ตรวจสอบว่า $activity มีข้อมูลหรือไม่
    if (isset($data['activity']) && !empty($data['activity'])):
        $activity = $data['activity'];
    ?>

        <div class="container">
            <?php
            $images = explode(',', $activity['image']);
            if (!empty($images[0])): ?>
                <?php if (count($images) > 1): ?>
                    <button onclick="prevImage()" class="nav-btn">&lt;</button>
                <?php endif; ?>

                <img id="activityImage" src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image">

                <?php if (count($images) > 1): ?>
                    <button onclick="nextImage()" class="nav-btn">&gt;</button>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="container-title">
            <h1><?php echo htmlspecialchars($activity['name']); ?></h1>
        </div>
        <div class="container-titlep">
            <h3>ข้อมูลเบื้องต้นกิจกรรม</h3>
        </div>

        <div class="container-info">
            <div class="date-activity">
                <h4 style="color: green;">วันที่จัดกิจกรรม</h4>
                <h4><?php echo htmlspecialchars($activity['start_date']); ?></h4>
            </div>
            <div class="endregister">
                <h4 style="color: green;">วันสุดท้ายที่รับสมัคร</h4>
                <h4><?php echo htmlspecialchars($activity['end_date']); ?></h4>
            </div>
            <div class="quantity">
                <h4 style="color: green;">จำนวนคนที่รับ</h4>
                <h4><?php echo htmlspecialchars($activity['max_people']); ?></h4>
            </div>

        </div>
        <div class="title-info">
            <h3>คำอธิบายกิจกรรม</h3>
        </div>
        <div class="detail">
            <p class="activity-description"> <?php echo nl2br(htmlspecialchars($activity['description'])); ?></p>
        </div>

        <div class="btn">
            <form action="/join" method="post">
                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">

                <?php
                if (isset($_SESSION['uid'])) {
                    echo '<input type="hidden" name="uid" value="' . htmlspecialchars($_SESSION['uid']) . '">';
                } else {
                    echo '<p style="color: red;">กรุณาเข้าสู่ระบบก่อนสมัคร</p>';
                }
                ?>

                <button type="submit">สมัครเข้าร่วมกิจกรรม</button>
            </form>
        </div>

    <?php
    else:
        echo "<p>ไม่พบข้อมูลกิจกรรมนี้.</p>";
    endif;
    ?>

    <script>
        let images = <?php echo json_encode($images); ?>;
        let currentIndex = 0; // กำหนดตำแหน่งของรูปเริ่มต้น

        function showImage(index) {
            if (index >= 0 && index < images.length) {
                document.getElementById("activityImage").src = images[index];
                currentIndex = index;
            }
        }

        function prevImage() {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = images.length - 1;
            showImage(newIndex);
        }

        function nextImage() {
            let newIndex = currentIndex + 1;
            if (newIndex >= images.length) newIndex = 0;
            showImage(newIndex);
        }
    </script>

</body>

</html>