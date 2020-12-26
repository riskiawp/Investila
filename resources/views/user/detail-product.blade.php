@extends('layouts.us-template')

@section('content')

<section class="section-padding magic-ball magic-ball-sm magic-ball-about">
        <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            <div class="about-img">
                <img class="img-fluid" src="{{ asset('assetss/img/home/ikan-nila-benih.jpg') }}" alt="">
            </div>
            </div>
            <div class="col-lg-7 col-md-12 align-self-center about-content">
            <tr>
                <td>
                <h4><i class="fas fa-map-marker-alt"></i> Lokasi : {{$lot->lokasi}}</h4><hr>
                <h4><i class="fas fa-percent"></i> ROI : {{$lot->roi}} / Tahun</h4><hr>
                <h4><i class="fas fa-file-alt"></i> Kontrak : 12 Bulan</h4><hr>
                <h4><i class="fas fa-shopping-cart"></i> Beli : Minimal 5 Slot</h4><hr>
                <h4><i class="fas fa-exclamation-triangle"></i> Kategori Resiko : Rendah</h4><hr>
                <form class="form-contact contact_form" action="#">
                    <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-6">
                        <input class="form-control" name="name" id="name" type="number" placeholder="Jumlah Lot">
                        </div>
                        <div class="col-lg-5">
                        <button type="submit" class="button button-contactForm">INVEST</button>
                        </div>
                    </div>
                    </div>
                </form>
                
                </td>
            </tr>
            </div>
        </div>
</section>

@endsection