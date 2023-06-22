<!-- Konten Start -->
<div class="bg-light py-5">
    <div class="col-lg-8 col-xl-6 text-start">
        <h2 class="ms-sm-5">Data Jumlah Penduduk</h2>
        <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
    </div>
    @php
    use App\Models\Kependudukan;
    $currentYear = date('Y');
    $startYear = 2015;

    // Data dari database (Tahun Sekarang)
    $datasekarang = ["Tahun Sekarang"];
    $datasekarangCount = [
        'Tahun Sekarang' => $kependudukan->count(),
    ];

    // Data dari database (2015-2022)
    $dataTahun = range($startYear, $currentYear - 1);
    $dataCount = [];
    foreach ($dataTahun as $year) {
        $dataCount[$year] = Kependudukan::whereYear('date_of_birth', '<=', $year)->count();
    }

    // Menggabungkan kedua data
    $xValues = json_encode(array_merge(array_keys($dataCount), array_keys($datasekarangCount)));
    $yValues = json_encode(array_merge(array_values($dataCount), array_values($datasekarangCount)));
    @endphp

    <div class="container text-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <canvas id="myChart0" style="width:100%;max-width:1000px"></canvas>
            </div>
            <div class="col-md-6">
                <div class="chart-legend text-start">
                    <table class="table table-striped table-hover text-center">
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                        @foreach($dataCount as $tahun => $jumlah)
                        <tr>
                            <td>{{ $tahun }}</td>
                            <td>{{ $jumlah }} Jiwa</td>
                        </tr>
                        @endforeach
                        @foreach($datasekarang as $jenis)
                        <tr>
                            <td><b>{{ $jenis }}</b></td>
                            <td><b>{{ $datasekarangCount[$jenis] }} Jiwa</b></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var xValues = <?php echo $xValues; ?>;
    var yValues = <?php echo $yValues; ?>;

    // Menghapus nilai undefined dari xValues dan yValues
    var filteredXValues = xValues.filter(value => value !== undefined);
    var filteredYValues = yValues.filter(value => value !== undefined);

    var barColors = ["#FC4F00", "#068DA9"];

    new Chart("myChart0", {
        type: "bar",
        data: {
            labels: filteredXValues,
            datasets: [{
                data: filteredYValues,
                backgroundColor: barColors
            }]
        },
    });
</script>   
