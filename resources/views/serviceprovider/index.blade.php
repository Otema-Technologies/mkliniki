@extends('layouts.admin.design')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Services</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age_gender</th>
                    <th>address</th>
                    <th>category</th>
                    <th>town</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($service_providers as $serviceprovider)
                    <tr>
                    <td>{{ $serviceprovider->id }}</td>
                    <td>{{ $serviceprovider->name }}</td>
                    <td>{{ $serviceprovider->registration_details }}</td>
                    <td>{{ $serviceprovider->age }}{{ $serviceprovider->gender }}</td>
                    <td>{{ $serviceprovider->address }},{{ $serviceprovider->email }},{{ $serviceprovider->telephone }}</td>
                                    
                    <td>{{ $serviceprovider->category_name }}</td>
                    <td>{{ $serviceprovider->town }}</td>
                    <td><a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>
                @endforeach                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Registration details</th>
                    <th>age_gender</th>
                    <th>address</th>
                    <th>category</th>
                    <th>town</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection