@extends('layouts.app-master')

@section('content')
    <div class="body bg-light p-5 rounded">
        @auth

        <h2>OCC Assets Management System</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{!! url('images/occ slide.png') !!}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{!! url('images/occ slide 2.png') !!}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="{!! url('images/occ slide 3.png') !!}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Why Asset Management is<br><span>Important</span></h1>
      <p class="mb-4 pb-0">There’s no two ways about it – managing the assets in your operation will help make your business more efficient.</p>
    </div>

        <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <form method="post" action="{{ route('login.perform') }}">
            </div>
                    <div class="modal-body">
                    <div class="container">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <img class="mb-4" src="{!! url('images/occ.png') !!}" alt="" width="150" height="125">

                    <h1 class="h3 mb-3 fw-normal">OCCAMS</h1>

                     @include('layouts.partials.messages')

                    <div class="form-group form-floating mb-3">
                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                    <label for="floatingName">Email or Username</label>
                    @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                     @endif
                    </div>

                    <div class="form-group form-floating mb-3">
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                    <label for="floatingPassword">Password</label>
                     @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                    </div>

                    @include('auth.partials.copy')
                    </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
            </div>
            </div>
            </div>
            <!-- End Modal -->

        @endguest

@endsection
