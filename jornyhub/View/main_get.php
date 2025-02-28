


<?php
if (!isset($_SESSION['student_id'])) {
    echo "🔴 คุณยังไม่ได้ล็อกอิน!";
    header("Location: /login");
    exit;
}

$firstName = $_SESSION['first_name'] ?? 'Guest';
$lastName = $_SESSION['last_name'] ?? '';
?>


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section class="container mt-5 text-center">
        <h1 class="fw-bold gradient-text">สวัสดี <?= htmlspecialchars($firstName . " " . $lastName); ?> 🎉</h1>
        <h2 class="fw-light text-secondary">ยินดีต้อนรับเข้าสู่ระบบลงทะเบียนเรียน</h2>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
