<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // เรียกฟังก์ชัน login
        $result = login($email, $password);
        
        if ($result) {
            $_SESSION['timestamp'] = time();
            $_SESSION['uid'] = $result['uid'];
            $_SESSION['full_name'] = $result['Full_name'];
            $_SESSION['email'] = $result['Email'];
            renderView('index_get', '/navindex', $result);
            
        } else {
            $_SESSION['message'] = 'Email or Password invalid';
            renderView('login_get', '/header');
            unset($_SESSION['message']);
            unset($_SESSION['timestamp']);
        }
    } else {
        echo "กรุณากรอกข้อมูลให้ครบถ้วน";
    }
}
