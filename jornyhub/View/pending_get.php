<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Itim', cursive;
        }

        .container {
            width: 1433px;
            height: 340px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #3F627E;
            margin: auto;
        }

        .col {
            text-align: center;
            padding: 10px;
        }

        .col-1 {
            flex: 1;
        }

        .col-1 img {
            width: 500px;
            height: 320px;
            object-fit: cover;
            margin-left: 50px;
        }

        .col-2 {
            flex: 2;
            text-align: left;
            padding-left: 20px;
            width: 500px;
            height: 300px;
            background-color: rgba(238, 228, 228, 0.8);
        }

        .col-3 {
            flex: 1;
            display: flex;
            flex-direction: row;
            gap: 15px;
        }

        p {
            font-size: 16px;
            font-weight: 500;
            line-height: 1.6;
            text-align: justify;
            margin: 10px 0;
            padding-right: 10px;
        }

        .d-flex.row {
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 10px;
        }

        .check {
            display: flex;
            align-items: self-end;
            margin-top: 10px;
            margin-left: 400px;
            background-color: #C3CD7C;
            border: none;
            padding: 10px;
            border-radius: 20px;
        }

        .icon-user img {
            width: 40px;
            height: 40px;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            color: #3F627E;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h1>กิจกรรมที่รอดำเนินการ</h1>

    <?php
    // ตรวจสอบว่า 'activity' ถูกส่งมาจากฟังก์ชัน renderView
    if (isset($data['activity']) && !empty($data['activity'])):
        $activities = $data['activity'];  // ดึงข้อมูลกิจกรรมจาก $data

        // ลูปแสดงกิจกรรมทั้งหมด
        foreach ($activities as $activity):
    ?>
            <div class="container">
                <div class="col col-1">
                    <?php
                    $images = explode(',', $activity['image']);
                    ?>
                    <img src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image" />
                </div>

                <div class="col col-2">
                    <div class="d-flex row">
                        <h2><?php echo htmlspecialchars($activity['name']); ?></h2>
                    </div>
                    <div class="col">
                        <p><?php echo htmlspecialchars($activity['description']); ?></p>
                    </div>
                </div>

                <div class="col col-3">
                    <!-- You can add more content here if needed -->
                </div>
            </div>

            <div style="display: flex; width: 1443px; height: 70px; background-color: white;">
                <!-- You can add footer content here -->
            </div>
        <?php
        endforeach;
    else:
        ?>
        <div style="margin-left: 500px;">
            <h2>ไม่มีกิจกกรรมทีรอกำเนินการ</h2>
        </div>
    <?php
    endif;
    ?>

</body>

</html>