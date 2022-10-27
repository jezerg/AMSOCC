@extends('layouts.app-master')

@section('content')
    <div class="body bg-light p-5 rounded">
        @auth

        <section id="hero">
        <div class="hero-container">
        <h1>Opol Community College Assets Management System</h1>
        <h2>Reports</h2>
        </div>
        </section><!-- #hero -->

        <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Report List</h3>
            <p class="fst-italic">
              <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua. -->
            </p>
            <ul>
              <li><a href="generate-pdf" class="nav-link px-2 text-black">Asset List (PDF)</a></li>
              <li><a href="{{url('users/export/')}}" class="nav-link px-2 text-black">Asset List (XLSX)</a></li>
              <li><a href="#" class="nav-link px-2 text-black">Build List (PDF)</a></li>
              <!-- <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> -->
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        </div>
        </section><!-- End About Section -->




        </main><!-- End #main -->
        @endauth







        @guest
        <h2>OCC Assets Management System</h2>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

        @endguest

@endsection
