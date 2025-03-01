<?php
function registerUser($email, $fullName, $password, $dob, $gender) {
    $conn = getConnection(); // ตรวจสอบว่า getConnection() มีอยู่จริง

    // เข้ารหัสรหัสผ่าน
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // เตรียม SQL
    $sql = "INSERT INTO User (Email, Full_name, Password, Date_of_Birth, Gender) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }

    // ผูกค่ากับ SQL (ป้องกัน SQL Injection)
    $stmt->bind_param("sssss", $email, $fullName, $hashedPassword, $dob, $gender);

    // ทำการ execute
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    // ปิด statement และ connection
    $stmt->close();
    $conn->close();
}
