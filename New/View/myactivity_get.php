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
        .content-btn {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            padding: 10px;
            max-width: 100px;
            
        }
        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            padding: 5px;
            max-width: 100px;
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
            padding: 5px;
        }
        .btn-edit a, .btn-del a {
            color: white;
            text-decoration: none;
            padding: 5px 10px; /* Adjust padding to reduce size */
        }
        .maincontent {
            background-color: #3F627E;
            margin: 4rem 0;
        }
        .maincontent-con {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .maincontent-img img {
            width: 501px;
            padding: 1.5rem;
            margin: 0 42%;
            gap: 5px;
        }
        .maincontent-info {
            width: 410px;
            height: 218px;
            padding: 2rem;
            margin: 1.5rem 13.5%;
            background-color: #FFFFFF;
            opacity: 70%;
        }
        .maincontent-info h3 {
            font-family: 'sarabun', 'Sukhumvit Set', 'Tahoma';
            font-size: 20px;
            font-weight: 600;
            line-height: 2.0rem;
            margin: 0 0 1rem 0;
            margin-bottom: 1rem;
            padding: 0;
        }
        .maincontent-info p {
            font-family: 'sarabun', 'Sukhumvit Set', 'Tahoma';
            font-size: 15px;
            font-weight: 500;
            line-height: 1.3rem;
            margin: 0 0 3rem 0;
            padding: 0;
        }
        .maincontent-info a {
            font-family: 'sarabun', 'Sukhumvit Set', 'Tahoma';
            font-size: 15px;
            font-weight: 300;
            margin-left: 65%;
            color:black;
            text-decoration: none;
            background-color: #C3CD7C;
            padding: 5px 15px;
            border-radius: 20px;
            right: 10px;
            bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="title">
        <h3>กิจกรรมของฉัน</h3>
    </div>

    <section class="maincontent">
            <div class="container">
                <div class="maincontent-con">
                    <div class="maincontent-img">
                    <img src="https://www.camphub.in.th/wp-content/uploads/2025/01/CiRA-CORE-CAMP-4-750x422.jpg" alt="">
                    </div>
                    <div class="maincontent-info">
                        <h3>GTC : Cira Core Camp</h3>
                        <p>มีน้อง ๆ จำนวนไม่น้อยที่ชอบหาอาชีพเสริมทำระหว่างเรียน ซึ่งหนึ่งในอาชีพที่น้อง ๆ วัยเรียนชอบทำกันนั่นก็คือ ‘ขายของออนไลน์’ เหตุผลที่การขายของออนไลน์เป็นที่นิยม เพราะว่าสินค้าบางอย่างใช้ต้นทุนน้อย แถมปัจจุบันคนแห่ซื้อขายของผ่านทางออนไลน์กันมากขึ้น ทำให้ตลาดออนไลน์มีแนวโน้มเติบโตอย่างมาก</p>
                        <a href="#">เช็คชื่อสมาชิก</a>
                    </div>
                    <div class="content-btn">
                    <div class="btn">
            <div class="btn-edit">
                <a href="/editactivity">แก้ไข</a>
            </div>
            <div class="btn-del">
                <a href="#">ลบ</a>
                    </div>
            </div>
        </div>
            </div>
        </section>
        


</body>

</html>
