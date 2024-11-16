<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body onload="window.print()">

    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Jurusan</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $mahasiswa as $data)
            
            
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->jurusan}}</td>
            <td>{{$data->npm}}</td>
            <td>{{$data->nama}}</td>
            <td>{{Carbon\carbon::parse($data->tanggal_lahir)->format('d-m-Y')}}</td>
            <td>
                <img src="{{asset('storage/mahasiswa/'.$data->foto)}}" alt="" width="60">
            </td>
            </tr>
            @endforeach
        </tbody>
        </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>