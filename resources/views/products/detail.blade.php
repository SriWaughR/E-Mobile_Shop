@extends('layouts.app')
@section('main')

<div class="row">
        <h5>
          <i class="bi bi-plus-square-fill"></i>&nbsp;&nbsp;Project Details
        </h5>
        <hr />
        <nav>
          <ol class="breadcrumb my-4">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Product Details</li>
          </ol>
        </nav>
        <div class="card">

          <img src="/pictures/{{$mobile_curd->image}}" alt="{{$mobile_curd->name}}&nbsp;{{$mobile_curd->model}}" class="card-img-top"  />
          <div class="card-body">
            <h5 class="fw-semibold">{{$mobile_curd->name}}&nbsp;{{$mobile_curd->model}}</h5>

            <p class="fw-semibold">
              M.R.P :
              <small class="card-text text-decoration-line-through text-danger"
                >{{$mobile_curd->mrp}}</small
              >&nbsp;&nbsp;&nbsp;&nbsp; Offered Price :
              <small class="text-success">{{$mobile_curd->offered_price}}</small>
            </p>
            <div class="card-text text-secondary">
              {{$mobile_curd->descreption}}
            </div>
          </div>
        </div>
      </div>

@endsection