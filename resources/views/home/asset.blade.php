@extends('layouts.app-master')

@section('content')
    <div class="body bg-light p-5 rounded">
        @auth

        <h2>OCC Assets Management System</h2>
        <h3>Assets All List</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Asset
        </button>
        <a href="generate-pdf" class="btn btn-success">Export to PDF</a>
        <a href="{{url('users/export/')}}" class="btn btn-info">Export to XLS</a>

        <!--  Adding Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Assets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/asset" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
        @include('layouts.partials.messages')
                <div class="mb-3">
                    <label>Asset Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Asset Name" required="required" autofocus>
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" placeholder="Enter Details" required="required">
                </div>
                <div class="mb-3">
                    <label>Serial Number</label>
                    <input type="text" name="serial" class="form-control" placeholder="Enter Serial No." required="required">
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
                    <option value="4">Spare</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity" required="required">
                </div>
                <!-- <div class="input-group mb-3">
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
                </div> -->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        <!-- End Adding Modal -->

        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Assets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/asset" method="POST" id="editForm">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="modal-body">
        @include('layouts.partials.messages')
                <div class="mb-3">
                    <label>Asset Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="required" autofocus>
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" id="details" class="form-control" required="required">
                </div>
                <div class="mb-3">
                    <label>Serial Number</label>
                    <input type="text" name="serial" id="serial" class="form-control" required="required">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="category_id">Category</label>
                    </div>
                    <select class="custom-select" name="category_id" id="category_id">
                    <option selected id="category_id"></option>
                    <option value="1">Hard drive</option>
                    <option value="2">Memory</option>
                    <option value="3">IO</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="status_id">Status</label>
                    </div>
                    <select class="custom-select" name="status_id" id="status_id">
                    <option selected id="status_id"></option>
                    <option value="1">Active</option>
                    <option value="2">Serviceable</option>
                    <option value="3">Unserviceable</option>
                    <option value="4">Spare</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Quantity</label>
                    <input type="text" name="quantity" id="quantity" class="form-control" required="required">
                </div>
                <!-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="build_id">Build</label>
                    </div>
                    <select class="custom-select" name="build_id" id="build_id">
                    <option selected id="build_id"></option>
                    <option value="1">PC 1</option>
                    <option value="2">PC 2</option>
                    <option value="3">PC 3</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="dept_id">Department</label>
                    </div>
                    <select class="custom-select" name="dept_id" id="dept_id">
                    <option selected id="dept_id"></option>
                    <option value="1">Lab A</option>
                    <option value="2">Lab B</option>
                    <option value="3">Registrar</option>
                    <option value="4">Library</option>
                    </select>
                </div> -->
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        <!-- End edit Modal -->

<!-- Delete Modal -->
<!-- <div class="modal fade" id="deleteModalasset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Assets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/asset" method="POST" id="deleteFormasset">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <div class="modal-body">
        @include('layouts.partials.messages')
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p> Are You Sure ?... You want to Delete this Asset </p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Delete Asset</button>
        <button type="submit" class="btn btn-primary">Delete Asset</button>
        </div>
        </form>
        </div>
        </div>
        </div> -->
        <!-- End Delete Modal -->
        <br><br>


        <table id="datatable" class="table table-hover table-sm" style="width:100%">
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
                <th scope="col" style="width:25%"> ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($asset as $assets)
            <tr>
                <td>{{$assets['id']}}</td>
                <td>{{$assets['name']}}</td>
                <td>{{$assets['details']}}</td>
                <td>{{$assets['serial']}}</td>
                <td>{{$assets['category_id']}}</td>
                <td>{{$assets['status_id']}}</td>
                <td>{{$assets['quantity']}}</td>
                <td>{{$assets['build_id']}}</td>
                <td>{{$assets['dept_id']}}</td>
                <td>
                    <a href="#" class="btn btn-warning edit btn-sm">EDIT</a>
                    <a href="{{url('delete-article?id='.$assets->id)}}" class="btn btn-danger btn-sm">DELETE</a>
                    <a href="#" class="btn btn-primary view btn-sm">View</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <h3>Assets All List</h3>
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
            <!-- End Modal -->
</div>
        @endguest

@endsection
