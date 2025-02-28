<?php


    if (isset($_POST['enrollment_id'])) {
        $enrollmentId = (int)$_POST['enrollment_id'];

        // เรียกฟังก์ชันจาก Model เพื่อลบข้อมูล
        $result = deleteEnrollmentById($enrollmentId);

        if ($result) {
           
            header("Location: /profile");
            exit;
        } else {
         
            echo "ไม่สามารถลบรายวิชาได้";
        }
    } else {
        // ถ้าข้อมูล enrollment_id ไม่มี
        echo "ข้อมูลไม่ครบถ้วน";
    }

