<?php
// ข้อมูลโปรไฟล์ (สมมติว่าได้จากฐานข้อมูล)
$user = [
    'name' => 'John Doe',
    'email' => 'john.doe@gmail.com',
    'gender' => '?',
    'activities' => [
        'joined' => 2,
        'pending' => 1,
        'mine' => 1
    ]
];
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .profile-container { max-width: 1300px; margin: auto; }
        .card-custom { border-radius: 10px; }
        .profile-header { background-color: #335c81; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .profile-img { width: 100px; height: 100px; border-radius: 50%; background: white; display: flex; align-items: center; justify-content: center; font-size: 40px; margin: auto; }

        /* แถวข้อมูลโปรไฟล์ + Box 800px */
        .profile-content {
            display: flex;
            gap: 20px; /* ช่องว่างระหว่าง Box */
            align-items: flex-start;
        }

        .box-fixed { max-width: 500px; width: 100%; } /* Box ข้อมูลโปรไฟล์ */
        .right-box { max-width: 800px; width: 100%; } /* Box ขนาด 800px */
        .profile-header {
    background-color: #335c81;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 10px 10px 0 0;
    position: relative; /* ให้ปุ่มยึดตามกรอบของ profile-header */
}

.edit-profile-btn {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background-color: white;
    color: #335c81;
    border: 1px solid #335c81;
    padding: 5px 10px;
    border-radius: 5px;
    font-weight: bold;
}

.edit-profile-btn:hover {
    background-color: #335c81;
    color: white;
}

    </style>
</head>
<body>

<div class="container mt-5 profile-container">
    <!-- ส่วนหัวโปรไฟล์ -->
    <div class="card shadow card-custom">
        <div class="profile-header">
            <div class="profile-img">👤</div>
            <h3>Journey Hub</h3>
            <button class="btn edit-profile-btn">Edit Profile</button> 
        </div>
    </div>

    <!-- จัด Box ข้อมูลโปรไฟล์ และ Box 800px ให้อยู่ข้างกัน -->
    <div class="profile-content mt-3">
        <!-- Box ข้อมูลโปรไฟล์ -->
        <div class="card shadow card-custom box-fixed">
            <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <p><strong>Name:</strong> <?= $user['name'] ?></p>
                <p><strong>Email:</strong> <?= $user['email'] ?></p>
                <p><strong>Gender:</strong> <?= $user['gender'] ?></p>
            </div>
        </div>

        <!-- Box ขนาด 800px -->
        <div class="card shadow card-custom right-box">
            <div class="card-body">
                <h5 class="card-title">Additional Box</h5>
                <p>เนื้อหาของ Box ขนาด 800px สามารถใส่ข้อมูลหรือฟังก์ชันต่างๆ ได้ที่นี่</p>
            </div>
        </div>
    </div>

    <!-- Box สถานะกิจกรรม (อยู่ใต้ Box ข้อมูลโปรไฟล์) -->
    <div class="card shadow mt-3 card-custom box-fixed">
        <div class="card-body">
            <h5 class="card-title">Status</h5>
            <p>กิจกรรมที่เข้าร่วมแล้ว: <span class="text-primary"><?= $user['activities']['joined'] ?></span></p>
            <p>รอดำเนินการ: <span class="text-primary"><?= $user['activities']['pending'] ?></span></p>
            <p>กิจกรรมของฉัน: <span class="text-primary"><?= $user['activities']['mine'] ?></span></p>
        </div>
    </div>
</div>

</body>
</html>
