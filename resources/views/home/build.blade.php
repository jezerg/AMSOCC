@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h2>OCC Assets Management System</h2>
        <h3>PC Build List</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Build
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Assets</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/build" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
                <div class="mb-3">
                    <label>Build Name</label>
                    <input type="text" name="build_name" class="form-control" placeholder="Enter Build Name" required="required" autofocus>
                </div>
                <div class="mb-3">
                    <label>Serial</label>
                    <input type="text" name="serial" class="form-control" placeholder="Enter Serial No." required="required">
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" placeholder="Enter Details" required="required">
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
                <th scope="col"> Serial </th>
                <th scope="col"> Details </th>
                <th scope="col"> Status </th>
                <th scope="col"> Department </th>
                <th scope="col" style="width:25%"> ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($build as $assets)
            <tr>
                <td>{{$assets['ID']}}</td>
                <td>{{$assets['Name']}}</td>
                <td>{{$assets['Serial']}}</td>
                <td>{{$assets['Details']}}</td>
                <td>{{$assets['Status']}}</td>
                <td>{{$assets['Department']}}</td>
                <td>
                    <a href="#" class="btn btn-success edit">EDIT</a>
                    <a href="#" class="btn btn-danger delete">DELETE</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>

        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <h3>PC Build List</h3>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

        @endguest

@endsection
