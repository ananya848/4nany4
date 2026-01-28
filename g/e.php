<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - อนัญญา ผลจันทร์ (ตาล)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f8f9fa; font-family: 'Sarabun', sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .table-hover tbody tr:hover { background-color: #f1f3f5; }
    </style>
</head>

<body>
<div class="container py-5">
    <h2 class="text-center mb-4">รายงานยอดขายแยกตามประเทศ</h2>
    <h5 class="text-center text-muted mb-5">จัดทำโดย: อนัญญา ผลจันทร์ (ตาล)</h5>

    <?php
    include_once("connectdb.php");
    $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC;";
    $rs = mysqli_query($conn, $sql);

    $labels = [];
    $values = [];
    $tableData = [];

    while ($data = mysqli_fetch_array($rs)) {
        $labels[] = $data['p_country'];
        $values[] = $data['total'];
        $tableData[] = $data;
    }
    ?>

    <div class="row g-4">
        <div class="col-lg-5">
            <div class="card p-4 h-100">
                <h5 class="card-title mb-3">ตารางสรุปข้อมูล</h5>
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ประเทศ</th>
                            <th class="text-end">ยอดขาย</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tableData as $row) { ?>
                        <tr>
                            <td><?php echo $row['p_country'];?></td>
                            <td align="right" class="fw-bold text-primary"><?php echo number_format($row['total'], 0);?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card p-4 mb-4">
                <canvas id="barChart" height="120"></canvas>
            </div>
            <div class="card p-4">
                <div style="max-width: 350px; margin: auto;">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const ctxLabels = <?php echo json_encode($labels); ?>;
    const ctxData = <?php echo json_encode($values); ?>;
    const colors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'];

    // ตั้งค่ากราฟพื้นฐาน
    const configData = {
        labels: ctxLabels,
        datasets: [{
            label: 'ยอดขาย',
            data: ctxData,
            backgroundColor: colors,
            hoverOffset: 10
        }]
    };

    // แสดง Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: configData,
        options: { 
            plugins: { legend: { display: false }, title: { display: true, text: 'กราฟแท่งแสดงยอดขาย' } },
            scales: { y: { beginAtZero: true } }
        }
    });

    // แสดง Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: configData,
        options: { plugins: { title: { display: true, text: 'สัดส่วนยอดขาย' } } }
    });
</script>
</body>
</html>