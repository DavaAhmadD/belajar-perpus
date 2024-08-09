@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="row mb-3">
            <div class="d-flex justify-content-end">
                <a class="button btn-tambah fw-semibold text-dark" href="{{ route('buku.create') }}"><i class="bi bi-journal-plus fw-semibold"></i> Tambah Buku</a>
            </div>
        </div>
        <div class="row">
            <table id="table-buku" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Judul Buku</th>
                        <th>Cover Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftar_buku as $b)
                        
                    <tr>
                        <td>{{ $b->judul_buku }}</td>
                        <td><img src="{{ asset('storage/buku/'.$b->cover_buku) }}" alt="" style="width: 150px"></td>
                        <td>{{ $b->penulis }}</td>
                        <td>{{ $b->penerbit }}</td>
                        <td>{{ $b->tahun_terbit }}</td>
                        <td>{{ $b->stok }}</td>
                        <td>
                            <form action="{{ route('buku.destroy',['id' => $b->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection