@extends('layouts.ad-template')

@section('content')
<div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Update Artikel</h1>
            </div>
            <div class="section-body">
                <h2 class="section-title">Update Artikel</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        <h4>Input Artikel</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Judul Artikel</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konten Artikel</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control">
                        </div>
                        </div>
                        <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection