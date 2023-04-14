
Selamat Datang {{Auth::user()->name}}
    <table border="3">
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
        </tr>
        @php($i = 1)
        @foreach ($users as $user)
        <tr> 
        <td>{{$i++}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
        </tr>
        @endforeach
    </table>
