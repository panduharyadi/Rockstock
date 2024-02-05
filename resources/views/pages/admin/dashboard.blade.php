@extends('layouts.main')

@section('title', 'Rostock | Admin')

@section('content')
<section class="bg-gray pt-5 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h4 class="theme-color title mt-5">DASHBOARD</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
       
        </div>
    </div>
</section>
@endsection