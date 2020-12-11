@extends('layouts.us-template')

@section('content')
<!--================Header Menu Area =================-->


<!--================Hero Banner Area Start =================-->
<section class="hero-banner magic-ball">
    <div class="container">

    <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
        <h1>Let's Invest to Get The Best Profit</h1>
        <p>Website ini sangat berguna bagi anda yang ingin memulai investasi di budidaya ikan nila dan sangat cocok bagi mitra yang tidak memliki lahan untuk membudidayakan.</p>
        <a class="button button-hero mt-4" href="#">Get Started</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
        <img class="img-fluid" src="{{ asset('assetss/img/home/bgg.png') }}" alt="">
        </div>
    </div>
    </div>
</section>
<!--================Hero Banner Area End =================-->


<!--================Service Area Start =================-->
<section class="section-margin generic-margin">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Mengapa Harus Berinvestasi?</h2>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="service-card text-center">
            <div class="service-card-img">
            <img class="img-fluid" src="{{ asset('assetss/img/home/1.png') }}" alt="">
            </div>
            <div class="service-card-body">
            <h3>Menciptakan Sumber Keuangan Baru</h3>
            <p>Anda bisa menciptakan sumber keuangan baru karena berinvestasi memberikan Anda kesempatan untuk menambah nilai atas uang Anda.</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="service-card text-center">
            <div class="service-card-img">
            <img class="img-fluid" src="{{ asset('assetss/img/home/2.png') }}" alt="">
            </div>
            <div class="service-card-body">
            <h3>Biarkan Uang yang Bekerja Untuk Anda</h3>
            <p>Ketika Anda berinvestasi, dana yang akan Anda investasikan akan menghasilkan uang tambahan dari bunga yang dihasilkannya.</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="service-card text-center">
            <div class="service-card-img">
            <img class="img-fluid" src="{{ asset('assetss/img/home/3.png') }}" alt="">
            </div>
            <div class="service-card-body">
            <h3>Mempersiapkan Dana Pensiun Untuk Anda</h3>
            <p>Dana investasi beserta keuntungannya bisa Anda nikmati ketika pensiun. Nilai uang akan terus bertambah seiring berjalannya waktu.</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!--================Service Area End =================-->

<!--================Testimonial section Start =================-->
<section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Cara Kerja</h2>
    </div>
    <div class="owl-carousel owl-theme testimonial pb-xl-5">
        <div class="testimonial__item">
        <div class="row">
            <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
                <h3>1. Pilih Jenis Budidaya</h3><br>
                <p>Tentukan jenis budidaya untuk diinvestasikan yang menurut Anda paling menguntungkan dan cocok untuk Anda.</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
            </div>
        </div>
        </div>
        <div class="testimonial__item">
        <div class="row">
            <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
                <h3>2. Tentukan Jumlah Lot</h3><br>
                <p>Tentukan jumlah dana yang akan Anda investasikan. Semakin banyak yang Anda investasikan, semakin besar keuntungan yang Anda peroleh.</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
            </div>
        </div>
        </div>
        <div class="testimonial__item">
        <div class="row">
            <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
                <h3>3. Budidaya dan Pantau Perkembangannya</h3><br>
                <p>Benih ditebar dan tim Infishta akan melaporkan perkembangan budidaya secara berkala, langsung ke dashboard Anda.</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
            </div>
        </div>
        </div>
        <div class="testimonial__item">
        <div class="row">
            <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
                <h3>4. Budidaya Dipanen</h3><br>
                <p>Masa panen telah tiba, petani ikan akan melakukan proses panen yang kemudian akan dijual ke pasar.</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!--================Testimonial section End =================-->


<!--================Search Package section Start =================-->
<section class="section-margin">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
        <div class="search-content">
            <h2>Hitung Simulasi Bagi Hasil</h2>
            <p>Simulasikan Keuntunganmu Di Sini!</p>
        </div>
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
        <div class="search-wrapper">
            <h3>Simulasi Keuntungan</h3>
            <form class="search-form" action="#">
            <div class="form-group">
                <select name="category" id="category">
                <option value="disabled" disabled selected>Pilih Kategori</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
                </select>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="number" class="form-control" placeholder="Return Per Tahun">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="number" class="form-control" placeholder="Jumlah Lot">
                </div>
            </div>
            <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Check</button>
            </div>
            <p>Keuntungan Anda Per Tahun</p>
            <p>Rp. 500.000,00</p>
            </form>
        </div>

        </div>
    </div>
    </div>
</section>
<!--================Search Package section End =================-->


<!--================Blog section Start =================-->
<section class="section-padding bg-gray">
    <div class="container">
    <div class="section-intro text-center pb-90px">
        <h2>Our Artikel</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assetss/img/blog/blog-1.png') }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assetss/img/blog/blog-2.png') }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
        </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
        <div class="card-blog">
            <img class="card-img rounded-0" src="{{ asset('assetss/img/blog/blog-3.png') }}" alt="">
            <div class="card-blog-body">
            <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
            </a>
            <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
            </ul>
            <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!--================Blog section End =================-->
@endsection

<!-- ================ start footer Area ================= -->
