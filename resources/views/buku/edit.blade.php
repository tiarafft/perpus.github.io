@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Edit Data Buku</h3>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/buku/' . $buku->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" placeholder="Masukkan Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="">Pengarang</label>
                                <input type="text" name="pengarang" class="form-control" value="{{ $buku->pengarang }}" placeholder="Masukkan Nama Pengarang">
                            </div>
                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" placeholder="Masukkan Nama Penerbit">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Terbit</label>
                                <input type="number" name="tahun" class="form-control" value="{{ $buku->tahun }}">
                            </div>
                            <div class="form-group">
                                <input type="reset">
                                <button class="btn btn-primary btn-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection