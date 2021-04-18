@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="py-2 d-flex justify-content-end align-items-center">
                <h1 class="mr-auto">Tabel Pasien {{ $pasien->nama }}</h1>
                <a href="{{ url('/pasiens/'.$pasien->id.'/edit') }}" class="btn btn-info">Edit</a>

                                           
                    <form action="{{ url('/pasiens/'.$pasien->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                
            </div>

                @if (session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('pesan') }}
                </div>
                @endif

            <ul>
                <li>Nama  : {{ $pasien->nama }}</li>
                <li>Jenis Kelamin : {{ $pasien->jenis_kelamin  == 'P' ? 'perempuan' : 'Laki-laki'}}</li>
                <li>Alamat : {{ $pasien->alamat }}</li>
                <li>Tanggal Masuk : {{ $pasien->masuk }}</li>
                <li>Nama Kamar : {{ $pasien->kamar->nama_kamar }}</li>
                <li>Diagnosa : {{ $pasien->diagnosis }}</li>
                <li> Tanggal Keluar : {{ $pasien->keluar }} </li>
            </ul>
            <a href="{{ url('/admin')}}" class="btn btn-primary">kembali</a>
        </div>
    </div>
</div>
@endsection