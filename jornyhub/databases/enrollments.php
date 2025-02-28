<?php



function getStudentEnrollmentByStudentId(int $studentId): mysqli_result|bool
{
    $conn = getConnection();
    $sql = 'SELECT
    c.course_id,
    c.course_name,
    c.course_code,
    c.instructor,
    e.enrollment_id,
    e.enrollment_date,
    s.student_id
    FROM
    enrollment.courses c
    INNER JOIN enrollment.enrollment e ON
    c.course_id = e.course_id
    INNER JOIN enrollment.students s ON
    e.student_id = s.student_id where s.student_id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
}


function deleteEnrollmentById(int $enrollmentId): bool
{
    $conn = getConnection();
    $sql = "DELETE FROM enrollment WHERE enrollment_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $enrollmentId);
    return $stmt->execute();
}




function registerCourseForStudent(int $studentId, int $courseId): bool
{
    $conn = getConnection();

   
    $sql = 'INSERT INTO enrollment (student_id, course_id, enrollment_date) VALUES (?, ?, NOW())';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $studentId, $courseId);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


function isCourseRegistered(int $studentId, int $courseId): bool
{
    $conn = getConnection();

    $sql = 'SELECT COUNT(*) FROM enrollment WHERE student_id = ? AND course_id = ?';
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $studentId, $courseId);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();

    return $count > 0;  
}



