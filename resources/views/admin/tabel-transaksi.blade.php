@extends('layouts.ad-template')

@section('content')
<div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Table Transaksi</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Transaction Management</h2>

                <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Tabel Transaksi</h4>
                        <div class="card-header-form">
                        <form >
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
                            <th>nama</th>
                            <th>Jenis Ikan</th>
                            <th>Jumlah Lot</th>
                            <th>Jumlah Keuntungan</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                            </tr>
                            <form action="{{url('admin/tabel-transaksi/update')}}" method="POST">
                                @csrf

                             @foreach ($trans as $key => $tr)
                             <input type="hidden" name="id" value="{{$tr->id}}">


                            <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$tr->user->name}}</td>
                            <td>{{$tr->lot->ikan}}</td>
                            <td>{{$tr->jumlah}}</td>
                            <td>{{$tr->keuntungan}}</td>
                            <td>
                            <select name="status" value="{{$tr->status}}" id="category" class="btn btn-secondary dropdown-toggle" >
                                @if ($tr->status == 1)
                                    <option name="tarik" value=1 selected>Dapat Ditarik</option>
                                    <option name="gtarik" value=0 >Tidak Dapat Ditarik</option>
                                @else
                                    <option name="tarik" value=1>Dapat Ditarik</option>
                                    <option name="gtarik" value=0 selected>Tidak Dapat Ditarik</option>    
                                @endif
                            </select>
                            </td>
                            <td>{{$tr->created_at}}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                <a href="{{url('admin/tabel-transaksi'). '/' . $tr->id}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                                </tr>
                            @endforeach
                        </form>

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