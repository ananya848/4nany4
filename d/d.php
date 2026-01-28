<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>อนัญญา ผลจันทร์ (ตาล)</title>

  <!-- ลิงก์ไปยัง CSS ของ Bootstrap V5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f4f4f9;
      font-family: 'Arial', sans-serif;
    }

    .container {
      margin-top: 50px;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #007bff;
      margin-bottom: 30px;
    }

    .form-control, .form-select {
      margin-bottom: 15px;
    }

    .btn-custom {
      width: 100%;
      margin-top: 10px;
    }

    .btn-custom-group {
      display: flex;
      justify-content: space-between;
    }

    .btn-custom-group .btn {
      flex: 1;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>ฟอร์มรับข้อมูล - อนัญญา ผลจันทร์ (ตาล) - ChatGPT</h1>

    <form method="post" action="">
      <div class="mb-3">
        <label for="fullname" class="form-label">ชื่อ-นามสกุล</label>
        <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>

      <div class="mb-3">
        <label for="height" class="form-label">ส่วนสูง</label>
        <input type="number" class="form-control" id="height" name="height" min="100" max="200" required> ซม.
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">ที่อยู่</label>
        <textarea class="form-control" id="address" name="address" rows="4"></textarea>
      </div>

      <div class="mb-3">
        <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
        <input type="date" class="form-control" id="birthday" name="birthday">
      </div>

      <div class="mb-3">
        <label for="color" class="form-label">สีที่ชอบ</label>
        <input type="color" class="form-control form-control-color" id="color" name="color">
      </div>

      <div class="mb-3">
        <label for="major" class="form-label">สาขาวิชา</label>
        <select class="form-select" id="major" name="major">
          <option value="การบัญชี">การบัญชี</option>
          <option value="การตลาด">การตลาด</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
        </select>
      </div>

      <div class="btn-custom-group">
        <button type="submit" class="btn btn-primary btn-custom" name="Submit">สมัครสมาชิก</button>
        <button type="reset" class="btn btn-danger btn-custom">ยกเลิก</button>
      </div>

      <div class="mt-3">
        <button type="button" class="btn btn-info btn-custom" onClick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
        <button type="button" class="btn btn-warning btn-custom" onMouseOver="alert('Hey Shawty');">Hello</button>
        <button type="button" class="btn btn-secondary btn-custom" onClick="window.print();">พิมพ์</button>
      </div>

    </form>
    <hr>

    <?php
    if (isset($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo "<h4>ข้อมูลที่กรอก</h4>";
        echo "ชื่อ-สกุล : " . $fullname . "<br>";
        echo "เบอร์โทร : " . $phone . "<br>";
        echo "ส่วนสูง : " . $height . " ซม.<br>";
        echo "ที่อยู่ : " . $address . "<br>";
        echo "วันเดือนปีเกิด : " . $birthday . "<br>";
        echo "สีที่ชอบ : <div style='background-color:{$color};width:100px;height:30px;'>".$color."</div>";
        echo "สาขาวิชา : " . $major . "<br>";
    }
    ?>

  </div>

  <!-- ลิงก์ไปยัง JavaScript ของ Bootstrap V5.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
