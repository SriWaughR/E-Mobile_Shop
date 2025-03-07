@extends('layouts.app')
@section('main')

<div class="row">
        <h5>
          <i class="bi bi-plus-square-fill"></i>&nbsp;&nbsp;Add New Project
        </h5>
        <hr />
        <nav>
          <ol class="breadcrumb my-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Add New Product</li>
          </ol>
        </nav>

        <div class="col-md-6">
          <form action="/products/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
              <div class="col-md-12">
                <label for="name" class="form-label">Name</label>
                <input
                  type="text"
                  name="name"
                  id="name"
                  class="form-control @if($errors->has('name')) {{'is-invalid'}} @endif"
                  placeholder="Product Name" value="{{old('name')}}"
                />
                @if($errors->has('name'))
                <div class="invalid-feedback">{{$errors->first("name")}}</div>
                @endif
              </div> 
            </div>

            <div class="row mb-2">
              <div class="col-md-6">
                <label for="model" class="form-label">Model</label>
                <input
                  type="text"
                  name="model"
                  id="model"
                  class="form-control @if($errors->has('model')) {{'is-invalid'}} @endif"
                  placeholder="Product Model"
                  value="{{old('model')}}"
                />
                @if($errors->has('model'))
                <div class="invalid-feedback">{{$errors->first("model")}}</div>
                @endif
              </div>

              <div class="col-md-6">
                <label for="quantity" class="form-label">Quantity</label>
                <input
                  type="text"
                  name="quantity"
                  id="quantity"
                  class="form-control @if($errors->has('quantity')) {{'is-invalid'}} @endif"
                  placeholder="Product Quantity"
                  value="{{old('quantity')}}"
                />
                @if($errors->has('quantity'))
                <div class="invalid-feedback">{{$errors->first("quantity")}}</div>
                @endif
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-md-6">
                <label for="mrp" class="form-label">M.R.P</label>
                <input
                  type="text"
                  name="mrp"
                  id="mrp"
                  class="form-control @if($errors->has('mrp')) {{'is-invalid'}} @endif"
                  placeholder="Product MRP"
                  value="{{old('mrp')}}"
                />
                @if($errors->has('mrp'))
                <div class="invalid-feedback">{{$errors->first("mrp")}}</div>
                @endif
              </div>

              <div class="col-md-6">
                <label for="dis" class="form-label">Discount</label>
                <input
                  type="text"
                  name="dis"
                  id="dis"
                  class="form-control @if($errors->has('dis')) {{'is-invalid'}} @endif"
                  placeholder="Discount Persantage"
                  value="{{old('dis')}}"
                />
                @if($errors->has('dis'))
                <div class="invalid-feedback">{{$errors->first("dis")}}</div>
                @endif
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-md-12">
                <label for="des" class="form-label">Description</label>
                <textarea
                  name="des"
                  id="des"
                  class="form-control @if($errors->has('des')) {{'is-invalid'}} @endif"
                  style="height: 150px; resize: none"
                  placeholder="About Product"
                  >{{old('des')}}
                </textarea>
                @if($errors->has('des'))
                <div class="invalid-feedback">{{$errors->first("des")}}</div>
                @endif
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12">
                <label for="image" class="form-label">Image</label>
                <input
                  type="file"
                  name="image"
                  id="image"
                  class="form-control @if($errors->has('image')) {{'is-invalid'}} @endif"
                />
                @if($errors->has('image'))
                <div class="invalid-feedback">{{$errors->first("image")}}</div>
                @endif
              </div>
            </div>
            <div class="mb-2 d-flex justify-content-around">
              <button type="submit" class="btn btn-success col-md-2"
                >Save
              </button>
              <button type="reset" class="btn btn-danger col-md-2"
                >Clear All</button
              >
            </div>
          </form>
        </div>
      </div>

@endsection