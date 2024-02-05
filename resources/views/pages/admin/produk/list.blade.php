@extends('layouts.main')

@section('title', 'Rostock | Produk')

@section('content')
<section class="bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h4 class="theme-color title mt-5">PRODUK</h4>
            </div>
        </div>

        {{--  --}}
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">Create</a>

        <div class="card mt-4">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Produk Name</th>
                            <th>Kategori Produk</th>
                            <th>Deskripsi</th>
                            <th>PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $produk->produk_name }}</td>
                                <td>{{ $produk->kategori->kategori_name }}</td>
                                <td>{{ $produk->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('admin.produk.download', $produk->id) }}" class="btn btn-warning">Download</a>
                                </td>
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