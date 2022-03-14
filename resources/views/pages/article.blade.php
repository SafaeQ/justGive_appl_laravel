@extends("layouts.page-hero-header")
@section("content")

  <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/craft.png');position: relative"
    data-stellar-background-ratio="0.5">
    <div class="overlay"
      style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65"></div>
    <div class="container" style="position: relative; z-index: 1;">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/home">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/blog">Blog <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Project's Article <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Details</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <p>
            <img name="image" src="/app_images/{{ $article->image }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3" name="name">{{ $article->name }}</h2>
          {{-- <div><a href="#" name="date"></a></div> --}}
          <p name="content">{{ $article->content }}</p>
      </div>
    </div>
  </section> <!-- .section -->
@endsection()
