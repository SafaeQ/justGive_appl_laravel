@extends("layouts.page-hero-header")
@section("content")

  <section class="hero-wrap hero-wrap-2"
    style="background-image:url(images/home.jpg); background-size: cover; position: relative;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"
      style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65"></div>
    <div class="container" style="position: relative; z-index: 1;">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/home">Home <i
                  class="ion-ios-arrow-forward"></i></a></span> <span>Donor <i
                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Donor</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Donor</span>
          <h2>Our Expert donors</h2>
        </div>
      </div>
      <div class="row">
          @foreach ($donors as $donor)
        <div class="col-md-6 col-lg-3">
          <div class="volunteer">
            <div class="img" style="background-image: url(/app_images/{{ $donor->image }});"></div>
            <a href="/account/{{$donor->id}}">
                <div class="text text-1">
                <h3>{{ $donor->name }}</h3>
                {{-- <span>{{ auth()->user() }}</span> --}}
                </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="ftco-hireme bg-secondary">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-8 col-lg-8 d-flex align-items-center">
          <div class="w-100">
            <h2>Best Way to Make a Difference in the Lives of Others</h2>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
          <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-4">Become A Donor</a></p>
        </div>
      </div>
    </div>
  </section>




  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

@endsection()
