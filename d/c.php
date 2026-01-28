<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มรับข้อมูล - อนัญญา ผลจันทร์ (ตาล) - Gemini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* สไตล์เพิ่มเติมเพื่อให้สีที่ชอบแสดงผลได้ชัดเจนขึ้น */
    .color-display {
        display: inline-block;
        width: 150px;
        height: 30px;
        border: 1px solid #ccc;
        vertical-align: middle;
        margin-left: 5px;
    }
</style>
</head>

<body>
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="card-title text-center text-primary mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
            </svg>
            ฟอร์มรับข้อมูล - อนัญญา ผลจันทร์ (ตาล) - Gemini
        </h1>

        <form method="post" action="" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                <div class="invalid-feedback">
                    กรุณากรอกชื่อ-นามสกุล
                </div>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                <div class="form-text">ตัวอย่าง: 08XXXXXXXX</div>
                <div class="invalid-feedback">
                    กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
                </div>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                <div class="invalid-feedback">
                    กรุณากรอกส่วนสูงระหว่าง 100-200 ซม.
                </div>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                <div class="invalid-feedback">
                    กรุณากรอกที่อยู่
                </div>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
            </div>

            <div class="mb-3 d-flex align-items-center">
                <label for="color" class="form-label me-3 mb-0">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="เลือกสี">
            </div>

            <div class="mb-4">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select class="form-select" id="major" name="major" required>
                    <option value="" disabled selected>เลือกสาขาวิชา...</option>
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
                <div class="invalid-feedback">
                    กรุณาเลือกสาขาวิชา
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4">
                <button type="submit" name="Submit" class="btn btn-primary me-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    สมัครสมาชิก
                </button>
                <button type="reset" class="btn btn-secondary me-md-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                    </svg>
                    ยกเลิก
                </button>
                <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info text-white me-md-2">Go to MSU</button>
                <button type="button" onMouseOver="alert('Hey Shawty');" class="btn btn-warning text-dark me-md-2">Hello</button>
                <button type="button" onClick="window.print();" class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                        <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2z"/>
                        <path d="M2 5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3h.5a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5H14v.5a2.5 2.5 0 0 1-2.5 2.5h-5A2.5 2.5 0 0 1 4 15v-.5H1.5A1.5 1.5 0 0 1 0 12.5v-3A1.5 1.5 0 0 1 1.5 8zm1 1h.5a.5.5 0 0 0 0-1H3a.5.5 0 0 0 0 1"/>
                    </svg>
                    พิมพ์
                </button>
            </div>
        </form>
    </div> <hr class="my-5">

    <?php
    if (isset($_POST['Submit'])){
        $fullname = $_POST['fullname'] ;
        $phone = $_POST['phone'] ;
        $height = $_POST['height'] ;
        $address = $_POST['address'] ;
        $birthday = $_POST['birthday'] ;
        $color = $_POST['color'] ;
        $major = $_POST['major'] ;
        
        echo "<div class='card card-body bg-light shadow-sm'>";
        echo "<h2 class='text-success mb-3'>ข้อมูลที่ส่งเข้าสู่ระบบ</h2>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'><strong>ชื่อ-สกุล :</strong> {$fullname}</li>";
        echo "<li class='list-group-item'><strong>เบอร์โทร :</strong> {$phone}</li>";
        echo "<li class='list-group-item'><strong>ส่วนสูง :</strong> {$height} ซม.</li>";
        echo "<li class='list-group-item'><strong>ที่อยู่  :</strong> ".nl2br($address)."</li>"; // ใช้ nl2br เพื่อให้ขึ้นบรรทัดใหม่
        echo "<li class='list-group-item'><strong>วันเดือนปีเกิด :</strong> {$birthday}</li>";
        echo "<li class='list-group-item'><strong>สีที่ชอบ :</strong> ";
        // ใช้ class .color-display ที่กำหนดไว้ใน style
        echo "<span class='color-display' style='background-color:{$color}'></span> {$color}"; 
        echo "</li>";
        echo "<li class='list-group-item'><strong>สาขาวิชา :</strong> {$major}</li>";
        echo "</ul>";
        echo "</div>";
    }
    ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>
</html>	