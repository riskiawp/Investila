@extends('layouts.us-template')

@section('content')

<section class="section-padding bg-gray">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Pendanaan</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-12 mb-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Dapat Ditarik</td>
                    <td>
                        <button type="button" class="btn btn-success">Tarik Dana</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Tidak Dapat Ditarik</td>
                    <td>
                        <button type="button" class="btn btn-success">Tarik Dana</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>

@endsection