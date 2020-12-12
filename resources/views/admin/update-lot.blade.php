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
                    <form>
                        <div class="card-header">
                        <h4>Update Lot</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Jenis Ikan</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Return Per Tahun</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Lot</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control">
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