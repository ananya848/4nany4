<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales Dashboard - อนัญญา ผลจันทร์ (ตาล)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap');
        body { background-color: #f0f2f5; font-family: 'Sarabun', sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .table-custom thead { background: #4e73df; color: white; }
        .main-title { color: #2c3e50; font-weight: 600; margin-bottom: 30px; }
    </style>
</head>

<body>
<div class="container py-5">
    <h2 class="text-center main-title">📊 สรุปยอดขายรายเดือน: อนัญญา ผลจันทร์ (ตาล)</h2>

    <?php
    include_once("connectdb.php");
    $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales 
            FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month;";
    $rs = mysqli_query($conn, $sql);

    $monthNames = ["", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", 
                   "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
    
    $labels = []; $values = []; $tableData = [];
    while ($data = mysqli_fetch_array($rs)) {
        $mName = $monthNames[$data['Month']];
        $labels[] = $mName;
        $values[] = $data['Total_Sales'];
        $tableData[] = ['month' => $mName, 'total' => $data['Total_Sales']];
    }
    ?>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card p-4 h-100">
                <h5 class="fw-bold mb-3">รายการยอดขาย</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-custom">
                        <thead>
                            <tr>
                                <th>เดือน</th>
                                <th class="text-end">ยอดขาย (บาท)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tableData as $row) { ?>
                            <tr>
                                <td><?php echo $row['month']; ?></td>
                                <td class="text-end fw-bold text-primary"><?php echo number_format($row['total'], 0); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-4">
                <div class="col-12">
                    <div class="card p-4">
                        <canvas id="barChart" height="120"></canvas>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-4 text-center">
                        <div style="max-height: 300px; width: 100%; display: flex; justify-content: center;">
                            <canvas id="donutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const ctxLabels = <?php echo json_encode($labels); ?>;
    const ctxData = <?php echo json_encode($values); ?>;
    
    // ชุดสีแบบ Modern 
    const modernColors = [
        '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', 
        '#6f42c1', '#fd7e14', '#20c997', '#0dcaf0', '#6610f2'
    ];

    const sharedData = {
        labels: ctxLabels,
        datasets: [{
            label: 'ยอดขาย',
            data: ctxData,
            backgroundColor: modernColors,
            borderRadius: 5,
            hoverOffset: 20
        }]
    };

    // กราฟแท่ง (Bar Chart)
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: sharedData,
        options: {
            responsive: true,
            plugins: { 
                legend: { display: false },
                title: { display: true, text: 'กราฟแสดงแนวโน้มยอดขายรายเดือน', font: { size: 16 } }
            },
            scales: { y: { beginAtZero: true } }
        }
    });

    // กราฟโดนัท (Donut Chart)
    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: sharedData,
        options: {
            responsive: true,
            cutout: '60%', // ทำให้เป็นวงแหวน
            plugins: {
                title: { display: true, text: 'สัดส่วนยอดขายต่อเดือน', font: { size: 16 } },
                legend: { position: 'bottom' }
            }
        }
    });
</script>
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>