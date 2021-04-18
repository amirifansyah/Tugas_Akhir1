@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Tambah kamar</h1>
                <hr>
                <form action="{{Route('kamars.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kamar">Nama Kamar</label>
                        <input type="text" class="form-control @error('nama_kamar') is-invalid @enderror" name="nama_kamar" value="{{old('nama_kamar')}}">
                        @error('nama_kamar')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{old('kelas')}}">
                        @error('kelas')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas Pasien</label>
                        <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" name="kapasitas" value="{{old('kapasitas')}}">
                        @error('kapasitas')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" >simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection