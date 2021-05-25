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
          <h3 class="card-title">Daftar Pasien</h3>
        
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <a href="{{route('pasiens.create')}}" class="btn btn-success">Create</a>
              
      
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            
            <thead>
              <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Masuk</th>
                <th>Nama Kamar</th>
                <th>Diagnosa</th>
                <th>Tanggal Keluar</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($pasiens as $pasien)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td> <a href="{{route('pasiens.show', ['pasien' => $pasien->id])}}">{{ $pasien->nama}}</a> </td>
                    <td>{{ $pasien->jenis_kelamin == 'P' ? 'perempuan' : 'Laki-laki'}}</td>
                    <td>{{ $pasien->alamat}}</td>
                    <td>{{ $pasien->masuk}}</td>
                    <th>{{ $pasien->kamar->nama_kamar }}</th>
                    <td>{{ $pasien->diagnosis}}</td>
                    <td>{{ $pasien->keluar}}</td>
                    <td>   <form action="{{ url('/pasiens/'.$pasien->id)}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger">Hapus</button>
                  </form> </td>
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