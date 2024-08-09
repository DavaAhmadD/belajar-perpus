@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h4 class="text-create">Tambah Daftar Buku</h4>
                </div>
                <form class="mt-2" action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col">
                            <label class="fw-semibold" for="judul_buku">Judul Buku :</label>
                            <input name="judul_buku" type="text" class="form-control" placeholder="Masukkan judul buku" required>
                        </div>
                        <div class="col">
                            <label class="fw-semibold" for="cover_buku">Cover Buku :</label>
                            <input name="cover_buku" type="file" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="fw-semibold" for="penulis">Penulis :</label>
                            <input name="penulis" type="text" class="form-control" placeholder="Masukkan penulis buku" required>
                        </div>
                        <div class="col">
                            <label class="fw-semibold" for="penerbit">Penerbit :</label>
                            <input name="penerbit" type="text" class="form-control" placeholder="Masukkan penerbit buku" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="fw-semibold" for="deskripsi_buku">Deskripsi Buku :</label>
                            <textarea name="deskripsi_buku" type="text" class="form-control" placeholder="Masukkan deskripsi buku" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label class="fw-semibold" for="tahun_terbit">Tahun Terbit :</label>
                            <input name="tahun_terbit" type="number" class="form-control" placeholder="Masukkan tahun terbit buku" required>
                        </div>
                        <div class="col">
                            <label class="fw-semibold" for="stok">Stok :</label>
                            <input name="stok" type="number" class="form-control" placeholder="Masukkan stok buku" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a class="button btn-batal fw-semibold" href="{{ route('buku.index') }}">Batal</a>
                            <button type="submit" class="button btn-simpan fw-semibold ms-2">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection