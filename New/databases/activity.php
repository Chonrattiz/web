<?php
// ฟังก์ชัน insertActivity
function insertActivity($name, $startDate, $endDate, $description, $location, $category, $uid)
{
    // เชื่อมต่อฐานข้อมูล
    $conn = getConnection();

    // เตรียมคำสั่ง SQL สำหรับการแทรกข้อมูล
    $sql = "INSERT INTO Activity (name, start_date, end_date, uid, location, description, cid) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // ใช้ prepare statement เพื่อลดความเสี่ยงจาก SQL Injection
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    // ผูกค่าที่จะส่งเข้าไปใน SQL statement
    $stmt->bind_param('sssissi', $name, $startDate, $endDate, $uid, $location, $description, $category);

    // execute การแทรกข้อมูล
    if ($stmt->execute()) {
        // ปิดการเชื่อมต่อฐานข้อมูล
        $stmt->close();
        $conn->close();
        return true;
    } else {
        echo "เกิดข้อผิดพลาดในการแทรกข้อมูล: " . $stmt->error;
        $stmt->close();
        $conn->close();
        return false;
    }
}
?>