@extends('layouts.us-template')

@section('content')

<div class="main-content">
    <section class="section">
    <div class="section-header">
        <h1>Input Data Diri</h1>
    </div>
    <div class="section-body">
        <h2 class="section-title">Input Data Diri</h2>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form action="" method="POST" enctype='multipart/form-data'>
                    @csrf
                <div class="card-header">
                <h4>Input Data Diri</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>No. KTP</label>
                        <input type="text" class="form-control" name="ktp">
                    </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label > Alamat Lengkap Sesuai dengan KTP</label>
                    <textarea class="form-control" id="" rows="5"></textarea>
                  </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="place">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl">
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="" name="" class="custom-control-input">
                    <label class="custom-control-label" for="">Laki-laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="" name="" class="custom-control-input">
                    <label class="custom-control-label" for="">Perempuan</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1"> Agama</label>
                    <select class="form-control" id="">
                      <option value="">Lainnya</option>
                      <option value="">Islam</option>
                      <option value="">Katolik</option>
                      <option value="">Protestan</option>
                      <option value="">Hindu</option>
                      <option value="">Budha</option>
                      <option value="">Kong Hu Cu</option>
                    </select>
                  </div>
                <div class="card-header">
                    <h4>Input Kontak</h4>
                </div>
                <div class="form-group">
                    <label>Alamat email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon </label>
                    <input type="text" class="form-control" name="nohp">
                </div>
                <div class="card-header">
                    <h4>Input Data Pekerjaan dan Penghasilan</h4>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipe pekerjaan</label>
                    <select class="form-control" id="">
                      <option value="">Lainnya</option>
                      <option value="">Pelajar/Mahasiswa</option> // Jika milih ini 
                    (  <div class="form-group">
                        <label for="exampleFormControlSelect1">Sumber penghasilan </label>
                        <select class="form-control" id="">
                          <option value="">Lainnya</option>
                          <option value="">Orang Tua</option>
                        </select>
                      </div>   )   
                      <option value="">PNS/Pegawai BUMN</option>
                      <option value="">Ibu Rumah Tanggan</option>
                      <option value="">TNI/POLRI</option>
                      <option value="">Pensiunan</option>
                      <option value="">Dosen/Guru</option>
                      <option value="">Karyawan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> Total Penghasilan </label><h5>(per tahun)</h5>
                    <input type="text" class="form-control" name="hasil">
                </div>
                <div class="card-header">
                    <h4>Input Data Bank</h4>
                </div>
                <div class="form-group">
                    <label> Nama pemilik rekening bank </label>
                    <input type="text" class="form-control" name="bk">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"> Bank</label>
                    <select class="form-control" id="">
                      <option value="">Mandiri</option>
                      <option value="">BNI</option>
                      <option value="">BCA</option>
                      <option value="">BJB</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> Nomor rekening bank </label>
                    <input type="text" class="form-control" name="">
                </div>
                <div class="card-header">
                    <h4>Unggah gambar kartu identitas Anda</h4>
                </div>
                <div class="form-group">
                    <label>Unggah gambar kartu identitas Anda</label>
                    <ul>Letakkan kartu identitas di permukaan dengan pencahayaan terang</ul>
                    <ul>Foto dari jarak 2x panjang smart phone Anda, pastikan gambar fokus dan jelas, dan mencakup seluruh kartu identitas Anda (tidak terpotong)</ul>
                    <ul>Masuk ke galeri foto smart phone Anda, lalu crop dan sesuaikan ukuran foto kartu identitas Anda</ul>
                    <input type="file" class="form-control" name="image">
                </div>
                </div>
                <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Bayar</button>
               
                </div>
            </div>
            </form>
        </div>
    </section>
</div>
@endsection