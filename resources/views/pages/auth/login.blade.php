@extends("layouts.page-hero-header")

@section("content")
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
                                        <form method="post" action="{{ route('auth.signin') }}"class="box">
                                            @csrf
                                            <h1>Login</h1>

                                            <p class="text-muted"> Please enter your login and password!</p>
                                            <input type="text" name="email" placeholder="Email">
                                            @error("email")
                                            <p class="text-danger text center h6"> - {{ $message }}</p>
                                            @enderror
                                            <input type="password"
                                            name="password" placeholder="Password">
                                            @error("password")
                                            <p class="text-danger text center h6"> - {{ $message }}</p>
                                            @enderror
                                            {{-- <a type="checked" class="forgot text-muted" href="#">remember me</a> --}}
                                            <div class="d-flex justify-content-center  gap-3 align-items-center">
                                                <label class="text-muted mx-1 d-flex justify-content-center align-items-center" for="remember"> Remember Me</label>
                                                <input type="checkbox" name="remember" id="remember">
                                            </div>
                                            <input type="submit" name="" value="Login" href="#">
                                            <div class="col-md-12">
                                                <span>Don't have an account ?</span>
                                                <a href="{{ route('signup.association') }}">Signup as association</a>
                                                <a href="{{ route('signup.donor') }}">Signup as donor</a>
                                            </div>
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

@endsection
