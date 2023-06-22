  <!-- Konten Start -->
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data Jenis Golongan Darah</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
        @php
        use App\Models\Kependudukan;
        $kependudukan = Kependudukan::all();

        $jenisDarah = ["A", "B", "AB", "O", "Tidak Diketahui"];
        $jenisDarahCount = [
            'A' => $kependudukan->where('golongan_darah', 'A')->count(),
            'B' => $kependudukan->where('golongan_darah', 'B')->count(),
            'AB' => $kependudukan->where('golongan_darah', 'AB')->count(),
            'O' => $kependudukan->where('golongan_darah', 'O')->count(),
            'Tidak Diketahui' => $kependudukan->where('golongan_darah', 'Tidak Diketahui')->count()
        ];

        $xValues = json_encode(array_keys($jenisDarahCount));
        $yValues = json_encode(array_values($jenisDarahCount));
        @endphp
        <div class="container text-center">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-center">
                    <canvas id="myChart" style="width: 100%; max-width: 500px"></canvas>
                </div>
                <div class="col-md-6">
                    <div class="chart-legend text-start">
                        <table class="table table-striped table-hover text-center">
                            <tr>
                                <th>Golongan Darah</th>
                                <th>Jumlah</th>
                            </tr>
                            @foreach($jenisDarah as $jenis)
                            <tr>
                                <td>{{ $jenis }}</td>
                                <td>{{ $jenisDarahCount[$jenis] }} Jiwa</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var xValues = @php echo $xValues; @endphp;
        var yValues = @php echo $yValues; @endphp;
        var barColors = ["#b91d47", "#00aba9", "#e83e8c", "#ffc107", "#d3d3d3"];

        new Chart("myChart", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    data: yValues,
                    backgroundColor: barColors
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script>

