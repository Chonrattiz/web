<?php

?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Itim', cursive;
        }

        .profile-container {
            max-width: 1300px;
            margin: auto;
        }

        .card-custom {
            border-radius: 10px;
        }

        .profile-header {
            background-color: #335c81;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: auto;
        }

        .profile-name {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: auto;
            width: 200px;
        }

        .profile-content {
            display: flex;
            gap: 20px;
            /* ช่องว่างระหว่าง Box */
            align-items: flex-start;
        }

        .box-fixed {
            max-width: 500px;
            width: 100%;
        }

        /* Box ข้อมูลโปรไฟล์ */
        .right-box {
            max-width: 800px;
            width: 100%;
        }

        /* Box ขนาด 800px */
        .profile-header {
            background-color: #335c81;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            position: relative;
            /* ให้ปุ่มยึดตามกรอบของ profile-header */
        }

        .activity-links {
            display: flex;
            /* ใช้ Flexbox เพื่อจัดตำแหน่ง */
            flex-direction: column;
            /* เปลี่ยนจากแถวเป็นคอลัมน์ */
            gap: 20px;
            /* กำหนดระยะห่างระหว่างลิงก์ */
            align-items: center;
            /* จัดลิงก์ให้อยู่กลาง */
        }

        a.btn-link {
            text-decoration: none;
            /* เอาเส้นใต้ลิงก์ออก */
            color: #007bff;
            /* เปลี่ยนสีลิงก์ */
            font-weight: bold;
            /* ทำให้ตัวอักษรหนา */
            display: inline-block;
            /* ทำให้สามารถคลิกได้ง่าย */
            padding: 5px 10px;
            /* เพิ่มระยะห่างภายใน */
            border-radius: 5px;
            /* ทำให้มุมโค้งมน */
            transition: background-color 0.3s ease, color 0.3s ease;
            /* เพิ่มเอฟเฟกต์เมื่อ hover */
        }

        a.btn-link:hover {
            background-color:rgba(194, 194, 224, 0.53);
            /* เปลี่ยนพื้นหลังเมื่อ hover */
            color:rgb(5, 36, 68);
            /* เปลี่ยนสีตัวอักษรเมื่อ hover */
        }
    </style>
</head>

<body>

    <div class="container mt-5 profile-container">
        <!-- ส่วนหัวโปรไฟล์ -->
        <div class="card shadow card-custom">
            <div class="profile-header">
                <div class="profile-img">👤</div>

                <div class="profile-name"> <?= htmlspecialchars($firstName); ?> </div>


            </div>
        </div>



        <div class="profile-content mt-3">
            <!-- Box ข้อมูลโปรไฟล์ -->
            <div class="card shadow card-custom box-fixed">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <p><strong>Name:</strong> <?= htmlspecialchars($firstName); ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($email); ?></p>
                    <p><strong>Gender:</strong> <?= isset($gender) ? htmlspecialchars($gender) : 'Not specified' ?></p>


                </div>
            </div>

            <!-- Box ขนาด 800px -->
            <div class="card shadow card-custom right-box">
                <div class="card-body">
                    <h5 class="card-title">Additional Box</h5>

                </div>
            </div>
        </div>

        <?php if (isset($data['pending']) && !empty($data['pending'])):
            $pending = $data['pending'];  // ดึงข้อมูลกิจกรรมจาก $data

            // นับจำนวนกิจกรรม
            $pendingCount = count($pending);
        ?>

        <?php endif; ?>

        <?php if (isset($data['joined']) && !empty($data['joined'])):
            $joined = $data['joined'];  // ดึงข้อมูลกิจกรรมจาก $data

            // นับจำนวนกิจกรรม
            $joinedCount = count($joined);
        ?>
        <?php endif; ?>


        <?php if (isset($data['activity']) && !empty($data['activity'])):
            $activities = $data['activity'];  // ดึงข้อมูลกิจกรรมจาก $data

            // นับจำนวนกิจกรรม
            $activityCount = count($activities);
        ?>


        <?php endif; ?>

        <!-- Box สถานะกิจกรรม (อยู่ใต้ Box ข้อมูลโปรไฟล์) -->
        <div class="card shadow mt-3 card-custom box-fixed">
            <div class="card-body">
                <h5 class="card-title">Status</h5>

                <div style="display: flex; flex-direction: column; margin-top: 20px;">
                    <a href="/approved" class="btn-link">
                        <p>กิจกรรมที่เข้าร่วมแล้ว : <span class="text-primary"><?= isset($joinedCount) && $joinedCount > 0 ? $joinedCount : 0; ?></span></p>
                    </a>

                    <a href="/pending" class="btn-link">
                        <p>รอดำเนินการ : <span class="text-primary"><?= isset($pendingCount) && $pendingCount > 0 ? $pendingCount : 0; ?></span></p>
                    </a>

                    <a href="/myactivity" class="btn-link">
                        <p>กิจกรรมของฉัน : <span class="text-primary"><?= isset($activityCount) && $activityCount > 0 ? $activityCount : 0; ?></span></p>
                    </a>




                </div>



            </div>
        </div>
    </div>

</body>

</html>