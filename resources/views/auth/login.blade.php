<!-- @extends('layouts.auth-master') -->

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{!! url('images/occ.png') !!}"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">OCC-AMS</h4>
                </div>

    <form method="post" action="{{ route('login.perform') }}">
        <div class="container">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- <img class="mb-4" src="" alt="" width="150" height="125"> -->

        <p>Please login to your account</p>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <!-- <label for="floatingName">Email or Username</label> -->
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <!-- <label for="floatingPassword">Password</label> -->
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>

        @include('auth.partials.copy')
        </div>
    </form>

    </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-4">
              <div class="text-primary px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Opol Community College Assets Management System</h4>
                <p class="small mb-0">Discover, Manage, and Track All Your Hardware Assets. Gain Control Over All hardware and Software Inventory. Clasify Assets and Product Types.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
