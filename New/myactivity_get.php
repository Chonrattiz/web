<?php
// เรียกใช้งานฟังก์ชัน getUserActivities และดึงข้อมูล
$activities = getUserActivities($_SESSION['uid']);  


// ตรวจสอบว่ามีกิจกรรมหรือไม่
if ($activities) {
    renderView('myactivity_get', '/navindex', ['activity' => $activities]);  
   
} else {
    renderView('myactivity_get', '/navindex');  // หากไม่มีข้อมูล
}




?>

