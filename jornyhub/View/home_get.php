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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Itim', cursive;
            background-color: #3F627E;
        }

        .activity-title {
            font-size: 24px;
            color: white;
            margin-left: 150px;
            font-weight: bold;
            margin-top: 20px;
        }

        .activity-card {
            background-color: white;
            border-radius: 15px;
            width: 90%;
            height: auto;
            margin: auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .activity-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .image-container {
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- รูปภาพหลัก -->
    <div class="text-center">
        <img class="img-fluid" src="https://studying-in-us.org/wp-content/uploads/2013/09/On-Campus-Activities2.jpg" alt="Campus Activities">
    </div>

    <!-- หัวข้อ Activities -->
    <p class="activity-title">Recommended Activities</p>

    <!-- กรอบ Activities -->
    <div class="activity-card d-flex flex-wrap justify-content-center">
        <div class="col-md-4 col-sm-12 image-container">
            <img src="https://www.camphub.in.th/wp-content/uploads/2025/02/1000000297-e1739034464219-750x394.jpg" alt="Activity 1">
        </div>
        <div class="col-md-4 col-sm-12 image-container">
            <img src="https://www.camphub.in.th/wp-content/uploads/2025/02/Camp-Hub_%E0%B9%80%E0%B9%80%E0%B8%84%E0%B8%A1%E0%B8%9B%E0%B9%8C%E0%B8%AE%E0%B8%AD%E0%B8%AA%E0%B8%9B%E0%B8%B4%E0%B8%95%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B8%B4%E0%B8%95%E0%B8%B5%E0%B9%89-01-750x394.jpg" alt="Activity 2">
        </div>
        <div class="col-md-4 col-sm-12 image-container">
            <img src="https://www.camphub.in.th/wp-content/uploads/2025/01/%E0%B8%94%E0%B8%B5%E0%B9%84%E0%B8%8B%E0%B8%99%E0%B9%8C%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%B1%E0%B8%87%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%84%E0%B8%94%E0%B9%89%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD.zip-11-750x394.jpeg" alt="Activity 3">
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>