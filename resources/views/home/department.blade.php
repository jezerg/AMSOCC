@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h2>OCC Assets Management System</h2>
        <h3>Department</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Department
        </button>

        <!-- Modal -->
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

        @endauth

        @guest
        <h2>OCC Assets Management System</h2>
        <h3>Department</h3>
        <p class="lead">Please login to view the restricted data.</p>
        <br>

        @endguest

@endsection
