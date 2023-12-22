@extends('layout.admin')

@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Update Artikel</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

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
</div>
@endsection