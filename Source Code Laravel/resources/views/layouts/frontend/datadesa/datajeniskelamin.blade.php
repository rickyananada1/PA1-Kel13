    <!-- Konten Start  -->
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data Jenis Kelamin</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
        @php
        use App\Models\Kependudukan;
        $kependudukan = Kependudukan::all();
    
        $jenisKelamin = ["Laki-Laki", "Perempuan"];
        $jenisKelaminCount = [
            'Laki-Laki' => $kependudukan->where('Jenis_Kelamin', 'Laki-Laki')->count(),
            'Perempuan' => $kependudukan->where('Jenis_Kelamin', 'Perempuan')->count(),
        ];
    
        $xValues = json_encode(array_keys($jenisKelaminCount));
        $yValues = json_encode(array_values($jenisKelaminCount));
    @endphp
    
<div class="container text-center">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <canvas id="myChart2" style="width:100%;max-width:500px"></canvas>
        </div>
        <div class="col-md-6">
            <div class="chart-legend text-start">

                <table class="table table-striped table-hover text-center">
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>Jumlah</th>
                    </tr>
                @foreach($jenisKelamin as $jenis)
                    <tr>
                        <td>{{ $jenis }}</td>
                        <td>{{ $jenisKelaminCount[$jenis] }} Jiwa</td>
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
        var barColors = ["#1D267D", "#F266AB"];
    
        new Chart("myChart2", {
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
    
