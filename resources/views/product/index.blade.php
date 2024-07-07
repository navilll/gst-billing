@extends('layouts/contentNavbarLayout')

@section('title', 'Products Listing')

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Products /</span> Listing
</h4>

<!-- Striped Rows -->
<div class="card">
  <h5 class="card-header">Products  <a href="{{route('products.create')}}"><button type="button" class="btn btn-outline-primary float-end">Create Product</button></a>
  </h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Size</th>
          <th>Price</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($products as $product)
        <tr>
          <td><i class="bx bx-label bx-sm text-danger me-3"></i> <span class="fw-medium">{{$product->name}}</span></td>
          <td>{{$product->size}}</td>
          <td>{{$product->price}}</td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Striped Rows -->
@endsection