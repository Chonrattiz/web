<?php

// ตรวจสอบข้อมูลที่ส่งมาในฟอร์ม
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $activityName = $_POST['activityname'];
    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $category = $_POST['category'];
    $uid = $_SESSION['uid']; 

   
    // เรียกใช้ฟังก์ชัน insertActivity() เพื่อบันทึกข้อมูลกิจกรรม
    $result = insertActivity($activityName, $startDate, $endDate, $description, $location, $category, $uid);

    if ($result) {
        $_SESSION['success'] = "สร้างกิจกรรมสำเร็จ!"; 
            header("Location: /index"); 
            exit();
    } else {
        echo "เกิดข้อผิดพลาดในการสร้างกิจกรรม.";
    }
}
?>