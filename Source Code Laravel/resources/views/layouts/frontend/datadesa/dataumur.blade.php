
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data usia</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
        @php
        use App\Models\Kependudukan;
        $kependudukan = Kependudukan::all();

        $ageGroups = [
            '0-6' => $kependudukan->where(function ($item) {
                return $item->usia >= 0 && $item->usia <= 6;
            })->count(),
            '7-12' => $kependudukan->where(function ($item) {
                return $item->usia >= 7 && $item->usia <= 12;
            })->count(),
            '13-15' => $kependudukan->where(function ($item) {
                return $item->usia >= 13 && $item->usia <= 15;
            })->count(),
            '16-18' => $kependudukan->where(function ($item) {
                return $item->usia >= 16 && $item->usia <= 18;
            })->count(),
            '19-30' => $kependudukan->where(function ($item) {
                return $item->usia >= 19 && $item->usia <= 30;
            })->count(),
            '30+' => $kependudukan->where('usia', '>', 30)->count(),
        ];

        $xValuesAge = json_encode(array_keys($ageGroups));
        $yValuesAge = json_encode(array_values($ageGroups));
        @endphp
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-center">
                    <canvas id="myChartAge" style="width: 100%; max-width: 1000px"></canvas>
                </div>
                <div class="col-md-6">
                    <div class="chart-legend text-start">
                        <table class="table table-striped table-hover text-center">
                            <tr>
                                <th>usia</th>
                                <th>Jumlah</th>
                            </tr>
                            @foreach($ageGroups as $age => $count)
                            <tr>
                                <td>{{ $age }}</td>
                                <td>{{ $count }} Jiwa</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var xValuesAge = @php echo $xValuesAge; @endphp;
        var yValuesAge = @php echo $yValuesAge; @endphp;
        var barColorsAge = ["#b91d47", "#00aba9", "#e83e8c", "#ffc107", "#d3d3d3", "#ff00ff"];

        new Chart("myChartAge", {
            type: "bar",
            data: {
                labels: xValuesAge,
                datasets: [{
                    data: yValuesAge,
                    backgroundColor: barColorsAge
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
