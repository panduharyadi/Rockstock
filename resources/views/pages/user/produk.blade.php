@extends('layouts.main')

@section('title', 'Rostock | Produk')

@section('content')
<section class="bg-gray pt-5 pb-5">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{ asset($kategoris->image) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $kategoris->kategori_name }}</h5>
            <p>Produk berdasarkan kategori {{ $kategoris->kategori_name }}.</p>
          </div>
        </div>
    </div>

    <div class="container">
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary mt-4">Create</a>

        <div class="card mt-4">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Prdouk by Kategori</th>
                            <th>Deskripsi Produk</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $produk->produk_name }}</td>
                                <td>{{ $produk->deskripsi }}</td>
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