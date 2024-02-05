@extends('layouts.main')

@section('title', 'Create Produk')

@section('content')
    @csrf
    <div class="card mt-4" >
        <div class="card-body" style="margin-top: 100px;">
            <form action="{{ route('admin.produk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="kategori">Name of Produk</label>
                    <input type="text" name="produk_name" class="form-control" placeholder="Masukkan nama kategori">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Deskripsi produk" name="deskripsi" id="deskripsi"></textarea>
                        <label for="deskripsi">Deskripsi</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Pilih Kategori</label>
                    <select name="kategori" id="kategori" class="form-control">
                        <option selected disabled>Pilih kategori apa</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->kategori_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection