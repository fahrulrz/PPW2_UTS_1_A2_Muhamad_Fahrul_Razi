<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <table>
        <thead>
            <tr class="table">
                <th scope="col">Nama Pemain</th>
                <th scope="col">No Punggung</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td scope="row">{{ $player->nm_pemain }}</td>
                    <td>{{ $player->no_punggung }}</td>
                    <td>{{ $player->posisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</body>
</html>