<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $activityName = $_POST['activityname'];
    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $category = $_POST['category'];
    $uid = $_SESSION['uid']; 
    $people = $_POST['people'];

    // Handle multiple images
    $imagePaths = [];
    if (isset($_FILES['image']) && is_array($_FILES['image']['tmp_name'])) {
        foreach ($_FILES['image']['tmp_name'] as $key => $tmpName) {
            $imagePath = uploadImage($_FILES['image']['name'][$key], $tmpName);
            if ($imagePath !== false) {
                $imagePaths[] = $imagePath;
            }
        }
    }

    // If no image uploaded, set as null
    $imagePaths = empty($imagePaths) ? null : implode(",", $imagePaths);

    // Call the function to insert the activity
    $result = insertActivity($activityName, $startDate, $endDate, $description, $location, $category, $uid, $imagePaths);

    if ($result) {
        
       
        renderView('myactivity_get', '/navindex');
    } else {
        
        renderView('index_get', '/navindex');
    }
}

?>
