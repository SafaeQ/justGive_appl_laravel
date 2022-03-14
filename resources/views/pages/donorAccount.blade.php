@extends("layouts.page-hero-header")

@section('content')
<section class="hero-wrap hero-wrap-2"
    style="background-image: url('/images/welcome.jpg');background-size: cover; position: relative;"
    data-stellar-background-ratio="0.5">

    <div class="overlay"
      style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65"></div>
    <div class="container" style="position: relative; z-index: 1;">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <img src="/app_images/{{ $donor->image }}" alt="Avatar" class="avatar">
            <a class="title">{{ $donor->name }}</a>
            <p><a href="{{ route('project',$donor->id) }}" class="btn btn-light w-12 float-right">Donate Now</a></p>
        </div>

    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
      <h1 class="titles" style="font-size: 40px;
      font-weight: 800;
      color: #fd645b;line-height: 2.3;">Donated Projects</h1>
      <div class="row">
        @foreach ($projects as $project)
        <div class="col-md-6 col-lg-3">
          <div class="causes causes-2 text-center ftco-animate">
            <a href="" class="img w-100" style="background-image: url(/app_images/{{ $project->image }});"></a>
            <div class="text p-3">
              <h2><a href="{{ route('project',$project->id) }}">{{ $project->name }}</a></h2>
              <p>{{$project->description}}</p>.</p>
              <div class="goal mb-4">
                <p><span>${{ number_format($project->budget,2,".",","); }}</span> to go</p>
                <div class="progress" style="height:20px">
                  <div class="progress-bar progress-bar-striped" style="width:70%; height:20px">70%</div>
                </div>
              </div>
              <p><a href="{{ route('donate',[$project->id]) }}" class="btn btn-light w-100">Donate Now</a></p>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</section>


@endsection
