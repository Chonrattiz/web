<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTC : Cira Core Camp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header img {
            width: 100%;
            border-radius: 10px;
        }
        .box {
            background: #eaf2ff;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            max-height: 250px;
            overflow-y: auto;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        .list-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }
        .btn-success {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer {
            max-width: 50%;
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
    </style>
</head>
<body>
    <section class="banner">
        <img src="https://www.camphub.in.th/wp-content/uploads/2025/01/CiRA-CORE-CAMP-4.jpg" alt="CiRA CORE CAMP #4">
    </section>
    
    <h2>GTC : Cira Core Camp</h2>
    <p>15/20 👤</p>
    
    <div class="box">
        <h3>ยืนยันรายชื่อผู้เข้าร่วมกิจกรรม</h3>
        <ol style="list-style: none; padding: 0;">
            <li class="list-item"><span>1. กานต์จิรายา วรโชติลุล</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>2. นอมมี่ มารี</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>3. วรชัย พัสรินเลิศ</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>4. แอนโทนี่ ธิมอสด์</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>5. ลิซ่า แอนคอล์ด</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>6. ณัชชา นวรโภชน์</span> <button class="btn-success">ยืนยัน</button></li>
            <li class="list-item"><span>7. ทัพพ์พล จิตญานาม</span> <button class="btn-success">ยืนยัน</button></li>
        </ol>
    </div>

    <!-- จำนวนผู้ยืนยัน + ปุ่มเช็คข้อมูลสถิติ (อยู่นอกกล่อง) -->
    <div class="footer">
        <p class="confirmed-count"><strong>จำนวนผู้ยืนยัน:</strong> 7</p>
        <button class="btn-primary">เช็คข้อมูลสถิติ</button>
    </div>
</body>
</html>
