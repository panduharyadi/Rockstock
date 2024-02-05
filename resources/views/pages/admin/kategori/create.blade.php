@extends('layouts.main')

@section('title', 'Create Kategori')

@section('content')
    @csrf
    <div class="card mt-4" >
        <div class="card-body" style="margin-top: 100px;">
            <form action="{{ route('admin.kategori.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="mb-3">
                    <label for="kategori">Name of Kategori</label>
                    <input type="text" name="kategori_name" class="form-control" placeholder="Masukkan nama kategori">
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection