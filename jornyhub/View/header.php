<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Hub</title>

    <!-- Google Fonts: Itim -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ใช้ฟอนต์ Itim ทั่วทั้งเว็บไซต์ */
        body {
            font-family: 'Itim', cursive;
            background-color: #3F627E;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .login {
            background-color: white;
            color: black;
            border: 2px solid black;
            padding: 8px 20px;
            font-size: 16px;
            border-radius: 20px;
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
            color: white;
            border: 2px solid white;
            padding: 8px 20px;
            font-size: 16px;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.3s;
        }

        .register:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="margin-left: 10px;">Journey Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="login" onclick="location.href='/login'">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="register" onclick="location.href='/register'">Register</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>