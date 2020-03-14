@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Data Buku</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/buku/tambah') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Tanggal Input</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($buku as $no => $bk)
                                <tr>
                                    <td>{{ $no+1 }}</td>
                                    <td>{{ $bk->judul }}</td>
                                    <td>{{ $bk->pengarang }}</td>
                                    <td>{{ $bk->penerbit }}</td>
                                    <td>{{ $bk->tahun }}</td>
                                    <td>{{ $bk->created_at }}</td>
                                    <td>
                                        <form action="{{ url('/buku/' . $bk->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/buku/' . $bk->id) }}" class="btn btn-warning btn-sm">Edit</a>
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