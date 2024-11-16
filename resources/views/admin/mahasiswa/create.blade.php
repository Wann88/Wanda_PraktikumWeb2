


@extends('layouts.app')
@section('content')
    <div class="containter p-4">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <p>Tambah Mahasiswa</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option value="">- pilih -</option>
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">NPM</label>
                                <input type="text" name="npm" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Foto</label>
                                <input type="file" name="foto" class="form-control">
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