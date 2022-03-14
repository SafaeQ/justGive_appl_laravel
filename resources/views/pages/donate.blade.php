@extends('layouts.page-hero-header')
@section('content')

<section class="hero-wrap js-fullheight">
    <div class="home">
        <div class="slider-item js-fullheight"
            style="background-image:url(/images/don.png); background-size: cover; position: relative; background-repeat: no-repeat">
            <div class="color"
                style="background-color: #0C3859; width: 100%;position: absolute; z-index: 1;height: 100rem;opacity: 0.65">
            </div>
            {{-- <div class="container" style="position: relative; z-index: 1;">
                <div> --}}
                    <div class="container" style="position: relative; z-index: 1;">
                        <div class="row">
                            <div class="col-md-6 ftco-animate">
                                <div class="card1">
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger" role="alert">Invalid input. Please try again.</div>
                                    @elseif(session()->has('success'))
                                    <div class="alert alert-success" role="alert">Successfully donated!</div>
                                    @endif
                                    <form action="{{ route('donate',[$project->id]) }}" method="POST"class="appointment mt-2 pt" style="position: absolute; left: 242px; top: 128px;">
                                        <h1>Donate</h1>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Amount</label>
                                                    <div class="input-wrap">
                                                        <div class="icon"><span class="fa fa-money"></span></div>
                                                        <input type="numiric" class="form-control" placeholder="$5" name="amount" value="">
                                                        <input type="hidden" class="form-control" placeholder="" name="projects_id" value="{{ $project->id }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Payment Method</label>
                                                    <div class="d-lg-flex">
                                                        <div class="form-radio mr-3">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio-input" checked>
                                                                    <span class="checkmark"></span>
                                                                    <span class="fill-control-description">Credit Card</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-radio mr-3">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio-input">
                                                                    <span class="checkmark"></span>
                                                                    <span class="fill-control-description">Paypal</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-radio">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="radio-input">
                                                                    <span class="checkmark"></span>
                                                                    <span class="fill-control-description">Payoneer</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Donate Now" class="btn btn-secondary py-3 px-4">
                                                </div>
                                            </div>
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

@endsection()
