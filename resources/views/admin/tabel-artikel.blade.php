@extends('layouts.ad-template')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Table Artikel</h1>
        </div>

        <div class="section-body">
        <h2 class="section-title">Artikel Management</h2>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Tabel Artikel</h4>
                <div class="card-header-form">
                    <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                    <tr>
                        <th>No</th>
                        <th>Judul Artikel</th>
                        <th>Konten Artiekl</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($artikel as $key => $art)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$art->title}}</td>
                        <td>{{$art->content}}</td>
                        <td>{{$art->image}}</td>
                        <td>
                        <a href="{{url('article/update/'). '/' . $art->id}}" class="btn btn-sm btn-primary">Update</a>
                        <a href="{{url('article/delete/'). '/' . $art->id}}" class="btn btn-sm btn-danger">Delete</a>
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