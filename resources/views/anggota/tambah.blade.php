@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-judul">Tambah Data Anggota</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/anggota') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="">Angkatan</label>
                                <input type="integer" name="angkatan" class="form-control" placeholder="Masukkan Angkatan">
                            </div>
                            <div class="form-group">
                                <label for="">Jurusan</label>
                               <select name="jurusan" class="form-control" required>
                               <option value="">..Pilihan Jurusan..</option>
                               <option value="Tata Busana">Tata Busana</option>
                               <option value="Fotografi & Videografi">Fotografi & Videografi</option>
                               <option value="Desain Grafis">Desain Grafis</option>
                               <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                               <option value="Aplikasi Perkantoran">Aplikasi Perkantoran</option>
                               <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                               <option value="Kelistrikan">Kelistrikan</option>
                               <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                               <option value="Kuliner">Kuliner</option>

                               </select>
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="radio" name="gender" value="L"checked>Laki-laki &nbsp;
                                <input type="radio" name="gender" value="P">Perempuan
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempatl" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggall" class="form-control" >
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