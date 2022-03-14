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
                  class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span>
          </p>
          <h1 class="mb-0 bread">Blog</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
          @foreach ($article as $art)
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a class="block-20" name="image" style="background-image: url(/app_images/{{ $art->image }});">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                {{-- <div><a href="#" name="date">{{ $art->date }}</a></div> --}}
                <div><a>Article</a></div>
                {{-- <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div> --}}
              </div>
              <h3 class="heading"><a href="/activities"> {{ $art->title }}</a></h3>
              {{-- <p>{{$art->content}}</p>.</p> --}}
              <p><a href="{{ route('article',[$art->id]) }}" class="btn btn-secondary">Read </a></p>
            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/image_2.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/craft.png');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#"> Handicraft empowerment</a></h3>
              <p>the project will provide alternative livelihoods skills training for 100 womens to improve their
                incomes.</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/image_4.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/craft.png');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#"> Handicraft empowerment</a></h3>
              <p>the project will provide alternative livelihoods skills training for 100 womens to improve their
                incomes.</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/image_4.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/image_5.jpg');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Foods &amp; Water Need in Africa</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="/blogSingle" class="block-20" style="background-image: url('/images/craft.png');">
            </a>
            <div class="text p-4">
              <div class="meta mb-2">
                <div><a href="#">July 20, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#"> Handicraft empowerment</a></h3>
              <p>the project will provide alternative livelihoods skills training for 100 womens to improve their
                incomes.</p>
              <p><a href="#" class="btn btn-secondary">Read more</a></p>
            </div>
          </div>
        </div> --}}
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
