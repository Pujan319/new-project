@extends('user.layout.master')
@section('title','product by category')
@section('content-section')

<style type="text/css">
  .img{
    height: 300px;
    width: 500px;
  }
  .sidebar{
    margin-left: 1000px;
  }
</style>
<main id="main">

  <section class="sidebar mt-5">
    <div class="container">
      <div class="col-md-8 row">
             <div class="search-form">
                <form action="{{route('searchproduct')}}">
                  @csrf
                  <input type="text" name="search" placeholder="search product here" required="">

                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
        </div>
    </div>
    
  </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

      
        </div>

        <div class="row portfolio-container">
          @foreach($category->products as $s)

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/upload/products')}}/{{$s->product_image}}" class="img-fluid img" alt="">
              <div class="portfolio-info">
                <a href="{{route('productdetail',$s->id)}}"><h4>{{$s->product_name}}</h4></a>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/upload/products')}}/{{$s->product_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$s->product_name}}"><i class="bx bx-plus"></i></a>
                  <a href="{{route('productdetail',$s->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

@endsection