<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Hub</title>
    <style>
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 30px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #333;
            margin: 0 15px;
            text-decoration: none;
        }

        .search-bar {
            display: flex;
            align-items: center;
            gap: 15px;
            /* เพิ่มระยะห่าง */
            margin-left: auto;
            margin-right: 20px;
            /* เพิ่มระยะห่างจาก Hamburger Menu */
        }

        .search-bar input {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 5px 10px;
            border: none;
            border-radius: 25px;
            background-color: #3F627E;
            color: white;
            cursor: pointer;
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
            right: -300px;
            height: 100vh;
            width: 250px;
            background-color: #3F627E;
            color: white;
            padding: 20px;
            transition: right 0.3s ease;
            z-index: 1000;
        }

        .slider-menu ul {
            list-style-type: none;
            padding: 0;
        }

        .slider-menu ul li {
            margin: 20px 0;
        }

        .slider-menu ul li a {
            color: white;
            text-decoration: none;
        }

        .slider-menu.active {
            right: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div>
            <a href="/home">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>

        <div class="search-bar">
            <form action="/search" method="POST">
                <input type="text" name="query" placeholder="Search...">
                <input type="date" name="start_date" placeholder="Start Date">
                <input type="date" name="end_date" placeholder="End Date">
                <button type="submit">Search</button>
            </form>
        </div>

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

    <div class="slider-menu" id="sliderMenu">
        <ul>
            <h2><?= htmlspecialchars($firstName); ?> 🎉</h2>
            <p><?= htmlspecialchars($email); ?></p>
            <hr>
            <li><a href="/index">🏠 Home</a></li>
            <li><a href="/create">📝 Create Activity</a></li>
            <li><a href="/myactivity">✅ Check Status</a></li>
            <li><a href="/profile">👤 Profile</a></li>
            <li><a href="/logout">🚪 Logout</a></li>
        </ul>
    </div>

    <script>
        function toggleSliderMenu(event) {
            const sliderMenu = document.getElementById('sliderMenu');
            sliderMenu.classList.toggle('active');
            event.stopPropagation();
        }

        document.addEventListener('click', function(event) {
            const sliderMenu = document.getElementById('sliderMenu');
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            if (!sliderMenu.contains(event.target) && !hamburgerMenu.contains(event.target)) {
                sliderMenu.classList.remove('active');
            }
        });
    </script>
</body>

</html>