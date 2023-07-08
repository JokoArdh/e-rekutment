<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <h2 style="text-align: center">Data Pelamar yang diterima</h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Kota</th>
            <th>No hp</th>
            <th>Posisi</th>
            <th>Status</th>
        </tr>
        @foreach($terima as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->user->name }}</td>
          <td>{{ $item->user->kota }}</td>
          <td>{{ $item->user->phone }}</td>
          <td>{{ $item->post->bagian }}</td>
          <td>{{ $item->status }}</td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>