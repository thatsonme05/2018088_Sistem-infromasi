@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Transactions</h1>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Jenis Transaksi</th>
        <th scope="col">Treatment</th>
        <th scope="col">Total Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
      </tr>
      <tr>
        <td>1,001</td>
        <td>random</td>
        <td>data</td>
        <td>placeholder</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection