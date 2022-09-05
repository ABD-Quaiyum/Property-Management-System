@extends('layouts.master')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Make Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Buy Property</li>
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
                <h5 class="card-title">Property Details</h5><br>

                <form role="form" action="{{ route('property.destroy', $Property->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                    <input name="location" type="text" class="form-control" placeholder="Enter location" value="{{ $Property->location }}">
                    @if($errors->has('location'))
                    <span class="text-danger">{{ $errors->first('location') }}</span>
                    @endif
                   </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Name of Seller</label>
                    <input name="seller_name" type="text" class="form-control" placeholder="Enter name"  value="{{ $Property->seller_name }}">
                    @if($errors->has('seller_name'))
                    <span class="text-danger">{{ $errors->first('seller_name') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input name="seller_email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $Property->seller_email }}">
                    @if($errors->has('seller_email'))
                    <span class="text-danger">{{ $errors->first('seller_email') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input name="price" type="text" class="form-control" placeholder="Enter price" value="{{ $Property->price }}">
                    @if($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Card Information</label>
                    <input type="text" class="form-control" placeholder="Enter card info">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Confirm Payment</button>
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