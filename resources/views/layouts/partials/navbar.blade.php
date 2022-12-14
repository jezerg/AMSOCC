<style>

.header {
  margin: 0;
  padding: 0;
  width: 100%;
  position: fixed;
  top: 0;
  z-index: 100;
  height: 100px;
  overflow: auto;
}

</style>

<header class="header p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <!-- <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="/asset" class="nav-link px-2 text-white">Assets</a></li>
        <li><a href="/build" class="nav-link px-2 text-white">Build</a></li>
        <li><a href="/department" class="nav-link px-2 text-white">Department</a></li>
        <li><a href="/generate-pdf" class="nav-link px-2 text-white">Report</a></li>
        <li><a href="/about" class="nav-link px-2 text-white">About</a></li> -->
      </ul>

      <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
      </form> -->

      @auth
      <a class="nav-link px-2 text-white">Hi, </a>
        {{auth()->user()->name}}
        &nbsp;&nbsp;
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
          <a href="{{ route('register.perform') }}" class="btn btn-secondary">Register</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <!-- <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</a> -->
          <a href="" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</a>
        </div>



      @endguest
    </div>
  </div>
</header>
