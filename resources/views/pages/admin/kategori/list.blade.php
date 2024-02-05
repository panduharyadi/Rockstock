@extends('layouts.main')

@section('title', 'Rostock | Kategori')

@section('content')
<section class="bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h4 class="theme-color title mt-5">KATEGORI</h4>
            </div>
        </div>

        {{--  --}}
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">Create</a>

        <div class="card mt-4">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Kategori Name</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategoris as $kategori)
                            <tr>
                                <td><img src="{{ asset($kategori->image) }}" alt="{{ $kategori->kategori_name }}" width="80"></td>
                                <td>{{ $kategori->kategori_name }}</td>
                                <td><a href="{{ route('admin.kategori.detail', $kategori->id) }}" class="btn btn-info kategori-detail">Lihat Produk</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
       
        </div>
    </div>
</section>
@endsection