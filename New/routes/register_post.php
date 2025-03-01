<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // รับค่าจากฟอร์ม
    $email = trim($_POST['email']);
    $fullName = trim($_POST['full_name']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];  // เพิ่มการรับค่ารหัสผ่านยืนยัน
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    // ตรวจสอบว่าไม่มีค่าว่าง
    if (empty($email) || empty($fullName) || empty($password) || empty($dob) || empty($gender)) {
        $_SESSION['error'] = "กรุณากรอกข้อมูลให้ครบถ้วน"; // เก็บข้อความใน session
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "รูปแบบอีเมลไม่ถูกต้อง"; // เก็บข้อความใน session
    } elseif ($gender !== "Male" && $gender !== "Female") {
        $_SESSION['error'] = "เพศต้องเป็น Male หรือ Female เท่านั้น"; // เก็บข้อความใน session
    } elseif ($password !== $confirmPassword) {
        $_SESSION['error'] = "รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน"; // เก็บข้อความใน session
    } else {
        // ลงทะเบียน
        if (registerUser($email, $fullName, $password, $dob, $gender)) {
            $_SESSION['success'] = "สมัครสมาชิกสำเร็จ!"; // เก็บข้อความสำเร็จใน session
            header("Location: /register"); // รีไดเร็กต์ไปหน้า login
            exit();
        } else {
            $_SESSION['error'] = "เกิดข้อผิดพลาดในการสมัครสมาชิก"; // เก็บข้อความใน session
        }
    }
    // รีเฟรชหน้า
    header("Location: /register"); // รีไดเร็กต์กลับไปที่ฟอร์ม
    exit();
}
?>
