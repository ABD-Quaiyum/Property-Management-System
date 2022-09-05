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
              <li class="breadcrumb-item active">Sell Property</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Add Property to Sell</h5><br>

                <form role="form" action="{{ route('property.store') }}" method="post">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input name="location" type="text" class="form-control" placeholder="Enter location">
                    @if($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                    @endif
                   </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Name of Seller</label>
                    <input name="seller_name" type="text" class="form-control" placeholder="Enter name">
                    @if($errors->has('seller_name'))
                    <span class="text-danger">{{ $errors->first('seller_name') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input name="seller_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    @if($errors->has('seller_email'))
                    <span class="text-danger">{{ $errors->first('seller_email') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Enter price">
                    @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Property</button>
                </div>
              </form>

              </div>
            </div><!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection