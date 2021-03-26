@extends('user.layout.master')
@section('title','product')
@section('content-section')

<style type="text/css">
  .img{
    height: 300px;
    width: 500px;
  }
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Product</li>
        </ol>
        <h2>Product</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($show as $s)

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/upload/products')}}/{{$s->product_image}}" class="img-fluid img" alt="">
              <div class="portfolio-info">
                <h4>{{$s->product_name}}</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/upload/products')}}/{{$s->product_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$s->product_name}}"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
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