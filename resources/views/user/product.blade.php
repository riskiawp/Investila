@extends('layouts.us-template')

@section('content')

<section class="section-padding bg-gray">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Our Product</h2>
    </div>

    <div class="row">
        @foreach ($lot as $key => $l)
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assets/img/lot'.'/'.$l->image) }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>{{$l->ikan}}</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>{{$l->lokasi}}</p>
            <br>
            <center>
                <h4>RETURN {{$l->roi}}/ Tahun</h4>
            </center>
            <div class="text-center">
                <a class="button button-hero mt-4" href="{{ url('user/product/detail-product'). '/' . $l->id }}">View</a>
            </div>
            </div>
        </div>
        </div>
        @endforeach

        </div>
</section>

@endsection