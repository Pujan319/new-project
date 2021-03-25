@extends('admin.header')

@section('title','Admin-Show Product')

@section('content-section')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Table</li>
              <li><i class="fa fa-files-o"></i>Show Product</li>
            </ol>
          </div>
        </div>

  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Product List Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>

                  @foreach($showproduct as $product)
                  <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>{{$product->product_description}}</td>
                    <td><img src="{{asset('admin/upload/products')}}/{{$product->product_image}}" width="100"></td>
                    <td></td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </section>
          </div>
        </div>
    </section>
</section>


@endsection