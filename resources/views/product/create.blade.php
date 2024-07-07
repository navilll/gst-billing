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
        <form action="{{route('products.store')}}" method='POST'>
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="name">Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="size">Size</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="size" name="size" placeholder="20mm" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="price">Price</label>
                <div class="col-sm-10">
                <input type="text" id="price" class="form-control" name="price" placeholder="1000" aria-label="1000" aria-describedby="basic-default-phone" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="description">Description</label>
                <div class="col-sm-10">
                <textarea id="description" class="form-control" name="description" placeholder="Product descrtiption" aria-label="Product descrtiption" aria-describedby="basic-icon-default-message2"></textarea>
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