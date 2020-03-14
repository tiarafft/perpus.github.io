@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Data Anggota</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/anggota/tambah') }}" class="btn btn-primary btn-sm float-right">Tambah Anggota</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>NIS</th>
                                    <th>Nama Lengkap</th>
                                    <th>Angkatan</th>
                                    <th>Jurusan</th>
                                    <th>Gender</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($anggota as $no => $ag)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $ag->nama }}</td>
                                    <td>{{ $ag->angkatan }}</td>
                                    <td>{{ $ag->jurusan }}</td>
                                    <td>{{ $ag->gender }}</td>
                                    <td>{{ $ag->tempatl }}</td>
                                    <td>{{ $ag->tanggall }}</td>
                                    <td>
                                        <form action="{{ url('/anggota/' . $ag->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/anggota/' . $ag->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin dihapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection