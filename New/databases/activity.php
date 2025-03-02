<?php
// ฟังก์ชัน insertActivity
function insertActivity($name, $startDate, $endDate, $description, $location, $category, $uid, $image)
{
    // เชื่อมต่อฐานข้อมูล
    $conn = getConnection();

    // เตรียมคำสั่ง SQL สำหรับการแทรกข้อมูล
    $sql = "INSERT INTO Activity (name, start_date, end_date, uid, location, description, cid, image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // ใช้ prepare statement เพื่อลดความเสี่ยงจาก SQL Injection
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    // ผูกค่าที่จะส่งเข้าไปใน SQL statement
    $stmt->bind_param('sssissis', $name, $startDate, $endDate, $uid, $location, $description, $category, $image);

    // execute การแทรกข้อมูล
    if ($stmt->execute()) {
        // ปิดการเชื่อมต่อฐานข้อมูล
        $stmt->close();
        $conn->close();
        return true;
    } else {
        echo "เกิดข้อผิดพลาดในการแทรกข้อมูล: " . $stmt->error;
        $stmt->close();
        $conn->close();
        return false;
    }
}



function uploadImage($imageName, $imageTmpName) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($imageName);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if it's a valid image
    if (getimagesize($imageTmpName) === false) {
        echo "ไฟล์นี้ไม่ใช่ภาพ";
        return false;
    }

    // Check file extension
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png'])) {
        echo "ขออภัย, เพียงแค่ไฟล์ .jpg, .jpeg หรือ .png เท่านั้น";
        return false;
    }

    // Move the uploaded image to the target directory
    if (move_uploaded_file($imageTmpName, $targetFile)) {
        return $targetFile; // Return the path of the uploaded file
    } else {
        echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์";
        return false;
    }
}

function getActivityImages($activityId) {
    // Connect to the database
    $conn = getConnection();

    // Query to retrieve the images for the given activity ID
    $sql = "SELECT image FROM Activity WHERE aid = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing the SQL statement: ' . $conn->error);
    }

    // Bind the activity ID to the SQL statement
    $stmt->bind_param('i', $activityId);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if any result is returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Return the image(s) (can be multiple images separated by commas)
        $images = $row['image'];
        // Split images into an array if there are multiple
        return explode(",", $images);
    } else {
        return []; // No images found for this activity
    }

    // Close connection
    $stmt->close();
    $conn->close();
}

function getActivityDetails(): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'SELECT * FROM Activity';  
    $result = $conn->query($sql);  
    return $result;  
}

function getUserActivities($user_id) {

    $conn = getConnection();

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT A.aid, A.name, A.start_date, A.end_date, A.location, A.description, A.image, C.name AS category_name
            FROM Activity A
            JOIN Category C ON A.cid = C.cid
            WHERE A.uid = ?";

    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("i", $user_id);

  
    $stmt->execute();

   
    $result = $stmt->get_result();

    
    $activities = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $activities[] = $row;
        }
    } else {
        $activities = null;  
    }

  
    $stmt->close();
    $conn->close();

    return $activities; 




}



// ฟังก์ชันดึงข้อมูลกิจกรรมตาม aid
function getActivitiesByAid($aid) {
    // เชื่อมต่อกับฐานข้อมูล
    $conn = getConnection();

    // สร้างคำสั่ง SQL เพื่อดึงข้อมูลกิจกรรมที่มี aid ตรง
    $query = "SELECT * FROM Activity WHERE aid = ?";

    // เตรียมคำสั่ง SQL
    $stmt = $conn->prepare($query);

    // ผูกค่าพารามิเตอร์ให้กับคำสั่ง SQL
    $stmt->bind_param("i", $aid);

    // รันคำสั่ง SQL
    $stmt->execute();

    // รับผลลัพธ์จากฐานข้อมูล
    $result = $stmt->get_result();

    // ถ้ามีผลลัพธ์ให้ดึงข้อมูลกิจกรรม
    if ($result->num_rows > 0) {
        // คืนค่าข้อมูลกิจกรรมในรูปแบบ array
        return $result->fetch_assoc();
    } else {
        return null; // ถ้าไม่พบกิจกรรม
    }

    // ปิดการเชื่อมต่อ
    $conn->close();
}






