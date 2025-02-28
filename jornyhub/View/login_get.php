<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .checkbox-label {
            display: flex;
            align-items: center;
            margin: auto;
        }
    </style>
</head>
<body style="background-color: #3F627E;">
    
<section class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-sm" style="width: 400px; height: 500px; background-color: #FFFFFF;">
        <h1 class="mb-4 text-center" style="font-size: 70;">Log in</h1>

        <!-- แสดงข้อความแจ้งเตือน (ถ้ามี) -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?= $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); ?>
        <?php endif; ?>

        <form action="/login" method="post">
            <div class="mb-3 col-12">
                <label for="email" class="form-label">อีเมล:</label>
                <input type="email" class="form-control" id="email" name="email" 
                       placeholder="กรอกอีเมลของคุณ" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <div class="mb-3 col-12">
                <label for="password" class="form-label">รหัสผ่าน:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <div class="checkbox-label p-2">
            <div class="mr-2"><input type="checkbox" id="checkbox1"></div>
            <div class="mb-1" style="margin-left: 10px;"><label for="checkbox1">Remember Me</label></div>
    </div>
            <button type="submit" class="btn btn-primary w-100 mt-2" style="border-radius: 20px; background-color: #3F627E;">Login</button>
            <div class="p-3"><a href="#">Not a member?</a></div>
        </form>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
