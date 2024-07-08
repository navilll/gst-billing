@extends('layouts/contentNavbarLayout')

@section('title', 'Create Products')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Product</span> Create</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Create Product</h5>
      </div>
      <div class="card-body">
        <form action="{{route('products.update',$product->id)}}"  method="post">
            @method('PUT')
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" value="{{$product->name}}" />
                @error('name')
                <div id="defaultFormControlHelp" class="form-text text-danger ">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="size">Size</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="size" name="size" placeholder="20mm" value="{{$product->size}}" />
                @error('size')
                <div id="defaultFormControlHelp" class="form-text text-danger ">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="price">Price</label>
              <div class="col-sm-10">
                <input type="text" id="price" class="form-control" name="price" placeholder="1000" aria-label="1000" aria-describedby="basic-default-phone" value="{{$product->price}}" />
                @error('price')
                <div id="defaultFormControlHelp" class="form-text text-danger ">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-select" id="status" name="status" aria-label="Default select example">
                  <option selected disabled>Select Status</option>
                  <option value="active" {!!(($product->status)=='active' ? 'selected' : '')!!}>Active</option>
                  <option value="inactive" {!!(($product->status)=='inactive' ? 'selected' : '')!!}>InActive</option>
                </select>
                @error('status')
                <div id="defaultFormControlHelp" class="form-text text-danger ">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection