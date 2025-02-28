<head>
<head>
    <style>
       
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #4CAF50;
            color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }


        /* ปุ่มลงทะเบียน */
        button {
            background-color:rgb(0, 112, 26);
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #218838;
        }

      
        table {
            margin-bottom: 120px;
        }

        h2{
            margin-left: 500px;
        }
    </style>
</head>

</head>

<?php
// เรียกข้อมูลรายวิชา
$courses = $data['courses'];

?>

<h2>รายวิชาที่เปิดให้ลงทะเบียน</h2>
<table border="1">
    <thead>
        <tr>
            <th>รหัสวิชา</th>
            <th>ชื่อวิชา</th>
            <th>อาจารย์ผู้สอน</th>
            <th>ดำเนินการ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $course['course_code'] ?></td>
                <td><?= $course['course_name'] ?></td>
                <td><?= $course['instructor'] ?></td>
                <td>
                    <!-- ฟอร์มลงทะเบียน -->
                    <form action="/courses" method="POST" onsubmit="return confirmRegister();">
                        <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
                        <button type="submit">ลงทะเบียน</button>
                    </form>
                </td>

           
                    
            </tr>
        <?php endforeach; ?>
    </tbody>
    <div style="margin-left: 500;">
                        <?php
                                    // แสดงข้อความแจ้งเตือนถ้ามี
                    if (isset($_SESSION['message'])) {
                        echo "<p>{$_SESSION['message']}</p>";
                        unset($_SESSION['message']);  
                    }
                    ?>
              </div>
   
    
</table>

<script>
// JavaScript สำหรับยืนยันการลงทะเบียน
function confirmRegister() {
    return confirm("คุณต้องการลงทะเบียนในวิชานี้หรือ?");
}
</script>
