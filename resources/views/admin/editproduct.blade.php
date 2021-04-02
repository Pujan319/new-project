@extends('admin.header')
@section('title','Admin-EditProduct')
@section('content-section')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>Edit Product</li>
            </ol>
          </div>
        </div>

<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit Product
              </header>
              <div class="panel-body">
                <div class="form">

                  @if(Session::has('msg'))
                  <div class="alert alert-success">
                    {{Session::get('msg')}}
                  </div>
                  @endif

                  <form class="form-validate form-horizontal " id="register_form" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                      <label for="productname" class="control-label col-lg-2">Product name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="pname" name="pname" type="text" value="{{$edit->product_name}}" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="price" class="control-label col-lg-2">Product price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="price" name="price" type="number" value="{{$edit->product_price}}" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="quantity" class="control-label col-lg-2">Product quantity <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="quantity" name="quantity" type="number" value="{{$edit->product_quantity}}" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="discription" class="control-label col-lg-2">Product description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <textarea class="form-control" name="description">{{$edit->product_description}}></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="image" class="control-label col-lg-2">Product image<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="image" name="image" type="file" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="category" class="control-label col-lg-2">Category<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select class="form-control" name="category">
                        	@foreach($category as $c)
                        		<option value="{{$c->id}}">{{$c->category_name}}</option>

                        	@endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
       </section>
    </section>

@endsection