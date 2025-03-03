    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Row Layout</title>
        <style>
            .container {
                width: 1443px;
                height: 400px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color:#3F627E;
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
                background-color:rgb(21, 225, 99);
                color: white;
                border-radius: 10px;
            }
            .btn-secondary {
                background-color:rgb(255, 0, 0);
                color: white;
                border-radius: 10px;
            }
            p {
                font-family: 'Sarabun', 'Sukhumvit Set', 'Tahoma';
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
            .icon-user img{
                width: 40px;
                height: 40px;
            }
        </style>
    </head>
    <body>
    
    <?php

    
    // ตรวจสอบว่า 'activity' ถูกส่งมาจากฟังก์ชัน renderView
    if (isset($data['activity']) && !empty($data['activity'])):
        $activities = $data['activity'];  // ดึงข้อมูลกิจกรรมจาก $data

        // ลูปแสดงกิจกรรมทั้งหมด
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
                        <a href="/editac">
                            <img src="https://static.thenounproject.com/png/2863109-200.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col">
                     <?php echo htmlspecialchars($activity['description']); ?></p>
                    <div style="display: flex;">
                        <button class="check">เช็คชื่อสมาชิก</button>
                    </div>
                </div>
            </div>
            <div class="row col-3">
                <form action="/editac" method="POST">
                    
                <input type="hidden" name="aid" value="<?php echo htmlspecialchars($activity['aid']); ?>"><div>
                    <button class="buttons btn-primary">แก้ไข</button></div>
                    
                </form>
                <a href=""><div><button class="buttons btn-secondary">ลบ</button></div></a>
            </div>

        
        </div> <!-- ปิด .container -->

        <div style="display: flex;   width: 1443px;
                height: 70px; background-color: white;">

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
