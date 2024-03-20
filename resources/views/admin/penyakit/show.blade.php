@extends('admin.layouts.main')
@section('content')
<div class="container pt-3">
    <h2 class="text-center">Daftar Penyakit</h2>
    
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
      {{ session('success') }}
    </div>
  @endif
    <table class="table table-striped">
      <thead class="text-center">
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Kode Penyakit</th>
          <th scope="col">Nama Penyakit</th>
          <th scope="col">Detail Penyakit</th>
          <th scope="col">Solusi Penyakit</th>
          <th colspan="2" scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @php
            $no=1;
        @endphp
        @foreach ($penyakit as $p)
        <center>
        <tr>
          <th scope="row">{{ $no++ }}</th>
          <td>{{ $p->kode_penyakit }}</td>
          <td>{{ $p->nama_penyakit }}</td>
          <td>{{ $p->detail_penyakit }}</td>
          <td>{{ $p->solusi_penyakit }}</td>
          <td>
            <a href="#" class="btn btn-primary">
              <i class="fas fa-edit"></i> 
           </a>
          </td>
          <td>
            <a href="#" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">
              <i class="fas fa-trash-alt"></i> 
            </a>
          </td>

        </tr>
      </center>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection