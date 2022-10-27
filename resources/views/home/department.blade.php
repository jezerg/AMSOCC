@extends('layouts.app-master')

@section('content')
    <div class="body bg-light p-5 rounded">
        @auth
        <h2>OCC Assets Management System</h2>
        <h3>Department</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Department
        </button>

        <!-- Add Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Department</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/department" method="POST">
            {{ csrf_field() }}
        <div class="modal-body">
        @include('layouts.partials.messages')
                <div class="mb-3">
                    <label>Dept. Name</label>
                    <input type="text" name="dept_name" class="form-control" placeholder="Enter Dept. Name">
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" placeholder="Enter Details">
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
        <!-- End Add Modal -->

        <!-- Edit Modal -->
        <div class="modal fade" id="editModaldept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Department</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/department" method="POST" id="editFormdept">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="modal-body">
        @include('layouts.partials.messages')
                <div class="mb-3">
                    <label>Dept. Name</label>
                    <input type="text" name="dept_name" class="form-control" id="dept_name">
                </div>
                <div class="mb-3">
                    <label>Details</label>
                    <input type="text" name="details" class="form-control" id="details">
                </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        <!-- End Edit Modal -->

        <!-- Edit Modal -->
        <div class="modal fade" id="deleteModaldept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Department</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/department" method="POST" id="deleteFormdept">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        <div class="modal-body">
            <input type="hidden" name="_method" value="DELETE">
            <p> Are You Sure ?... You want to Delete this Dept. </p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Delete Dept.</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        <!-- End Edit Modal -->
        <br><br>

        <table id="datatable" class="table table-hover table-sm" style="width:100%">
          <thead>
            <tr>
                <th scope="col"> ID </th>
                <th scope="col"> Name </th>
                <th scope="col"> Details </th>
                <th scope="col" style="width:25%"> ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dept as $depts)
            <tr>
                <td>{{$depts['id']}}</td>
                <td>{{$depts['dept_name']}}</td>
                <td>{{$depts['details']}}</td>
                <td>
                    <a href="#" class="btn btn-success edit btn-sm">EDIT</a>
                    <a href="#" class="btn btn-danger delete btn-sm">DELETE</a>
                    <a href="#" class="btn btn-primary view btn-sm">VIEW</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>


        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <h3>Department</h3>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

        @endguest

@endsection
