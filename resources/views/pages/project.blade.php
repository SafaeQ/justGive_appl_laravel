@extends("layouts.page-hero-header")
@section("content")
    <section class="hero-wrap hero-wrap-2"
        style="background-image:url(/app_images/{{ $project->image }}); background-size: cover; position: relative;"
        data-stellar-background-ratio="0.5">

        <div class="overlay"
            style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65">
        </div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <div class="">
                        <div class="text w-100">
                            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/home">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="/account">Association <i
                                class="ion-ios-arrow-forward"></i></a></span></p>
                            <h2 style="color:tertiary; font-size: 40px;
                            font-weight: 800;
                            line-height: 1.3;">{{ $project->name }} </h2>

                            <div class="d-flex meta">
                                <div class="">
                                    {{-- <p class="mb-0">{{$project->description}}</p>.</p> --}}
                                </div>
                            </div>
                            @if(Auth::user()->id === $project->association_id )
                            <div class=""  style="display: flex; justify-content: space-evenly; padding-right: 224px;">
                                <p class="mb-0"><a href="{{ route('createActivity') }}" class="btn btn-outline-warning">Create an Activity
                                   </a></p>
                                   <br />
                                <p class="mb-0"><a href="{{ route('editProject',$project->id) }}" class="btn btn-outline-success">Edit an Project
                                   </a></p>
                                   <br />
                                       <form action="{{ route('project',$project->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                          <button type="submit" class="btn btn-outline-danger">Delete an Project
                                          </button>
                                       </form>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section>
        <div style="background-color: #FFCA0F;
		height: 18em;">

            <div class="" style="text-align:center;">
                <div style="padding-top: 47px;" class="itemA">
                    <div class="item4">

                    </div>
                    <div class="item5">

                        <span style=" font-weight: 900;
                        font-size: larger;">
                            <a style="font-weight: bold;color:black">${{ number_format($project->budget,2,".",",")}} </a> the donation that the project needs
                        </span>
                    </div>
                    <div class="item6">
                        <div class="btn btn-white btn-outline-white">Contact association</div>
                        <div class="btn btn-dark">Donate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section>
        <div style="background-color: #1263A1;
		height: 13em;">
            <div class="" style="text-align:center;">
                <div style="padding-top: 47px;" class="items">
                    {{-- <div class="item1">
                        <a>Total budget needed</a>
                        <span style="font-weight: bold;color:white">54000MAD</span>
                    </div> --}}
                        <div class="item2">
                            <h4>"No one has ever become poor from giving." </h4>
                            {{-- <span style="font-weight: bold;color:white">12000MAD</span> --}}
                        </div>
                        {{-- <div class="item3">
                            <a>Total donated</a>
                            <span style="font-weight: bold;color:white">5674MAD</span>
                        </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div>
                    <div>
                        <h2 class="mb-4" style="font-size: 40px;
                        font-weight: 800;
                        color: #FFCA0F;line-height: 1.3;">Description</h2>
                        <p>{{$project->description}}.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Association</span>
					<h2>The Activities of the Project</h2>
				</div>
			</div>
			<div class="row">
				@foreach ($activitie as $activity)
                    <div class="col-md-6 col-lg-3">
                        <div class="volunteer">
                            <a href="/activities/{{$activity->id}}">
                                <div  class="img" style="background-image:  url(/app_images/{{ $activity->image }});"></div>
                                <div class="text text-1">

                                    <h3>{{ $activity->name }}</h3>

                                    <span href="{{ route('account', $activity->id) }}">{{ $activity->description }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</section>

   {{-- @include('components.comment') --}}
   <section class="ftco-degree-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ftco-animate">
          <div class="tag-widget post-tag-container mb-5 mt-5">
          </div>
          <div class="">
            <h3 class="mb-5" style="font-size: 40px;font-weight: 800;
            color: #FFCA0F">Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  {{-- <img src="images/person_1.jpg" alt="Image placeholder"> --}}
                </div>
                {{-- @foreach ($comments as $comment) --}}
                <div class="comment-body">
                  <h3>{{-- $comment->users_id --}}</h3>
                  <p>{{-- $comment->content --}}</p>
                  {{-- <p><a href="#" class="reply">Reply</a></p> --}}
                </div>
                {{-- @endforeach --}}
              </li>
            </ul>
            <!-- END comment-list -->
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="/project/{project}" method="POST" class="p-5 bg-light">
                @csrf
                <div class="form-group">
                  <label for="name">Name</label>
                  <input name="users_id" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <input type="hidden" name="projects_id" value="{{-- $->id --}}" />
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>

        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section>
@endsection()
