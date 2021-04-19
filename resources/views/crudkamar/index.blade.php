@extends('layouts.admin')

@section('content')


<div class="row">
  <div class="col-12">
    <div class="card">
      @if (session('pesan'))
      <div class="alert alert-success">
          {{ session('pesan') }}
      </div>
  @endif
      <div class="card-header">
        <h2 class="card-title">Daftar kamar</h2>
       
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <a href="{{route('kamars.create')}}" class="btn btn-success">Create new</a>
             
    
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Kamar</th>
              <th>Kelas</th>
              <th>Kapasitas Pasiens</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($kamars as $kamar)
              <tr>
                  <td>{{ $loop->iteration}}</td>
                  <td> <a href="{{route('kamars.show', ['kamar' => $kamar->id])}}">{{ $kamar->nama_kamar}}</a> </td>
                  <td>{{ $kamar->kelas}}</td>
                  <td>{{ $kamar->kapasitas}}</td>
              </tr>    
              @empty
                  <td colspan="8" class="text-center" >Data Kosong</td>
              @endforelse
              
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection