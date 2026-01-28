<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Careers at Synergy Global Tech</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /* ตั้งค่าพื้นหลังสีขาว/เทาอ่อน */
    body {
        background-color: #f8f9fa; /* Light background */
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
        background-color: #ffffff; /* White card background */
        border: none; /* No visible border for clean look */
        border-radius: 10px; /* Subtle rounded corners */
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); /* Light, professional shadow */
    }
    .form-control, .form-select {
        border-radius: 6px;
    }
    .form-control:focus, .form-select:focus {
        border-color: #0d6efd; /* Bootstrap primary blue */
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .text-primary-custom {
        color: #0d6efd !important; /* Standard Bootstrap Blue */
    }
    .form-section {
        border-bottom: 2px solid #e9ecef; /* Very light gray divider */
        padding-bottom: 10px;
        margin-bottom: 30px;
        font-weight: 600;
        color: #343a40; /* Dark gray for section title */
    }
    .btn-primary-custom {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .btn-primary-custom:hover {
        background-color: #0b5ed7;
        border-color: #0b5ed7;
    }
</style>
</head>

<body>
<div class="container my-5">
    <div class="card p-md-5 p-3">
        <header class="text-center mb-5">
            <h1 class="display-5 text-primary-custom">Synergy Global Tech</h1>
            <p class="lead text-secondary">อนัญญา ผลจันทร์</p>
            <small class="text-muted">Empowering the Future of Innovation</small>
        </header>

        <form method="post" action="f.php" class="needs-validation" novalidate>
            
            <h2 class="h4 form-section">1. ตำแหน่งที่ต้องการสมัคร</h2>
            <div class="row g-3 mb-4">
                
                <div class="col-md-7">
                    <label for="position" class="form-label">ตำแหน่งที่สนใจ (Position Applied For) <span class="text-danger">*</span></label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="" disabled selected>กรุณาเลือกตำแหน่งงาน...</option>
                        <option value="Lead AI Architect">Lead AI Architect</option>
                        <option value="Cyber Security Expert">Cyber Security Expert</option>
                        <option value="Blockchain Developer">Blockchain Developer</option>
                        <option value="Global Marketing Director">Global Marketing Director</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกตำแหน่งงานที่ต้องการสมัคร</div>
                </div>

                 <div class="col-md-5">
                    <label for="salary" class="form-label">เงินเดือนที่คาดหวัง (Expected Salary) <small class="text-muted">(บาท/เดือน)</small></label>
                    <input type="number" class="form-control" id="salary" name="salary" min="0" placeholder="ระบุตัวเลข (เช่น 65000)">
                    <div class="form-text text-muted">สามารถเจรจาได้ตามประสบการณ์ (Negotiable).</div>
                </div>
            </div>
            
            <h2 class="h4 form-section">2. ข้อมูลส่วนตัว (Personal Details)</h2>
            <div class="row g-3 mb-4">
                
                <div class="col-md-2">
                    <label for="title" class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                    <select class="form-select" id="title" name="title" required>
                        <option value="" disabled selected>เลือก</option>
                        <option value="นาย">นาย (Mr.)</option>
                        <option value="นาง">นาง (Mrs.)</option>
                        <option value="นางสาว">นางสาว (Ms.)</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกคำนำหน้าชื่อ</div>
                </div>

                <div class="col-md-5">
                    <label for="firstname" class="form-label">ชื่อ (First Name) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                    <div class="invalid-feedback">กรุณากรอกชื่อ</div>
                </div>
                <div class="col-md-5">
                    <label for="lastname" class="form-label">นามสกุล (Last Name) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                    <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
                </div>
                
                <div class="col-md-4">
                    <label for="birthday" class="form-label">วันเดือนปีเกิด (Date of Birth) <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                    <div class="invalid-feedback">กรุณากรอกวันเดือนปีเกิด</div>
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label">เบอร์โทรศัพท์ (Phone No.) <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                    <div class="invalid-feedback">กรุณาป้อนเบอร์โทรศัพท์ 10 หลัก</div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">อีเมล (Email Address) <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">กรุณาป้อนอีเมลที่ถูกต้อง</div>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">ที่อยู่ปัจจุบัน (Current Address) <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    <div class="invalid-feedback">กรุณากรอกที่อยู่ปัจจุบัน</div>
                </div>
            </div>

            <h2 class="h4 form-section">3. การศึกษาและทักษะ (Education & Skills)</h2>
            <div class="row g-3 mb-4">
                
                <div class="col-md-6">
                    <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>เลือกวุฒิการศึกษาสูงสุด...</option>
                        <option value="Bachelor's Degree">ปริญญาตรี (Bachelor's Degree)</option>
                        <option value="Master's Degree">ปริญญาโท (Master's Degree)</option>
                        <option value="Ph.D.">ปริญญาเอก (Ph.D.)</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกระดับการศึกษาสูงสุด</div>
                </div>

                <div class="col-md-6">
                    <label for="skills" class="form-label">ความสามารถพิเศษ / ใบรับรอง (Certifications)</label>
                    <input type="text" class="form-control" id="skills" name="skills" placeholder="เช่น ภาษาอังกฤษดีเยี่ยม, AWS Certified, PMP">
                </div>

                <div class="col-12">
                    <label for="experience" class="form-label">สรุปประสบการณ์ทำงานโดยย่อ (Work Experience Summary)</label>
                    <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="ระบุตำแหน่งงาน บริษัท และระยะเวลาที่เกี่ยวข้อง"></textarea>
                </div>

            </div>

            <h2 class="h4 form-section">4. การยื่นเอกสาร (Documentation)</h2>

            <div class="mb-4">
                <label for="resume" class="form-label">แนบไฟล์ Resume / CV <span class="text-danger">*</span></label>
                <input class="form-control" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                <div class="form-text text-muted">รูปแบบที่ยอมรับ: PDF หรือ DOCX (ขนาดไม่เกิน 10MB).</div>
                <div class="invalid-feedback">กรุณาแนบไฟล์ Resume</div>
            </div>

            <div class="form-check mb-5">
                <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">
                    ข้าพเจ้ายอมรับ <a href="#" class="text-primary-custom" style="text-decoration: none; font-weight: 500;">นโยบายความเป็นส่วนตัวของข้อมูล</a> ของ Synergy Global Tech. <span class="text-danger">*</span>
                </label>
                <div class="invalid-feedback">กรุณาทำเครื่องหมายยอมรับข้อกำหนดก่อนส่งใบสมัคร</div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary-custom btn-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check-fill me-2" viewBox="0 0 16 16">
                        <path d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    ส่งใบสมัคร (SUBMIT APPLICATION)
                </button>
            </div>
            
        </form>
        
        <footer class="mt-5 text-center text-muted border-top pt-3">
             <small>&copy; 2025 Synergy Global Tech. All Rights Reserved.</small>
        </footer>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')

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