

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

           <!-- แสดงข้อความข้อผิดพลาดหรือล็อกอินสำเร็จ -->
           <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>
        
<section class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 shadow-sm" style="width: 600px; height: 650px; background-color: #FFFFFF;">
        <h1 class="mb-4 text-center" style="font-size: 70;">Sign Up</h1>

      

        <form action="/register" method="post">
            <div class="mb-3 col-12">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="กรอกชื่อ-นามสกุล" required>
            </div>
            <div class="mb-3 col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="กรอกอีเมลของคุณ" required>
            </div>
            <div class="mb-3 col-12">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="กรอกรหัสผ่าน" required>
            </div>
            <div class="mb-3 col-12">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="ยืนยันรหัสผ่าน" required>
            </div>
            <div class="mb-3 col-12">
                <label for="dob" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="mb-3 col-12">
                <label>Gender:</label>
                <select name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3" style="border-radius: 20px; background-color: #3F627E;">Submit</button>
        </form>

       
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
