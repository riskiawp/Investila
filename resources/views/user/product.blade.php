@extends('layouts.us-template')

@section('content')

<section class="section-padding bg-gray">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Our Product</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assetss/img/blog/blog-1.png') }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>Jual Beli Benih Ikan Nila Arwana</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>Jl. Sukabumi Kec. Bojongsoang Kab. Bandung Jawa Barat </p>
            <br>
            <center>
                <h4>RETURN 20,01 / Tahun</h4>
            </center>
            <div class="text-center">
                <a class="button button-hero mt-4" href="{{ url('user/product/detail-product') }}">View</a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assetss/img/blog/blog-2.png') }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>Jual Beli Benih Ikan Nila Arwana</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>Jl. Sukabumi Kec. Bojongsoang Kab. Bandung Jawa Barat </p>
            <br>
            <center>
                <h4>RETURN 20,01 / Tahun</h4>
            </center>
            <div class="text-center">
                <a class="button button-hero mt-4" href="{{ url('user/product/detail-product') }}">View</a>
            </div>
            </div>
        </div>
        </div>
</section>

@endsection