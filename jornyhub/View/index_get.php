<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journey Hub</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            display: flex;
            justify-content: flex-start;
            gap: 20px;
            padding: 15px 30px;
            background-color: white;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 100px;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero img {
            position: absolute;
            width:1443px;
            height: 436px;
            object-fit: cover;
            z-index: -1;
        }
        .hero h1 {
            background: rgba(255, 255, 255, 0.7);
            padding: 10px 20px;
            font-size: 2rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container" >
    <section class="hero" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
        <img src="https://www.mcri.edu.au/images/2022/12/MCRI_news_banner_cell_lifecycle_1160x446.jpg" alt="Hero Image" style="max-width: 100%; height: auto;">
        <h1>Journey Hub</h1>
        <p>
            เราเล็งเห็นถึงความสำคัญของค่ายต่างๆ เพราะทำให้เยาวชนได้ค้นหาความถนัดและความสนใจของตัวเอง 
            ได้พัฒนาศักยภาพ เพิ่มพูนความรู้ และใช้เวลาว่างให้เป็นประโยชน์ เรามุ่งมั่นพัฒนาเพื่ออำนวยความสะดวกให้ทั้งคนทำค่าย 
            และน้องๆ ที่สนใจหาความรู้จากค่ายต่างๆ เพื่อให้สังคมไทยเป็นสังคมแห่งการเรียนรู้และการแบ่งปัน
        </p>
    </section>
</div>

    </section>
</body>
</html>