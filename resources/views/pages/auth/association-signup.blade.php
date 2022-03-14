@extends('layouts.page-hero-header')
@section("content")
    <!-- header signup -->
    <section class="hero-wrap js-fullheight">
        <div class="home">
            <div class="slider-item js-fullheight"
                style="background-image:url(/images/don.png); background-size: cover; position: relative; background-repeat: no-repeat">
                <div class="color"
                    style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65">
                </div>

                <div>
                    <div class="container" style="position: relative; z-index: 1;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card1">
                                    <form method="post" action="{{ route('signup.association') }}"class="box" enctype="multipart/form-data">
                                        @csrf
                                        <h3>SignUp-Association</h3>

                                        <input type="text" name="name" placeholder="Name">
                                        @error("name")
                                            <p class="text-danger">{{ $message}}</p>
                                        @enderror
                                        <input type="text" name="email" placeholder="Email">
                                        @error("email")
                                            <p class="text-danger">{{ $message}}</p>
                                        @enderror
                                        <input type="password" name="password" placeholder="Password">
                                        @error("password")
                                            <p class="text-danger">{{ $message}}</p>
                                        @enderror
                                        <input type="text" name="adress" placeholder="Address">
                                        @error("adress")
                                            <p class="text-danger">{{ $message}}</p>
                                        @enderror
                                        <input type="text" name="description" placeholder="Description">
                                        @error("description")
                                            <p class="text-danger">{{ $message}}</p>
                                        @enderror
                                        <label for="project-image" style="width:250px;border-radius: 24px;border: 2px solid #75D3F5;padding:1rem">
                                            <span id="project-image-name">Upload Project Image </span>
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
                                        <input type="submit" name="" value="Sign Up" href="#">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="position: relative; z-index: 1;">
                <div class="row slider-text align-items-center" style="position: relative; left:20px">



                </div>
            </div>
        </div>
        </div>

    </section>
    <!-- end signup -->
@endsection()
