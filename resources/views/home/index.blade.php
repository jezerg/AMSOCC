@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h2>OCC Assets Management System</h2>
        <h3>Assets All List</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Asset
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Assets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
                <div class="mb-3">
                    <label>Asset Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Asset Name">
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" placeholder="Enter Details">
                </div>
                <div class="mb-3">
                    <label>Serial Number</label>
                    <input type="text" name="serial" class="form-control" placeholder="Enter Serial No.">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="category_id">Category</label>
                    </div>
                    <select class="custom-select" name="category_id">
                    <option selected>Choose...</option>
                    <option value="1">Hard drive</option>
                    <option value="2">Memory</option>
                    <option value="3">IO</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="status_id">Status</label>
                    </div>
                    <select class="custom-select" name="status_id">
                    <option selected>Choose...</option>
                    <option value="1">Active</option>
                    <option value="2">Serviceable</option>
                    <option value="3">Unserviceable</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="build_id">Build</label>
                    </div>
                    <select class="custom-select" name="build_id">
                    <option selected>Choose...</option>
                    <option value="1">PC 1</option>
                    <option value="2">PC 2</option>
                    <option value="3">PC 3</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="dept_id">Department</label>
                    </div>
                    <select class="custom-select" name="dept_id">
                    <option selected>Choose...</option>
                    <option value="1">Lab A</option>
                    <option value="2">Lab B</option>
                    <option value="3">Registrar</option>
                    <option value="4">Library</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        <br><br>


        <table id="datatable" class="table table-dark table-hover" style="width:100%">
          <thead>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Name </th>
                <th scope="col"> Details </th>
                <th scope="col"> Serial </th>
                <th scope="col"> Category </th>
                <th scope="col"> Status </th>
                <th scope="col"> Quantity </th>
                <th scope="col"> Build </th>
                <th scope="col"> Department </th>
                <th scope="col"> Created </th>
                <th scope="col"> Updated </th>
            </tr>
            </thead>
            @foreach($assetData as $assets)
            <tbody>
            <tr>
                <td>{{$assets['ID']}}</td>
                <td>{{$assets['Name']}}</td>
                <td>{{$assets['Details']}}</td>
                <td>{{$assets['Serial']}}</td>
                <td>{{$assets['Category']}}</td>
                <td>{{$assets['Status']}}</td>
                <td>{{$assets['Quantity']}}</td>
                <td>{{$assets['Build']}}</td>
                <td>{{$assets['Department']}}</td>
                <td>{{$assets['Created']}}</td>
                <td>{{$assets['Updated']}}</td>
            </tr>
            </tbody>
            @endforeach
            </table>

        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

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


        @endguest

@endsection
