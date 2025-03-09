<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Itim', cursive;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 300px;
            background-color: #3b566b;
            color: white;
            padding: 50px;
            text-align: center;
            height: 100vh;
        }
        .sidebar h1 {
            font-size: 32px;
        }
        .profile-icon {
            width: 100px;
            height: 100px;
            background: white;
            border-radius: 50%;
            margin: 20px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #3b566b;
            position: relative; /* ทำให้สามารถจัดตำแหน่งปุ่ม "+" ได้ภายใน */
        }
        .container {
            background-color: white; 
            flex: 1;
            padding: 40px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            font-family: 'Itim', cursive;
        }
        .form-group input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: 'Itim', cursive;
        }
        .btn-group {
            margin-top: 20px;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-cancel {
            background-color: #f0f0f0;
            margin-right: 10px;
            font-family: 'Itim', cursive;
        }
        .btn-save {
            background-color: #3b566b;
            color: white;
            font-family: 'Itim', cursive;
        }
        .gender-group {
            display: flex;
            gap: 10px;
            margin-top: 5px;
        }
        .gender-group label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        /* ปุ่ม "+" ที่อยู่มุมขวาล่าง */
        .btn-edit-profile {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background-color:rgb(59, 86, 107);
            color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .btn-edit-profile:hover {
            background-color: #2b4055;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h1>Edit Profile</h1>
        <div class="profile-icon">
            👤
            <!-- ปุ่ม "+" ที่มุมขวาล่างของไอคอนโปรไฟล์ -->
            <button class="btn-edit-profile" onclick="alert('เปิดหน้าต่างอัพโหลดรูปภาพ')">+</button>
        </div>
    </div>

    <div class="container">
        <h2>Edit Profile</h2>
        
        <form>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first_name" placeholder="Enter first name">
            </div>

            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last_name" placeholder="Enter last name">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="+66-XXX-XXXX">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label>What is your gender?</label>
                <div class="gender-group">
                    <label><input type="radio" name="gender" value="male"> Male</label>
                    <label><input type="radio" name="gender" value="female" checked> Female</label>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-cancel">Cancel</button>
                <button type="submit" class="btn btn-save">Save</button>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
