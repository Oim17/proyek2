<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Paket Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 " >Paket Member</h1>

    <div class="container">
        <div class="row">
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col"><a href="/paket/create" class="btn btn-success">Tambah +</a></th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($dataPaket as $row)
    <tr>
      <th scope="row">{{ $row->kode}}</th>
      <td>{{ $row->nama}}</td>
      <td>{{ $row->deskripsi}}</td>
      <td>{{ $row->harga}}</td>
      <td>
        <a href="/paket/edit/{{ $row->kode}}"
            class="btn btn-warning">Edit</a>
        <a href="/paket/destroy/{{ $row->kode}}"
            class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>