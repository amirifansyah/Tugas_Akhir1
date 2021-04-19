@extends('layouts.admin')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2 d-flex justify-content-end align-items-center">
                    <h1 class="mr-auto">Detail Kamar {{ $kamar->nama_kamar }}</h1>
                    <a href="{{ url('/kamars/'.$kamar->id.'/edit') }}" class="btn btn-info">Edit</a>

                                           
                        <form action="{{ url('/kamars/'.$kamar->id)}}" method="POST">
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
                    <li>Nama Kamar : {{ $kamar->nama_kamar}}</li>
                    <li>Kelas : {{ $kamar->kelas}}</li>
                    <li>kapasitas Kamar : {{ $kamar->kamar}}</li>
                </ul>
                <a href="{{ route('kamars.index')}}" class="btn btn-primary">kembali</a>
            </div>
        </div>
    </div>
    
@endsection