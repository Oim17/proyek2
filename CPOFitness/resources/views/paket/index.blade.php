@extends('layout.admin')

@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Paket Member</h1>
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
        <div class="row">
        <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Foto</th>
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
            <td>{{ $row->foto_paket}}</td>

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
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      </div>
      </div>
  @endsection