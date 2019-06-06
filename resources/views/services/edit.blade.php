@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Service</div>
                <div class="card-body">
           <form action="{{route('Service.update', ['id' => $service->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label>Service Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Service name" value="{{$service->name}}">
                  @if ($errors->has('name'))
                        <div class="error alert alert-danger">{{ $errors->first('name') }}</div>
                    @endif
                <small id="Help" class="form-text text-muted">Service Name Must be More Than 4 characters.</small>
                  
              </div>
              <div class="form-group">
                <label>Image Your Services</label>
                  
                <input type="file" name="image" class="form-control">
                  @if ($errors->has('image'))
                        <div class="error alert alert-danger">{{ $errors->first('image') }}</div>
                    @endif
                  
              </div>
              <div class="form-group">
                <label>Arrange Your Services with order Number</label>
                <input type="number" name="order" class="form-control" value="{{$service->order}}">
                  @if ($errors->has('order'))
                        <div class="error alert alert-danger">{{ $errors->first('order') }}</div>
                    @endif
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection