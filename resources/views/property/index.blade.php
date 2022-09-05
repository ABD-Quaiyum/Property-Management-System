@extends('layouts.master')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Property</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Property List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">All  Available Properties</h5><br>

                <table class = "table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Location</th>
                            <th>Name of Seller</th>
                            <th>Email</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @if($Property)
                            @foreach($Property as $key => $Property)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $Property->location ?? '' }}</td>
                                <td>{{ $Property->seller_name ?? '' }}</td>
                                <td>{{ $Property->seller_email ?? '' }}</td>
                                <td>{{ $Property->price ?? '' }}</td>
                                <td>
                                    <a href="{{ route('property.edit', $Property->id) }}" class="btn btn-sm btn-info">Buy Property</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                    </tbody>
                </table>

              </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection