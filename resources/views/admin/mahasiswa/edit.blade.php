


@extends('layouts.app')
@section('content')
    <div class="containter p-4">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <p>Edit Mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group mt-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <option value="TI" {{$mahasiswa->jurusan == 'TI' ? 'selected' : ''}}>TI</option>
                                    <option value="SI" {{$mahasiswa->jurusan == 'SI' ? 'selected' : ''}}>SI</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control" value="{{$mahasiswa->npm}}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" value="{{$mahasiswa->tanggal_lahir}}">
                            </div>
                            <div class="row mt-3">
                                    <div class="col-md-2">
                                        <div class="text-center">
                                            <label for="">Gambar Sebelumnya</label>
                                            <img src="{{asset('storage/mahasiswa/'.$mahasiswa->foto)}}" alt="" width="80%">
                                        </div>
                                    </div>
                                
                                <div class="col-md">
                                    <div class="form-group mt-3">
                                        <label for="">Foto</label>
                                        <input type="file" name="foto" class="form-control">
                                        <small class="text-danger">Isi jika ingin merubah foto</small>
                                    </div>
                                </div>
                            </div>
                            <div class="float-end mt-2">
                                <a href="{{route('mahasiswa.index')}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection