@extends('layouts.ad-template')

@section('content')
<div class="main-content">
            <section class="section">
            <div class="section-header">
                <h1>Update Transaksi</h1>
            </div>
            <div class="section-body">
                <h2 class="section-title">Update Transaksi</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                    <form action="{{url('lot')}}" method="POST" enctype='multipart/form-data' >
                        @csrf
                        <div class="card-header">
                        <h4>Update</h4>
                        </div>
                        <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="ikan" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jenis Ikan</label>
                            <input name="roi" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Lot</label>
                            <input type="number" name="jumlah_lot" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Jumlah Keuntungan</label>
                            <input type="number" name="jumlah_lot" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                        <label>Status</label>
                        <br>
                        <td>
                            <select name="category" id="category" class="btn dropdown-toggle" >
                            <option name="tarik">Dapat Ditarik</option>
                            <option name="gtarik">Tidak Dapat Ditarik</option>
                            </select>
                            </td>
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