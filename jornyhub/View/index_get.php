<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Hub</title>
    <!-- ลิงก์ฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        /* ใช้ฟอนต์ Itim ในทุกๆ ส่วนของเว็บไซต์ */
        body {
            font-family: 'Itim', sans-serif;
        }

        /* สไตล์ของ container-ii */
        .container-ii {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            font-family: 'Itim', sans-serif;
            font-size: 25px;
            font-weight: 500;
            line-height: 2.0rem;
        }

        .container-ii h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            font-size: 30px;
        }

        .container-ii p {
            width: 70%;
            margin: 0 30%;
            font-family: 'Itim', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 2.2rem;
        }

        /* สไตล์ของ content-con */
        .content-con {
            display: flex;
            gap: 30px;
            justify-content: center;
            width: 60%;
            margin-left: 20%;
            padding: 20px;
        }

        .content-title {
            margin: 2rem 10%;
            padding: 10px;
        }

        .content-item {
            width: 100%;
            height: auto;
            margin-left: 0;
            border: 1px solid #D9D9D9;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
        }

        .content-item img {
            width: 300px;
            height: 200px;
            object-fit: cover;
        }

        .content-item p {
            width: 280px;
            font-family: 'Itim', sans-serif;
            font-size: 15px;
            color: #757575;
            padding-left: 10px;
            text-align: center;
            line-height: 1.8rem;
        }

        .content-item h4 {
            font-family: 'Itim', sans-serif;
            font-size: 18px;
            line-height: 1.6rem;
            padding-left: 10px;
            text-align: center;
        }

        /* สไตล์ของ maincontent */
        .maincontent {
            width: 1443px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #3F627E;
            margin: auto;
        }

        .maincontent-con {
            display: flex;
            width: 100%;
        }

        .maincontent-img img {
            width: 500px;
            height: 299px;
            object-fit: cover;
            margin-left: 100px;
        }

        .maincontent-info {
            text-align: left;
            padding-left: 20px;
            width: 500px;
            height: 300px;
            background-color: rgba(238, 228, 228, 0.8);
        }

        .maincontent-info h3 {
            font-family: 'Itim', sans-serif;
            font-size: 22px;
            font-weight: 600;
            line-height: 2.0rem;
            margin: 0 0 1rem 0;
        }

        .maincontent-info p {
            font-family: 'Itim', sans-serif;
            font-size: 15px;
            font-weight: 500;
            line-height: 1.3rem;
            margin: 0 0 1rem 0;
        }
    </style>
</head>

<body>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger"><?= $_SESSION['error'];
                                        unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success"><?= $_SESSION['success'];
                                            unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <?php
    if (isset($data['activity']) && !empty($data['activity'])) {
        foreach ($data['activity'] as $activity) {
        }
    } else {
        echo "<p>ไม่มีกิจกรรมที่จะแสดง</p>";
    }
    ?>
    <div class="container" style="display: flex; flex-direction: column; ">
        <!-- Box 1 -->
        <div class="row" style="margin-bottom: 100px; text-align: center; border-radius: 8px;">
            <img src="https://www.mcri.edu.au/images/2022/12/MCRI_news_banner_cell_lifecycle_1160x446.jpg" alt="banner " style="width: 1443px; height:436px; opacity: 70%;">
            <div class="container-i" style="background-color: white; position: absolute; top: 55%; left: 50%; transform: translate(-50%, -50%); width: 800px; height: 300px; opacity: 60%; margin-top: 50px;">
                <div class="container-ii">
                    <h1>Journey Hub</h1>
                    <p>
                        เราเล็งเห็นถึงความสำคัญของค่ายต่างๆเพราะทำให้เยาวชนได้ค้นหาความถนัดและความสนใจของตัวเองได้พัฒนาศักยภาพ เพิ่มพูนความรู้ และใช้เวลาว่างให้เป็นประโยชน์ เรามุ่งมั่นพัฒนาเพื่ออำนวยความสะดวกให้ทั้งคนทำค่าย
                        และน้องๆ ที่สนใจหาความรู้จากค่ายต่างๆ เพื่อให้สังคมไทยเป็นสังคมแห่งการเรียนรู้และการแบ่งปัน
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Box 2 -->
    <section class="maincontent">
        <div class="maincontent-con">
            <div class="maincontent-img">
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
            <div class="maincontent-info">
                <?php echo "<h3>" . htmlspecialchars($activity['name']) . "</h3>"; ?>
                <?php echo "<p> " . htmlspecialchars($activity['description']) . "</p>"; ?>
            </div>
        </div>
    </section>

    <!-- Box 3 -->
    <section class="content">
        <div class="container">
            <div class="content-title">
                <h2>กิจกรรมที่น่าสนใจ</h2>
            </div>
            <div class="content-con" style="display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: repeat(2, auto); gap: 20px;">
                <?php
                $counter = 0;
                $remainingActivities = [];

                if (isset($data['activity']) && !empty($data['activity'])) {
                    foreach ($data['activity'] as $activity) {

                        if ($counter < 6) {
                            $images = explode(',', $activity['image']);
                ?>
                            <div class="content-item">
                                <form action="/homeactivity" method="POST">
                                    <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>">
                                    <button type="submit" style="border: none; background: none;">
                                        <img src="<?php echo htmlspecialchars($images[0]); ?>" alt="Activity Image" />
                                    </button>
                                </form>
                                <h4><?php echo htmlspecialchars($activity['name']); ?></h4>
                                <p><?php echo htmlspecialchars($activity['description']); ?></p>
                            </div>
                <?php
                        } else {

                            $remainingActivities[] = $activity;
                        }
                        $counter++;
                    }
                } else {
                    echo "<p>ไม่มีกิจกรรมที่จะแสดง</p>";
                }
                ?>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>