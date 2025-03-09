<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row Layout</title>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"> <!-- เพิ่มฟอนต์ Itim -->
    <style>
        body {
            font-family: 'Itim', cursive;
            /* ใช้ฟอนต์ Itim */
        }

        .container {
            width: 1443px;
            height: 400px;
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
            height: 299px;
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

        .buttons {
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            margin-left: 20px;
        }

        .btn-primary {
            background-color: rgb(21, 225, 99);
            color: white;
            border-radius: 10px;
        }

        .btn-secondary {
            background-color: rgb(255, 0, 0);
            color: white;
            border-radius: 10px;
        }

        p {
            font-family: 'Itim', cursive;
            /* ใช้ฟอนต์ Itim */
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
            font-family: 'Itim', cursive;
            /* ใช้ฟอนต์ Itim */
            font-size: 32px;
            font-weight: 700;
            color: #3F627E;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>กิจกรรมของฉัน</h1>
    <?php
    if (isset($data['activity']) && !empty($data['activity'])):
        $activities = $data['activity'];  // ดึงข้อมูลกิจกรรมจาก $data
        foreach ($activities as $activity):
    ?>
            <div class="container">
                <div class="col col-1">
                    <form action="/homeactivity" method="POST">
                        <?php
                        $images = explode(',', $activity['image']);
                        ?>
                        <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                        <button type="submit" style="border: none; background: none;">
                            <img src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image" />
                        </button>
                    </form>
                </div>

                <div class="col col-2">
                    <div class="d-flex row">
                        <h2><?php echo htmlspecialchars($activity['name']); ?></h2>
                        <div class="icon-user">
                            <form action="/memberlist" method="POST">
                                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                                <button type="submit" style="border: none; background: none; padding: 0;">
                                    <img src="https://static.thenounproject.com/png/2863109-200.png" alt="User Icon" style="cursor: pointer;">
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col">
                        <?php echo htmlspecialchars($activity['description']); ?>
                        <div style="display: flex;">
                            <form action="/seewhocheck" method="POST">
                                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                                <input type="hidden" name="uid" value="<?php echo htmlspecialchars($_SESSION['uid']); ?>">
                                <button type="submit" class="check" style="cursor: pointer;">ดูสมาชิกที่มาเช็คชื่อ</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row col-3">
                    <form action="/editac" method="POST">
                        <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                        <div>
                            <button class="buttons btn-primary">แก้ไข</button>
                        </div>
                    </form>
                    <form action="/deleteactivity" method="POST">
                        <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                        <div><button class="buttons btn-secondary">ลบ</button></div>
                    </form>
                </div>
            </div> <!-- ปิด .container -->

            <div style="display: flex; width: 1443px; height: 70px; background-color: white;">
            </div>
        <?php
        endforeach;
    else:
        ?>
        <div style="margin-left: 500px;">
            <h2>ไม่มีกิจกกรรมที่คุณสร้าง</h2>
        </div>
    <?php
    endif;
    ?>

    <a href="/create"><button class="btn-primary">สร้างกิจกรรม</button></a>

</body>

</html>