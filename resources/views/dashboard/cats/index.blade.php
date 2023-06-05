@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Cats</h1>
  <a href="/dashboard/cats/create" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
  <a href="/dashboard/cats/create" class="btn btn-danger">Delete Data <i class="fas fa-plus-square"></i></a>
  <a href="/dashboard/cats/create" class="btn btn-warning">Edit Data <i class="fas fa-plus-square"></i></a>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Kucing</th>
        <th scope="col">Jenis Kucing</th>
        <th scope="col">Harga Kucing</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>
@endsection