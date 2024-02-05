@extends('layouts.main')

@section('title', 'Rostock | Kategori')

@section('content')
<section class="bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h4 class="theme-color title mt-5">Produk Berdasarkan Kategori {{ $kategoris->kategori_name }}</h4>
            </div>
        </div>

        {{--  --}}
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary">Create</a>

        <div class="card mt-4">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Prdouk by Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $produk->produk_name }}</td>
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