<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Paket Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 " >Edit Paket Member</h1>
    <div class="container">
    <div class="card">
        <div class="card-body">
        <div class="row">
    <form method="POST" action="/paket/update/{{ $dataPaket->kode }}">
        {{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $dataPaket->kode }}">
        <div class="mb-3">
            <label class="form-label">KODE</label>
            <input type="text" class="form-control" value="{{ $dataPaket->kode }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" 
            value="{{ $dataPaket->nama }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">DESKRIPSI</label>
            <input type="text" name="deskripsi" class="form-control" 
            value="{{ $dataPaket->deskripsi }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">HARGA</label>
            <input type="number" name="harga" class="form-control" 
            value="{{ $dataPaket->harga }}" required>
        </div>
        </div>
        </div>
        </div>
        <a href="/paket" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>