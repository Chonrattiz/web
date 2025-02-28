

<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
        }

        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        nav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>ระบบลงทะเบียนเรียน</h1>
    </header>
    <nav>
        <a href="/">หน้าแรก</a>
        <?php if (isset($_SESSION['timestamp'])): ?>
            <a href="/profile">ข้อมูลนักเรียน</a>
            <a href="/courses">รายวิชา</a>
            <a href="/logout">ออกจากระบบ</a>
        <?php else: ?>
            <a href="/login">เข้าสู่ระบบ</a>
        <?php endif; ?>
    </nav>

    <div class="container">
        <!-- Content goes here -->
    </div>
</body>
</html>
