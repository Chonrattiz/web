<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$firstName = $_SESSION['full_name'] ?? 'Guest';
?>

<section class="d-flex justify-content-center mt-5">
    <div class="card shadow p-4" style="width: 900px;">
    <h4 class="fw-bold gradient-text" style="margin-left: 80px;"> <?= htmlspecialchars($firstName); ?> </h4>
        <div class="card-body">
            <h5 class="card-title mb-4">Create Activity</h5>
            <form action="/create" method="post"  enctype="multipart/form-data">
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
        <label for="activityImage" class="form-label">อัปโหลดรูปกิจกรรม</label>
        <input type="file" class="form-control" id="activityImage" name="image" accept="image/*">
    </div>

    <div class="mb-3">
    <label for="maxParticipants" class="form-label">รับคนสมัครจำนวน</label>
    <input type="number" class="form-control" id="maxParticipants" name="people" placeholder="รับคนสมัครจำนวน" min="1" required>
</div>


                <button type="submit" class="btn btn-primary w-100">สร้าง</button>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
