<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container img {
            height: 300px;
            width: 600px;
        }

        .box {
            background: #eaf2ff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
            max-height: 300px;
            overflow-y: auto;
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .list-item {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            justify-items: start;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .list-item span {
            padding: 0 10px;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-decline {
            background-color: rgb(231, 15, 15);
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .footer {
            max-width: 60%;
            margin: 10px auto 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: right;
        }

        .confirmed-count {
            flex-grow: 1;
            text-align: right;
        }

        .btn-primary {
            background-color: #007BFF;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-group {
            display: flex;
            gap: 30px;
        }
    </style>
</head>

<body>

    <?php if (isset($data['Registration']) && !empty($data['Registration'])): ?>
        <section class="banner">
            <?php
            $firstPerson = true;
            foreach ($data['Registration'] as $registration): ?>
                <?php if ($firstPerson):
                    $images = explode(',', $registration['image']);
                    if (!empty($images[0])): ?>
                        <div class="container">
                            <img id="activityImage" src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image">
                        </div>
                    <?php endif; ?>
                    <?php $firstPerson = false; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>

        <?php
        $firstPerson = true;
        foreach ($data['Registration'] as $registration): ?>
            <?php if ($firstPerson): ?>
                <h2><?php echo $registration['name']; ?></h2>
                <?php $firstPerson = false; ?>
            <?php endif; ?>
        <?php endforeach; ?>

        <div class="box">
            <h3>ยืนยันรายชื่อผู้เข้าร่วมกิจกรรม</h3>
            <ol style="list-style: none; padding: 0;">
                <?php
                $confirmedCount = 0;
                foreach ($data['Registration'] as $registration):
                    if ($registration['status'] == 'Approved') {
                        $confirmedCount++;
                    }
                ?>
                    <li class="list-item">
                        <span><?php echo $registration['Full_name']; ?></span>
                        <span><?php echo $registration['Gender']; ?></span>
                        <span><?php echo $registration['status']; ?></span>
                        <div class="btn-group">
                            <form action="/updatestatus" method="POST">
                                <input type="hidden" name="aid" value="<?php echo $registration['aid']; ?>">
                                <input type="hidden" name="uid" value="<?php echo $registration['uid']; ?>">
                                <input type="hidden" name="action" value="Approve">
                                <button type="submit" class="btn-success">ยืนยัน</button>
                            </form>

                            <form action="/updatestatus" method="POST">
                                <input type="hidden" name="aid" value="<?php echo $registration['aid']; ?>">
                                <input type="hidden" name="uid" value="<?php echo $registration['uid']; ?>">
                                <input type="hidden" name="action" value="Rejected">
                                <button type="submit" class="btn-decline">ปฏิเสธ</button>
                            </form>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>

        <!-- จำนวนผู้ยืนยัน + ปุ่มเช็คข้อมูลสถิติ (อยู่นอกกล่อง) -->
        <div class="footer">
            <p class="confirmed-count"><strong>จำนวนผู้ยืนยัน:</strong> <?php echo $confirmedCount; ?></p>
            <button class="btn-primary">เช็คข้อมูลสถิติ</button>
        </div>
    <?php else: ?>
        <p>ยังไม่การขอเข้าร่วม</p>
    <?php endif; ?>

    <script>
        // ฟังก์ชันเพื่อรีเฟรชหน้าหลังจากการอัพเดต
        function reloadPage() {
            setTimeout(function() {
                location.reload(); // รีเฟรชหน้า
            }, 500); // รอครึ่งวินาทีเพื่อให้การอัพเดตเสร็จสมบูรณ์
        }

        // เพิ่มในฟอร์มที่ใช้ส่งคำขอ
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', reloadPage); // เมื่อส่งฟอร์มจะรีเฟรชหน้า
        });
    </script>

</body>

</html>