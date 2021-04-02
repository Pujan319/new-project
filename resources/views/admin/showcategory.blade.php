@extends('admin.header')

@section('title','Admin-Show Category')

@section('content-section')

<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Table</li>
              <li><i class="fa fa-files-o"></i>Show Category</li>
            </ol>
          </div>
        </div>

  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Category List Table
              </header>
              @if(Session::has('msg'))
                  <div class="alert alert-success">
                    {{Session::get('msg')}}
                  </div>
                  @endif

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>

                  @foreach($showcategory as $category)
                  <tr>
                    <td>{{$category->category_name}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{route('admin.editcategory',$category->id)}}"><i class="icon_plus_alt2"></i></a>

                        <a class="btn btn-danger" href="{{route('admin.deletecategory',$category->id)}}" onclick="return confirm('Are you sure?')"><i class="icon_close_alt2"></i></a>
                        
                      </div>
                    </td>
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