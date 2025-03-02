<?php
// ตรวจสอบว่าเป็นการร้องขอแบบ POST หรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่า 'aid' จากฟอร์ม
    $activityAid = $_POST['aid'];

    // ใช้ค่า $activityAid ต่อไป เช่นการดึงข้อมูลกิจกรรมจากฐานข้อมูล
    // สมมุติว่าใช้ $activityAid ในการดึงข้อมูล
    $activity = getActivitiesByAid($activityAid);

    if ($activity) {
        // ทำการแสดงรายละเอียดกิจกรรม
        renderView('homeactivity_get', '/navindex', ['activity' => $activity]);
    } else {
        // ถ้าไม่พบกิจกรรม
        echo "ไม่พบกิจกรรมที่คุณเลือก";
    }
}
?>
