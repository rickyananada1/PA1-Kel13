    <!-- Konten Start  -->
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data Agama</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
        @php
        use App\Models\Kependudukan;
        $kependudukan = Kependudukan::all();
    
        $jenisAgama = ["Kristen Katolik", "Islam", "Budha", "Kong Hucu" , "Kristen Protestan"];
        $jenisAgamaCount = [
            'Kristen Katolik' => $kependudukan->where('agama', 'Kristen Katolik')->count(),
            'Islam' => $kependudukan->where('agama', 'Islam')->count(),
            'Budha' => $kependudukan->where('agama', 'Budha')->count(),
            'Kong Hucu' => $kependudukan->where('agama', 'Kong Hucu')->count(),
            'Kristen Protestan' => $kependudukan->where('agama', 'Kristen Protestan')->count()

        ];
    
        $xValues = json_encode(array_keys($jenisAgamaCount));
        $yValues = json_encode(array_values($jenisAgamaCount));
        @endphp
<div class="container text-center">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6 text-center">
            <canvas id="myChart1" style="width:100%;max-width:500px"></canvas>
        </div>
        <div class="col-md-6">
            <div class="chart-legend text-start">

                <table class="table table-striped table-hover text-center">
                    <tr>
                        <th>Agama</th>
                        <th>Jumlah</th>
                    </tr>
                    <tr>
                        @foreach($jenisAgama as $jenis)
                        <td>{{ $jenis }}</td>
                        <td>{{ $jenisAgamaCount[$jenis] }}</td>
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
       var xValues = @php echo $xValues; @endphp;
            var yValues = @php echo $yValues; @endphp;
            var barColors = ["blue", "green", "black", "yellow"];


            new Chart("myChart1", {
                type: "pie",
                data: {
                    labels: xValues, datasets: [{
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


</html>    <!-- JAVASCRIPT FILES -->


