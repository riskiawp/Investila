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
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trans as $key => $tr)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$tr->lot->ikan}}</td>
                    @if ($tr->status)
                    <td>
                        <button type="button" class="btn btn-success">Tarik Dana</button>
                    </td>
                    @else
                    <td>
                        <button type="button" class="btn btn-danger">Tidak Dapat Ditarik</button>
                    </td>
                    @endif
                    
                </tr>
                @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>

@endsection