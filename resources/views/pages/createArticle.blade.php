@extends("layouts.page-hero-header")
@section("content")
  <style>
      .box input[type="text"],
      .box textarea[type="text"],
  .box input[type="password"],
  .box input[type="date"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #75D3F5;
      padding: 10px 10px;
      width: 250px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s
  }

  .box h4 {
      color: white;
      text-transform: uppercase;
      font-weight: 500
  }

  .box input[type="text"]:focus,
  .box textarea[type="text"]:focus,
  .box input[type="password"]:focus,
  .box input[type="date"]:focus {
      width: 300px;
      border-color: #ffc107;
  }

  .box input[type="submit"] {
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #ffc107;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer
  }

  .box input[type="submit"]:hover {
      background: #ffc107;
  }
  </style>


    <section class="hero-wrap js-fullheight">
        <div class="home">
            <div class="slider-item js-fullheight"
                style="background-image:url(images/don.png); background-size: cover; position: relative; background-repeat: no-repeat">
                <div class="color"
                    style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65">
                </div>
                <div class="container" style="position: relative; z-index: 1;">
                    <div>
                        <div class="container" style="position: relative; z-index: 1;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card1">
                                        <form method="POST" action="{{ route('createArticle') }}" class="box" enctype="multipart/form-data" style="width: 500px; padding: 40px;position: absolute;top: 50%;left: 50%; background: #191919;text-align: center;transition: 0.25s; margin-top: 100px; border-radius: 20px; box-shadow: -1px 4px 14px 7px rgb(0 0 0 / 40%)">
                                            @csrf
                                            <h4>Create Project's Article</h4>
                                            <input type="text" name="title" placeholder="title">
                                            @error("title")
                                                <p class="text-danger">{{ $message}}</p>
                                            @enderror
                                            <textarea type="text" name="content" placeholder="content"style=""></textarea>
                                            @error("content")
                                                <p class="text-danger">{{ $message}}</p>
                                            @enderror
                                            <label for="project-image" style="width:250px;border-radius: 24px;border: 2px solid #75D3F5;padding:1rem">
                                                <span id="project-image-name">Upload Image Image </span>
                                                <input id="project-image" class="d-none" type="file" accept="image/png, image/jpeg" name="image" placeholder="Image">
                                                <script>
                                                    const fileInput = document.querySelector('#project-image')
                                                    const filename = document.querySelector('#project-image-name')

                                                    fileInput.addEventListener('change',(e)=>{
                                                        filename.textContent = e.target.files[0].name
                                                    })
                                                    </script>
                                            </label>
                                            @error("image")
                                                <p class="text-danger">{{ $message}}</p>
                                            @enderror
                                            <input type="submit" name="" value="Create Article" href="#">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row slider-text align-items-center" style="position: relative; left:20px">
                    </div>
                </div>
            </div>
        </div>
</section>


{{-- end --}}
@endsection()
