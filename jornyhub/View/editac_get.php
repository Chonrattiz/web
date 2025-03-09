<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Activity</title>

    <!-- ลิงก์ฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Itim', cursive;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        .container img {
            max-width: 100%;
            height: auto;
            width: 600px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
        }

        .btn {
            background-color: #3F627E;
            color: white;
            padding: 15px 32px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
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
    <form action="/updateactivity" method="post" enctype="multipart/form-data">
        <?php if (isset($data['activity']) && !empty($data['activity'])):
            $activity = $data['activity'];
            $images = explode(',', $activity['image']);
        ?>
            <div class="container">
                <?php if (!empty($images[0])): ?>
                    <div style="display: flex; align-items: center;">
                        <?php if (count($images) > 1): ?>
                            <button type="button" onclick="prevImage()" class="nav-btn">&lt;</button>
                        <?php endif; ?>
                        <div style="position: relative;">
                            <img id="activityImage" src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image">


                        </div>
                        <?php if (count($images) > 1): ?>
                            <button type="button" onclick="nextImage()" class="nav-btn">&gt;</button>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>


                <div class="row">
                    <label for="image">เพิ่มรูป :</label>
                    <input type="file" name="image[]" multiple accept="image/png, image/jpeg, image/jpg" />
                </div>

                <div class="title">
                    <h2>แก้ไขกิจกรรม</h2>
                </div>
                <div class="form-group">
                    <label for="activityname">ชื่อกิจกรรม</label>
                    <input type="text" id="activityname" name="activityname" value="<?php echo htmlspecialchars($activity['name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="startdate">วันที่จัดกิจกรรม</label>
                    <input type="date" id="startdate" name="startdate" value="<?php echo htmlspecialchars($activity['start_date']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="endregister">วันสุดท้ายที่รับสมัคร</label>
                    <input type="date" id="enddate" name="enddate" value="<?php echo htmlspecialchars($activity['end_date']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="maxParticipants">จำนวนคนที่รับ</label>
                    <input type="number" id="maxParticipants" name="people" value="<?php echo htmlspecialchars($activity['max_people']); ?>" min="1" required>
                </div>

                <div class="form-group">
                    <label for="activityDescription">คำอธิบายกิจกรรม</label>
                    <textarea id="activityDescription" name="description" rows="5" required><?php echo htmlspecialchars($activity['description']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="activityCategory">หมวดหมู่กิจกรรม</label>
                    <select id="activityCategory" name="category" required>
                        <option value="" disabled selected>เลือกหมวดหมู่กิจกรรม</option>
                        <option value="1" <?php echo ($activity['cid'] == 1) ? 'selected' : ''; ?>>กีฬา</option>
                        <option value="2" <?php echo ($activity['cid'] == 2) ? 'selected' : ''; ?>>จิตอาสา</option>
                        <option value="3" <?php echo ($activity['cid'] == 3) ? 'selected' : ''; ?>>ดนตรี</option>
                        <option value="4" <?php echo ($activity['cid'] == 4) ? 'selected' : ''; ?>>บันเทิง</option>
                        <option value="5" <?php echo ($activity['cid'] == 5) ? 'selected' : ''; ?>>วิชาการ</option>
                        <option value="6" <?php echo ($activity['cid'] == 6) ? 'selected' : ''; ?>>สร้างสรรค์</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="activityLocation">สถานที่จัดกิจกรรม</label>
                    <input type="text" id="activityLocation" name="location" value="<?php echo htmlspecialchars($activity['location']); ?>" placeholder="สถานที่จัดกิจกรรม" required>
                </div>

                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">

                <div class="btn-container">
                    <button type="submit" class="btn">บันทึก</button>
                </div>
            </div>
        <?php endif; ?>
    </form>
    <!-- ฟอร์มลบรูปภาพ -->
    <form action="/deleteimage" method="post" onsubmit="return confirmDelete()">
        <input type="hidden" name="activityId" value="<?php echo htmlspecialchars($activity['aid']); ?>">
        <input type="hidden" name="imageIndex" id="imageIndex" value="0"> <!-- เริ่มต้นที่ตำแหน่ง 0 -->
        <button type="submit" class="btn delete-btn" style="position: absolute; top: 200px; right: 380px; background-color: red;">ลบรูปนี้</button>
    </form>

    <script>
        let images = <?php echo json_encode($images); ?>;
        let currentIndex = 0;

        // ฟังก์ชันสำหรับแสดงรูป
        function showImage(index) {
            if (index >= 0 && index < images.length) {
                document.getElementById("activityImage").src = images[index];
                currentIndex = index;
                // อัปเดตตำแหน่งใน input hidden
                document.getElementById("imageIndex").value = currentIndex;
            }
        }

        // ฟังก์ชันสำหรับเปลี่ยนไปยังรูปก่อนหน้า
        function prevImage() {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = images.length - 1;
            showImage(newIndex);
        }

        // ฟังก์ชันสำหรับเปลี่ยนไปยังรูปรูปถัดไป
        function nextImage() {
            let newIndex = currentIndex + 1;
            if (newIndex >= images.length) newIndex = 0;
            showImage(newIndex);
        }

        function confirmDelete() {
            return confirm("คุณต้องการลบรูปภาพนี้ใช่หรือไม่?");
        }
    </script>

</body>

</html>