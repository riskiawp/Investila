@extends('layouts.ad-template')

@section('content')
<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Table Lot</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">Lot Management</h2>

            <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header">
                <a href="{{ url('admin/tabel-lot/input-lot') }}" class="btn btn-sm btn-primary">Input Lot</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                        <th>No</th>
                        <th>Jenis Ikan</th>
                        <th>ROI</th>
                        <th>Lokasi</th>
                        <th>Jumlah Lot</th>
                        <th>Action</th>
                        </tr>
                        @foreach ($lot as $key => $l)

                        <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$l->ikan}}</td>
                        <td>{{$l->roi}}</td>
                        <td>{{$l->lokasi}}</td>
                        <td>{{$l->jumlah_lot}}</td>
                        <td>
                            <a href="{{url('lot/update/'). '/' . $l->id}}" class="btn btn-sm btn-primary">Update</a>
                            <a href="{{url('lot/delete/'). '/' . $l->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
        </div>
        </section>
    </div>
@endsection