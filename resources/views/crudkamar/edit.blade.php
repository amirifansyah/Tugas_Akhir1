@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Daftar Kamar</h1>
                <hr>
                <form action="{{route('kamars.update', $kamar->id)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama_kamar">Nama Kamar</label>
                        <input type="text" name="nama_kamar" id="nama_kamar" class="form-control @error('nama_kamar') is-invalid @enderror" value="{{old('nama_kamar') ?? $kamar->nama_kamar }}">
                        @error('nama_kamar')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{old('kelas') ?? $kamar->kelas}}">
                        @error('kelas')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas Kamar</label>
                        <input type="text" name="kapasitas" id="kapasitas" class="form-control @error('kapasitas') is-invalid @enderror" value="{{old('kapasitas') ?? $kamar->kapasitas}}">
                        @error('kapasitas')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button class="btn btn-info">simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection