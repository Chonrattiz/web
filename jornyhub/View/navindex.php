<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Hub</title>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <style>
        /* ใช้ฟอนต์ Itim สำหรับทั้งหน้า */
        body,
        .navbar,
        .slider-menu {
            font-family: 'Itim', cursive;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px;
        }

        .navbar a {
            margin-right: 20px;
            font-family: 'Itim', cursive;
            /* ฟอนต์สำหรับลิงก์ใน Navbar */
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 550px;
        }

        .search-bar input {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: 'Itim', cursive;
            /* ฟอนต์สำหรับช่องค้นหา */
        }

        .search-bar button {
            font-family: 'Itim', cursive;
            /* ฟอนต์สำหรับปุ่มค้นหา */
        }

        .hamburger-menu {
            display: flex;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger-menu div {
            width: 30px;
            height: 3px;
            background-color: #333;
        }

        .slider-menu {
            position: fixed;
            top: 0;
            right: -550px;
            height: 700px;
            width: 250px;
            background-color: #3F627E;
            color: white;
            padding: 20px;
            transition: right 0.3s ease;
            z-index: 999;
        }

        .slider-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .slider-menu ul li {
            margin: 20px 0;
            font-family: 'Itim', cursive;
            /* ฟอนต์สำหรับรายการเมนู */
        }

        .slider-menu ul li a {
            color: white;
            text-decoration: none;
            font-family: 'Itim', cursive;
            /* ฟอนต์สำหรับลิงก์ใน Slider Menu */
        }

        .slider-menu.active {
            right: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div>
            <a href="/index">Home</a>
            <a href="/index">About</a>
            <a href="/index">Contact</a>
        </div>

        <div class="search-bar">
            <form action="/navindex" method="POST">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>

        <!-- Hamburger Menu -->
        <div class="hamburger-menu" onclick="toggleSliderMenu(event)">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <?php
    $firstName = $_SESSION['full_name'] ?? 'Guest';
    $email = $_SESSION['email'] ?? 'Guest';
    $gender = $_SESSION['gender'] ?? 'Guest';
    ?>

    <!-- Slider Menu -->
    <div class="slider-menu" id="sliderMenu">
        <ul>
            <h2 class="fw-bold gradient-text"> <?= htmlspecialchars($firstName); ?> 🎉</h2>
            <p class="fw-bold gradient-text"> <?= htmlspecialchars($email); ?> </p>

            <p>____________________________________</p>
            <li><a href="/index">&#127968; Home</a></li>

            <li><a href="/create">&#128221; Create Activity</a></li>

            <li><a href="">&#128276; Notifications</a></li>

            <li><a href="/myactivity">&#9989;Check status</a></li>

            <li><a href="/profile">&#128100; Profile</a></li>

            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>

    <script>
        // Toggle the slider menu
        function toggleSliderMenu(event) {
            const sliderMenu = document.getElementById('sliderMenu');
            sliderMenu.classList.toggle('active');
            event.stopPropagation(); // Prevent event propagation to the document
        }

        // Close the slider menu when clicking anywhere outside
        document.addEventListener('click', function(event) {
            const sliderMenu = document.getElementById('sliderMenu');
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            // Check if the click is outside the slider menu or hamburger menu
            if (!sliderMenu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
                sliderMenu.classList.remove('active');
            }
        });
    </script>

</body>

</html>