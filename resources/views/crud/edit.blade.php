@extends('layouts.admin')
@section('content')
                
            
<div class="col-md-12">
                            <h1 class="text-center">Edit Data Pasien</h1>
                            <hr>
                            <form action="{{route('pasiens.update', $pasien->id)}}" method="POST">
                                @method('PATCH')
                                @csrf
                                
                                <div class="form-group">
                                    <label for="nama"><b>Nama Pasien</b> </label>
                                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') ?? $pasien->nama}}">
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
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" {{old('jenis_kelamin') ?? $pasien->jenis_kelamin == 'L' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="laki_laki"> Laki-laki </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" {{old('jenis_kelamin') ?? $pasien->jenis_kelamin == 'P' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="Perempuan"> Perempuan </label>
                                </div>
            
                                <hr>
            
                                <div class="form-group">
                                    <label for="alamat"><b>Alamat</b> </label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control @error('alamat') is-invalid @enderror">{{old('alamat') ?? $pasien->alamat}}</textarea>
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
            
                                <hr>
            
                                <div class="form-group">
                                    <label for="masuk"><b>Tanggal Pasien Masuk</b> </label>
                                    <input type="date" name="masuk" id="masuk" class="form-control @error('masuk') is-invalid @enderror" value="{{old('masuk') ?? $pasien->masuk}}">
                                    @error('masuk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
            
                                <hr>

                                
                    <div class="form-group">
                        <label for="nomor_kamar"><b>Nomor Kamar</b> </label>
                        <input type="text" name="nomor_kamar" id="nomor_kamar" class="form-control @error('nomor_kamar') is-invalid @enderror" value="{{old('nomor_kamar') ?? $pasien->kamar->nomor_kamar}}">
                        @error('nomor_kamar')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
            
                                <div class="form-group">
                                    <label for="diagnosis"><b>Diagnosa Penyakit</b> </label>
                                    <input type="text" name="diagnosis" id="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror" value="{{old('diagnosis') ?? $pasien->diagnosis}}">
                                    @error('diagnosis')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
            
                                <hr>
            
                                <div class="form-group">
                                    <label for="keluar"><b>Tanggal Pasien Keluar</b> </label>
                                    <input type="date" name="keluar" id="keluar" class="form-control @error('keluar') is-invalid @enderror" value="{{old('keluar') ?? $pasien->keluar}}">
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