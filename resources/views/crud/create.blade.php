{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        body{
            background-color: gold
        }
    </style>
</head>
<body> --}}
    

    {{-- <div class="container">
        <div class="row"> --}}

@extends('layouts.admin')
@section('content')
    

            <div class="col-md-12">
                <h1 class="text-center">Buat Data Pasien</h1>
                <hr>
                <form action="{{route('pasiens.store')}}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nama"><b>Nama Pasien</b> </label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="jenis_kelamin"><b>Jenis Kelamin</b> </label>
                        @error('jenis_kelamin')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" {{old('jenis_kelamin') == 'L' ? 'checked' : ''}}>
                        <label class="form-check-label" for="laki_laki"> Laki-laki </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" {{old('jenis_kelamin') == 'P' ? 'checked' : ''}}>
                        <label class="form-check-label" for="Perempuan"> Perempuan </label>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="alamat"><b>Alamat</b> </label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="masuk"><b>Tanggal Pasien Masuk</b> </label>
                        <input type="date" name="masuk" id="masuk" class="form-control @error('masuk') is-invalid @enderror">
                        @error('masuk')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="kamar_id">Kamar</label>
                        <select class="form-control" id="kamar_id" name="kamar_id">
                            @foreach ($kamars as $kamar)
                                <option value="{{ $kamar->id }}" {{old('kamar_id') == "$kamar->nama_kamar" ? 'selected' : ''}}>
                                    {{$kamar->nama_kamar}}
                                </option>
                            @endforeach
                        </select>
                        @error('kamar_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <hr>


                    <div class="form-group">
                        <label for="diagnosis"><b>Diagnosa Penyakit</b> </label>
                        <input type="text" name="diagnosis" id="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror">
                        @error('diagnosis')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="keluar"><b>Tanggal Pasien Keluar</b> </label>
                        <input type="date" name="keluar" id="keluar" class="form-control @error('keluar') is-invalid @enderror">
                        @error('keluar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-secondary">Simpan</button>
                    <hr>
                </form>
            </div>

            @endsection