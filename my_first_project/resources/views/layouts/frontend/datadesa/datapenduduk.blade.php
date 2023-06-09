    <!-- Konten Start  -->
    <div class="bg-light py-5">
        <div class="col-lg-8 col-xl-6 text-start">
            <h2 class="ms-sm-5">Data Penduduk</h2>
            <hr style="height: 5px; width: 100px; background-color: rgb(0, 255, 94); font-weight: bold; margin-left: 20px; margin-left: 75px;">
        </div>
    
    
<div class="container">

    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="w-75">
            <div class="form-group">
                <input type="text" id="searchInput" class="form-control" style="width: 100%" placeholder="Cari Nama">
            </div>
        </div>
        <div class="w-15 ml-auto">
            <div class="form-group">
                <label for="perPageSelect" class="sr-only">Filter Data</label>
<select id="perPageSelect" class="form-control">
    <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5 Data</option>
    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10 Data</option>
    <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20 Data</option>
    <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100 Data</option>
    <option value="0" {{ $perPage == 0 ? 'selected' : '' }}>Semua Data</option>
</select>
<span class="caret"></span>

            </div>
        </div>
    </div>

    <br>
    
    <table class="table table-striped table-hover text-center">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Lengkap</th>
            <th class="text-center">Status</th>
            <th class="text-center">Tempat Lahir</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Golongan darah</th>
            <th class="text-center">Tanggal Lahir</th>
            <th class="text-center">Agama</th>
            <th class="text-center">Usia</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Nama Kepala Keluarga</th>
        </tr>
        @if($kependudukan->isEmpty())
            <tr>
                <td colspan="12" class="text-center">Data Kosong</td>
            </tr>
        @else
            @foreach($kependudukan as $index => $category)
            <tr class="table-row">
                <td class="text-center">{{ $index + 1 }}</td>
                <td class="text-center">{{$category->nik}}</td>
                <td class="text-center">{{$category->nama}}</td>
                <td class="text-center">{{$category->status}}</td>
                <td class="text-center">{{$category->tempat_lahir}}</td>
                <td class="text-center">{{$category->alamat}}</td>
                <td class="text-center">{{$category->golongan_darah}}</td>
                <td class="text-center">{{$category->date_of_birth}}</td>
                <td class="text-center">{{$category->agama}}</td>
                <td class="text-center">{{$category->usia}}</td>
                <td class="text-center">{{$category->Jenis_Kelamin}}</td>
                <td>{{$category->categorykeluarga->nama_kepala_keluarga}}</td>
            </tr>
            @endforeach
        @endif
    </table>
            
</div>

    </div>
    

    <script>
        $(document).ready(function () {
            $('#searchInput').on('keyup', function () {
                var value = $(this).val().toLowerCase();
                $('table tr').filter('.table-row').each(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    
    
        $(document).ready(function () {
            $('#perPageSelect').on('change', function () {
    
                var perPage = $(this).val();
    
                var url = window.location.href.split('?')[0] + '?perPage=' + perPage;
    
                window.location.href = url;
            });
        }); 
    
    </script>