<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ข้อมูลใบสมัครงานที่ได้รับ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
        background-color: #ffffff;
    }
    .text-primary-custom {
        color: #0d6efd !important;
    }
    .list-group-item strong {
        color: #495057;
    }
</style>
</head>

<body>
<div class="container my-5">
    <?php
    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน method POST และมีการกดปุ่ม Submit หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // 1. ดึงข้อมูลจาก $_POST และกำหนดค่าเริ่มต้น
        $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ' - ';
        $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ' - ';
        $lastname = isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ' - ';
        $position = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : ' - ';
        $birthday = isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : ' - ';
        $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ' - ';
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ' - ';
        $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : ' - ';
        $education = isset($_POST['education']) ? htmlspecialchars($_POST['education']) : ' - ';
        $skills = isset($_POST['skills']) ? htmlspecialchars($_POST['skills']) : ' - ';
        $experience = isset($_POST['experience']) ? htmlspecialchars($_POST['experience']) : ' - ';
        $salary = isset($_POST['salary']) ? number_format((int)$_POST['salary']) : ' - ';
        
        // สำหรับช่องทางรับข่าวสาร (Checkbox)
        $channels = isset($_POST['channel']) ? implode(", ", array_map('htmlspecialchars', $_POST['channel'])) : 'ไม่ได้ระบุ';

        // 2. แสดงผลข้อมูลในรูปแบบ Bootstrap Card
        echo '<div class="card p-md-5 p-3">';
        echo '<h1 class="text-success mb-4 text-center">✅ ข้อมูลการสมัครงานถูกส่งแล้ว</h1>';
        echo '<p class="lead text-center text-muted">Synergy Global Tech ได้รับข้อมูลของคุณแล้ว เราจะติดต่อกลับโดยเร็วที่สุด</p>';
        echo '<hr class="my-4">';
        
        // 3. ส่วนแสดงผลหลัก (ใช้ List Group)
        echo '<div class="row">';
        
        // คอลัมน์ซ้าย: ข้อมูลส่วนตัว
        echo '<div class="col-md-6 mb-4">';
        echo '<h4 class="text-primary-custom mb-3">รายละเอียดส่วนตัว</h4>';
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item"><strong>ชื่อ-สกุล:</strong> '.$title.' '.$firstname.' '.$lastname.'</li>';
        echo '<li class="list-group-item"><strong>วันเดือนปีเกิด:</strong> '.$birthday.'</li>';
        echo '<li class="list-group-item"><strong>เบอร์โทรศัพท์:</strong> '.$phone.'</li>';
        echo '<li class="list-group-item"><strong>อีเมล:</strong> '.$email.'</li>';
        echo '<li class="list-group-item"><strong>ที่อยู่:</strong> '.nl2br($address).'</li>'; // nl2br สำหรับการขึ้นบรรทัดใหม่
        echo '</ul>';
        echo '</div>'; // end col-md-6

        // คอลัมน์ขวา: ข้อมูลงาน/ทักษะ
        echo '<div class="col-md-6 mb-4">';
        echo '<h4 class="text-primary-custom mb-3">รายละเอียดงานและทักษะ</h4>';
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item bg-light"><strong>ตำแหน่งที่สมัคร:</strong> <span class="fw-bold text-dark">'.$position.'</span></li>';
        echo '<li class="list-group-item"><strong>เงินเดือนคาดหวัง:</strong> '.$salary.' บาท/เดือน</li>';
        echo '<li class="list-group-item"><strong>ระดับการศึกษา:</strong> '.$education.'</li>';
        echo '<li class="list-group-item"><strong>ความสามารถพิเศษ:</strong> '.$skills.'</li>';
        echo '<li class="list-group-item"><strong>ประสบการณ์ทำงาน:</strong> '.nl2br($experience).'</li>';
        echo '<li class="list-group-item"><strong>ทราบข่าวจาก:</strong> '.$channels.'</li>';
        echo '</ul>';
        echo '</div>'; // end col-md-6
        
        echo '</div>'; // end row
        
        // ปุ่มกลับไปยังหน้าหลัก (สมมติว่าเป็น index.html)
        echo '<div class="d-grid gap-2 col-4 mx-auto mt-4">';
        echo '<a href="index.html" class="btn btn-secondary">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill me-2" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg> หน้าหลัก';
        echo '</a>';
        echo '</div>';

        echo '</div>'; // end card

    } else {
        // กรณีเข้าถึงหน้านี้โดยตรงโดยไม่ได้ส่งฟอร์มมา
        echo '<div class="alert alert-warning text-center" role="alert">';
        echo '⚠️ กรุณาส่งข้อมูลจากแบบฟอร์มรับสมัครงานก่อน';
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>