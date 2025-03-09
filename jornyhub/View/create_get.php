<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ลิงก์ฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        /* ใช้ฟอนต์ Itim สำหรับทั้งเว็บ */
        body {
            font-family: 'Itim', sans-serif;
        }

        .card-title,
        .form-label,
        .btn {
            font-family: 'Itim', sans-serif;
        }

        .fw-bold {
            font-family: 'Itim', sans-serif;
        }

        .gradient-text {
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
    $firstName = $_SESSION['full_name'] ?? 'Guest';
    ?>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success"><?= $_SESSION['success'];
                                            unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <section class="d-flex justify-content-center mt-5">
        <div class="card shadow p-4" style="width: 900px;">
            <h4 class="fw-bold gradient-text" style="margin-left: 80px;"> <?= htmlspecialchars($firstName); ?> </h4>
            <div class="card-body">
                <h5 class="card-title mb-4">Create Activity</h5>
                <form action="/create" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="activityName" class="form-label">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" id="activityname" name="activityname" placeholder="ชื่อกิจกรรม" required>
                    </div>
                    <div class="mb-3">
                        <label for="activityDate" class="form-label">วันที่จัดกิจกรรม</label>
                        <input type="date" class="form-control" id="startdate" name="startdate" required>
                    </div>
                    <div class="mb-3">
                        <label for="activityDate" class="form-label">วันสุดท้ายที่รับสมัคร</label>
                        <input type="date" class="form-control" id="enddate" name="enddate" required>
                    </div>
                    <div class="mb-3">
                        <label for="activityDescription" class="form-label">ลายละเอียดกิจกรรม</label>
                        <textarea class="form-control" id="activityDescription" rows="5" name="description" placeholder="ลายละเอียดกิจกรรม"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="activityLocation" class="form-label">สถานที่จัดกิจกรรม</label>
                        <input type="text" class="form-control" id="activityLocation" name="location" placeholder="สถานที่จัดกิจกรรม" required>
                    </div>

                    <div class="mb-3">
                        <label for="activityCategory" class="form-label">หมวดหมู่กิจกรรม</label>
                        <select class="form-control" id="activityCategory" name="category" required>
                            <option value="" disabled selected>เลือกหมวดหมู่กิจกรรม</option>
                            <option value="1">กีฬา</option>
                            <option value="2">จิตอาสา</option>
                            <option value="3">ดนตรี</option>
                            <option value="4">บันเทิง</option>
                            <option value="5">วิชาการ</option>
                            <option value="6">สร้างสรรค์</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="images">เลือกภาพ (สามารถเลือกหลายภาพ):</label>
                        <input type="file" name="image[]" multiple accept="image/jpeg, image/png, image/jpg" />
                    </div>

                    <div class="mb-3">
                        <label for="maxParticipants" class="form-label">รับคนสมัครจำนวน</label>
                        <input type="number" class="form-control" id="maxParticipants" name="people" placeholder="รับคนสมัครจำนวน" min="1" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">สร้าง</button>

                </form>
                <a href="/index"><button type="submit" class="btn btn-danger w-100">ยกเลิก</button></a>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>