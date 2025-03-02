<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container img {
            max-width: 100%; /* Ensure the image does not overflow */
            height: auto; /* Maintain aspect ratio */
            width: 600px; /* Set a specific width */
        }
        .container-title {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .container-titlep {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
    .container-info {
        margin: 0 30%;
        font-family: 'sarabun', 'Sukhumvit Set', 'Tahoma';
        font-size: 15px;
        font-weight: 500;
        line-height: 2.0rem;
    }
    .title-info {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
    .detail {
        width: 40%;
        margin: 0 30%;
        font-family: 'sarabun', 'Sukhumvit Set', 'Tahoma';
        font-size: 15px;
        font-weight: 500;
        line-height: 2.2rem;
    }
    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-left: 200px;
        gap: 10px;
    }
    .btn button {
            background-color: #3F627E; /* Green background */
            color: white; /* White text */
            padding: 10px 32px; /* Padding */
            text-align: center; /* Centered text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Inline-block */
            font-size: 14px; /* Font size */
            margin: 10px 10px; 
            cursor: pointer; /* Pointer cursor on hover */
            border: none; /* Remove border */
            border-radius: 10px; /* Rounded corners */
            margin-left: 30%;
            gap: 5px;
        }
        .btn button:hover {
            background-color:rgb(77, 83, 77); /* Darker green on hover */
        }
        .btn-save button {
            background-color: #45a049;
        }
        .btn-del button {
            background-color: #f44336;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.camphub.in.th/wp-content/uploads/2025/01/FLB-Thai-School-1-1-e1737668646569.jpg" alt="">
    </div>
    <div class="container-title">
        <h2>Future Leaders Bootcamp ค่ายเยาวชนแห่งอนาคต</h2>
    </div>
    <div class="container-titlep">
        <h3>ข้อมูลเบื้องต้นกิจกรรม</h3>
    </div>

    <div class="container-info">
        <div class="date-activity">
            <h4 style="color: green;">วันที่จัดกิจกรรม</h4>
            <h4>จันทร์ 17 มีนาคม 2568 - อังคาร 21 มกราคม 2568</h4>
        </div>
        <div class="endregister">
            <h4 style="color: green;">วันสุดท้ายที่รับสมัคร</h4>
            <h5>ศุกร์ 28 กุมภาพันธ์ 2568</h5>
        </div>
        <div class="quantity">
            <h4 style="color: green;">จำนวนคนที่รับ</h4>
            <h4>50 คน</h4>
        </div>
        <div class="feature">
            <h4 style="color: green;">คุณลักษณะ</h4>
            <h4>ม.1 - ม.6 (ปีการศึกษา 2568)</h4>
        </div>
    </div>
    <div class="title-info">
        <h3>คำอธิบายกิจกรรม</h3>
    </div>
    <div class="detail">
        <h4>🌟 ค่ายเยาวชนที่จะเปลี่ยนคุณให้เป็นผู้นำระดับโลก! 🌍<br> Future Leaders Bootcamp เปิดรับสมัครแล้ว! ✨<br> ค่ายนี้จัดเต็ม! เตรียมตัวให้พร้อมทั้งเรื่องเรียนและการใช้ชีวิตอย่างโปร 💪<br> พัฒนาทักษะความเป็นผู้นำ<br> เสริมความมั่นใจให้เป็นผู้นำเยาวชนคนรุ่นใหม่<br> สร้างเครือข่ายเพื่อนเก่งๆจากหลากหลายภูมิภาค<br> พบกับบุคคลากรทางการศึกษาสากล<br> เสริมพอร์ตให้ปัง! 🎓 <br>ดำเนินกิจกรรมด้วยภาษาอังกฤษ<br> 🌍 เรียนรู้และมองโลกในมุมใหม่ พร้อมรับมือทั้งการแก้ปัญหาในชุมชนและระดับโลก! <br> 🎖 พิเศษสุด! รับประกาศนียบัตรจาก University for Peace จาก UN ช่วยเพิ่มความปังในพอร์ตมหาวิทยาลัยของคุณ<br> พบกันวันที่ <br>📆 วันที่: 17-21 มีนาคม 2568 <br>⏰ เวลา: 8.30 – 16.30 น. <br>📍 สถานที่: มหาวิทยาลัยธรรมศาสตร์ ท่าพระจันทร์</h4>
    </div>
    <div class="btn">
    <div class="btn-del">
        <button>ยกเลิก</button>
        </div>    
    <div class="btn-save">
        <button>บันทึก</button>
        </div>
        
    </div>
</body>
</html>