@extends('layout.admin')

@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Artikel</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>S
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
</div>
@endsection