<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 " >Edit Artikel</h1>
    <div class="container">
    <div class="card">
        <div class="card-body">
        <div class="row">
    <form method="POST" action="/artikel/update/{{ $dataArtikel->idartikel }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dataArtikel->idartikel }}">
        <div class="mb-3">
            <label class="form-label">ID ARTIKEL</label>
            <input type="number" class="form-control" value="{{ $dataArtikel->idartikel }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">JUDUL</label>
            <input type="text" name="judul" class="form-control" 
            value="{{ $dataArtikel->judul }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ISI</label>
            <input type="text" name="isi" class="form-control" 
            value="{{ $dataArtikel->isi }}" required>
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">FOTO</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        </div>
        </div>
        </div>
        <a href="/artikel" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>