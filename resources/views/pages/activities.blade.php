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
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Project's Activity</h1>
            <div class="d-flex">
          <a type="button" href={{ route('editActivity',$activity->id) }} class="btn btn-outline-success">Edit</a>
          <br/>
          <form action="{{ route('activities',[$activity->id]) }}" method="POST">
            @csrf
            @method("DELETE")
          <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
        </div>
        </div>
    </div>
    </div>
  </section>
  <section class="ftco-section ftco-degree-bg">
    <div class="container">
      <div class="row">
          {{-- @foreach ($activity as $act ) --}}
        <div class="col-lg-8 ftco-animate">
          <p>
            <img name="image" src="/app_images/{{ $activity->image }}" alt="" class="img-fluid">
          </p>
          <h2 class="mb-3" style="color: #fd645b" name="name">{{ $activity->name }}</h2>
          <div><a href="#" name="date">{{ $activity->date }}</a></div>
          <p name="description">{{$activity->description}}</p>
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link">Life</a>
              <a href="#" class="tag-cloud-link">Sport</a>
              <a href="#" class="tag-cloud-link">Tech</a>
              <a href="#" class="tag-cloud-link">Travel</a>
            </div>
          </div>
          {{-- @endforeach --}}

      </div>
    </div>
  </section> <!-- .section -->
@endsection()
