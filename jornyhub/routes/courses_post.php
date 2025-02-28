<?php

if (isset($_POST['course_id'])) {
    $courseId = (int)$_POST['course_id'];
    $studentId = $_SESSION['student_id'];  

    if (isCourseRegistered($studentId, $courseId)) {
       
        $_SESSION['message'] = "❌❌คุณได้ลงทะเบียนวิชานี้แล้ว❌❌";
        header("Location: /courses");  
        exit;
    }

    // เพื่อบันทึกการลงทะเบียน
    $result = registerCourseForStudent($studentId, $courseId);

    if ($result) {
     
        header("Location: /profile");
        exit;
    } else {
       
        echo "ไม่สามารถลงทะเบียนวิชานี้ได้";
    }
} else {
   
    echo "ข้อมูลไม่ครบถ้วน";
}
