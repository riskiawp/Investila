@extends('layouts.ad-template')

@section('content')
<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Table User</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">User Management</h2>

            <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header">
                    <h4>Tabel User</h4>
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
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Riski</td>
                        <td>Ananda</td>
                        <td>riskihelo</td>
                        <td>xb4jsk0ZhB42ksjdn0BS991jfksn80</td>
                        <td>riskiheloworld@yah00.c0m</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Riski</td>
                        <td>Ananda</td>
                        <td>riskihelo</td>
                        <td>xb4jsk0ZhB42ksjdn0BS991jfksn80</td>
                        <td>riskiheloworld@yah00.c0m</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Riski</td>
                        <td>Ananda</td>
                        <td>riskihelo</td>
                        <td>xb4jsk0ZhB42ksjdn0BS991jfksn80</td>
                        <td>riskiheloworld@yah00.c0m</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Riski</td>
                        <td>Ananda</td>
                        <td>riskihelo</td>
                        <td>xb4jsk0ZhB42ksjdn0BS991jfksn80</td>
                        <td>riskiheloworld@yah00.c0m</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">Update</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>
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