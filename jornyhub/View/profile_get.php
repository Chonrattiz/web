<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลนักเรียน</title>
    <style>
      

        section {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background:rgb(158, 160, 59);
            color: white;
        }

       

        button {
            background: red;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: darkred;
        }

        .table-container {
            overflow-x: auto; /* ถ้าตารางกว้างเกินไป ให้เลื่อนซ้ายขวาได้ */
        }
    </style>
</head>
<body>

<?php
// ถ้าไม่ได้ล็อกอิน ให้ส่งกลับไปที่หน้า login
if (!isset($_SESSION['student_id'])) {
    $_SESSION['message'] = "⚠️ กรุณาเข้าสู่ระบบก่อน";
    header("Location: /login");
    exit;
}
?>

<section>
    <h2>📌 ข้อมูลนักเรียน</h2>
    <table>
        <tr>
            <th>ชื่อ</th>
            <td><?= htmlspecialchars($data['result']['first_name']) ?></td>
        </tr>
        <tr>
            <th>นามสกุล</th>
            <td><?= htmlspecialchars($data['result']['last_name']) ?></td>
        </tr>
        <tr>
            <th>วันเกิด</th>
            <td><?= htmlspecialchars($data['result']['date_of_birth']) ?></td>
        </tr>
        <tr>
            <th>เบอร์โทรศัพท์</th>
            <td><?= htmlspecialchars($data['result']['phone_number']) ?></td>
        </tr>
    </table>
    
    <h2>📚 วิชาที่ลงทะเบียนเรียน</h2>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>รหัสวิชา</th>
                    <th>ชื่อวิชา</th>
                    <th>อาจารย์ผู้สอน</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th>ดำเนินการ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['enrollments'] as $enrollment): ?>
                    <tr>
                        <td><?= htmlspecialchars($enrollment['course_code']) ?></td>
                        <td><?= htmlspecialchars($enrollment['course_name']) ?></td>
                        <td><?= htmlspecialchars($enrollment['instructor']) ?></td>
                        <td><?= htmlspecialchars($enrollment['enrollment_date']) ?></td>
                        <td>
                            <!-- ปุ่มลบที่จะเรียกฟังก์ชัน confirmDelete() -->
                            <form action="/delete_enrollment" method="POST" onsubmit="return confirmDelete();">
                                <input type="hidden" name="enrollment_id" value="<?= $enrollment['enrollment_id'] ?>">
                                <button type="submit">🗑 ลบ</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<script>
// JavaScript สำหรับยืนยันการลบ
function confirmDelete() {
    return confirm("⚠️ คุณต้องการลบรายวิชานี้จริงๆ หรือ?");
}
</script>

</body>
</html>
