    <!-- Konten Start  -->
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data Jumlah Penduduk</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
        @php
        use App\Models\Kependudukan;
        $kependudukan = Kependudukan::all();
    
        // Data dari database (2023)
        $datasekarang = ["sekarang"];
        $datasekarangCount = [
            'sekarang' => $kependudukan->count(),
        ];
    
        // Data manual (2015)
        $data2015 = ["2015"];
        $data2015Count = [
            '2015' => 546, // Ganti dengan nilai yang diinginkan
        ];
    
        // Menggabungkan kedua data
        $xValues = json_encode(array_merge(array_keys($data2015Count), array_keys($datasekarangCount)));
        $yValues = json_encode(array_merge(array_values($data2015Count), array_values($datasekarangCount)));
    @endphp
    

    
    
<div class="container text-center">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <canvas id="myChart0" style="width:100%;max-width:1000px"></canvas>
        </div>
        <div class="col-md-6">
            <div class="chart-legend text-start">
                @foreach($data2015 as $jenis)
                <table class="table table-striped table-hover text-center">
                    <tr>
                        <th>Tahun</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        <td>{{ $jenis }}</td>
                        <td>{{ $data2015Count[$jenis] }} Jiwa</td>
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
    
    
        
        
        
    </div>
    

    <script>
        var xValues = <?php echo $xValues; ?>;
        var yValues = <?php echo $yValues; ?>;

var barColors = ["#FC4F00", "#068DA9"];

new Chart("myChart0", {
    type: "bar",
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
    
