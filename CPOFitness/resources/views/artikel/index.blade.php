<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 " >Artikel</h1>

    <div class="container">
        <div class="row">
        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID ARTIKEL</th>
      <th scope="col">JUDUL</th>
      <th scope="col">ISI</th>
      <th scope="col">FOTO</th>
      <th scope="col"><a href="/artikel/create" class="btn btn-success">Tambah +</a></th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($dataArtikel as $row)
    <tr>
      <th scope="row">{{ $row->idartikel}}</th>
      <td>{{ $row->judul}}</td>
      <td>{{ $row->isi}}</td>
      <td>{{ $row->fotoartikel}}</td>
      <td>
        <a href="/artikel/edit/{{ $row->idartikel}}"
            class="btn btn-warning">Edit</a>
        <a href="/artikel/destroy/{{ $row->idartikel}}"
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