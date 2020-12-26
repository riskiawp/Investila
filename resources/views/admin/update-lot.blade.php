@extends('layouts.ad-template')

@section('content')
<div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Update Lot</h1>
            </div>
            <div class="section-body">
                <h2 class="section-title">Update Lot</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                    <form action="{{url('lot/update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$lot->id}}">
                        <div class="card-header">
                        <h4>Update Lot</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Jenis Ikan</label>
                            <input type="text" name="ikan" class="form-control" value="{{$lot->ikan}}">
                        </div>
                        <div class="form-group">
                            <label>Return Per Tahun</label>
                            <input name="roi" class="form-control" value="{{$lot->roi}}">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <textarea name="lokasi" class="form-control" >{{$lot->lokasi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Lot</label>
                            <input type="number" name="jumlah_lot" class="form-control" value="{{$lot->jumlah_lot}}">
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file"  name="image" class="form-control" value="{{$lot->image}}">
                            <input type="hidden"  name="image_text" class="form-control" value="{{$lot->image}}">
                        </div>
                    </div>
                        <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
        </div>
@endsection