<div class="main comtainer ">

    <div class="row mb mx-auto d-flex align-center">
        <div class="col-lg-6">
            <div class="boxtitle">SẢN PHẨM MỚI</div>
            <div class=" boxcontent ">

            </div>
        </div>
        <div class="col-lg-6  ">
            <div class=" mb">
                <div class="boxtitle">SẢN PHẨM XEM NHIỀU NHẤT</div>
                <div class=" boxcontent ">

                </div>
            </div>
        </div>
        <div class=" col-lg-6 ">
            <div class=" mb">
                <div class="boxtitle">BÌNH LUẬN MỚI</div>
                <div class=" boxcontent ">

                </div>
            </div>
        </div>
        <div class="col-lg-6  ">
            <div class="mb">
                <div class="boxtitle">BÌNH LUẬN MỚI</div>
                <div class=" boxcontent ">

                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="boxtitle">THỐNG KÊ SẢN PHẨM</div>
            <div class=" boxcontent ">
                <div id="myChart" style="width:100%; max-width:600px; height:500px;">
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script>
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Danh mục', 'Số lượng sản phẩm'],
                            <?php
                            $tongdm = count($data['thongke']);
                            $i = 1;
                            foreach ($data['thongke'] as $item) {
                                if ($i == $tongdm) {
                                    $dauphay = "";
                                } else {
                                    $dauphay = ",";
                                }
                                echo "['" . $item['name'] . "', " . $item['count_sp'] . "]" . $dauphay;
                                $i++;
                            }
                            ?>
                        ]);

                        var options = {
                            title: 'Thống kê sản phẩm theo danh mục',
                            'width': 800,
                            'height': 500
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </div>


</div>