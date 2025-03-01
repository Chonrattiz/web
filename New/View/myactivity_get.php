<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myactivity</title>
    <style>
        .title {
            margin-left: 3rem;
            margin-bottom: 2rem;

        }
        .content {
            display: flex;
            background-color: #FFFFFF;
            padding: 10px;
        }

        .content img {
            max-width: 100%;
            height: auto;
        }
        .btn {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 10px;
            padding: 10px;
        }
        .btn-edit {
            background-color: #3DA423;
            border-radius: 5px;
        }
        .btn-edit a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        .btn-del {
            background-color: #D42323;
            border-radius: 5px;
        }
        .btn-del a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        .btn-edit a, .btn-del a {
            color: white;
            text-decoration: none;
            padding: 5px 10px; /* Adjust padding to reduce size */
        }
        .chk {

        }
    </style>
</head>

<body>
    <div class="title">
        <h3>กิจกรรมของฉัน</h3>
    </div>

    <div class="row" style="background-color: #3F627E; padding: 20px; text-align: center; display: flex; gap: 20px;">
        <div class="content">
            <!-- Column 1 -->
            <div style="width: 760px; height: auto;">
                <img style="width: 760px; height: 400px;"
                src="https://www.camphub.in.th/wp-content/uploads/2025/01/%E0%B8%94%E0%B8%B5%E0%B9%84%E0%B8%8B%E0%B8%99%E0%B9%8C%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD.zip-11-750x394.jpeg" alt="">
            </div>

            <!-- Column 2 -->
            <div class="col" style="width: 700px;">
                <h1>Heading</h1>
                <p>มีน้องๆจำนวนไม่น้อยที่ชอบหาอาชีพเสริมทำระหว่างเรียน ซึ่งหนึ่งในอาชีพที่น้องๆ วัยเรียนชอบทำกันนั่นก็คือ ‘ขายของออนไลน์’ เหตุผลที่การขายของออนไลน์เป็นที่นิยม เพราะว่าสินค้าบางอย่างใช้ต้นทุนน้อย แถมปัจจุบันคนแห่ซื้อขายของผ่านทางออนไลน์กันมากขึ้น ทำให้ตลาดออนไลน์มีแนวโน้มเติบโตอย่างมาก</p>
                <div class="chk">
                <a href="#">เช็คชื่อสมาชิก</a>
                </div>
            </div>
        </div>
        <div class="btn">
            <div class="btn-edit">
                <a href="#">แก้ไข</a>
            </div>
            <div class="btn-del">
                <a href="#">ลบ</a>
            </div>
        </div>
    </div>
    </div>

</body>

</html>