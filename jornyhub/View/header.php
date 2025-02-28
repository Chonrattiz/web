<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journy Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .login {
    background-color: white;
    color: black;
    border: 2px solid black;
    padding: 5px 15px; /* ลดขนาด padding ให้ปุ่มเล็กลง */
    font-size: 14px; /* ลดขนาดตัวหนังสือ */
    border-radius: 20px; /* ให้โค้งเล็กลง */
    cursor: pointer;
    transition: 0.3s;
    margin-right: 10px;
}

.login:hover {
    background-color: black;
    color: white;
}

.register {
    background-color: #3F627E;
    color: black;
    border: 2px solid black;
    padding: 5px 15px; /* ลดขนาด padding ให้ปุ่มเล็กลง */
    font-size: 14px; /* ลดขนาดตัวหนังสือ */
    border-radius: 50px; /* ทำให้ปุ่มกลม */
    cursor: pointer;
    transition: 0.3s;
    color: white;
}

.register:hover {
    background-color: black;
    color: white;
}
body{
    background-color: #3F627E;
}

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 10px;">Journy Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="login" onclick="location.href='/login'">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="register" onclick="location.href='#'">Register</button>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
