@extends('layouts.app')
@section('main')

    <div class="row">
        <div class="d-flex justify-content-between">
          <h5><i class="bi bi-cart3"></i>&nbsp;Products</h5>
          <a href="products/create" class="btn btn-primary"
            >&nbsp;&nbsp;&nbsp<i class="bi bi-plus-circle"></i>&nbsp;New Product</a
          >
        </div>
        <div class="col-md-12 table-responsive mt-4">
          <table class="table table-bordered text-center">
            <thead>
              <th>S.no</th>
              <th>Image</th>
              <th>Product</th>
              <th>Model</th>
              <th>Quantity</th>
              <th>MRP</th>
              <th>Discount</th>
              <th>Offer Price</th>
              <th>Action</th>
            </thead>
            <tbody>
              @foreach ( $mobile_curds as $mobile_curd )
                @php
                  $index = ($mobile_curds->currentPage()-1) * $mobile_curds->perpage() + $loop->iteration;
                @endphp
              <tr>
                <td>{{$index}}</td>
                <td>
                  <img
                    src="pictures/{{$mobile_curd->image}}"
                    alt="{{$mobile_curd->name}}"
                    style="width: 50px; height: 50px; object-fit: contain"
                  />
                </td>
                <td>
                  <a href="products/{{$mobile_curd->id}}/detail" class="text-decoration-none">{{$mobile_curd->name}}</a>
                </td>
                <td>{{$mobile_curd->model}}</td>
                <td>{{$mobile_curd->quantity}}</td>
                <td>{{$mobile_curd->mrp}}</td>
                <td>{{$mobile_curd->dis}}%</td>
                <td>{{$mobile_curd->offered_price}}</td>
                <td>
                  <a href="products/{{$mobile_curd->id}}/edit" class="btn btn-warning btn-sm"
                    ><i class="bi bi-pencil-square"></i></a
                  >&nbsp;&nbsp;
                  <a href="products/{{$mobile_curd->id}}/destroy" onclick="return confirm('Are you want to Delete in this Product?...')" class="btn btn-danger btn-sm"
                    ><i class="bi bi-trash3"></i
                  ></a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $mobile_curds->links() }} 
        </div>
      </div>

@endsection