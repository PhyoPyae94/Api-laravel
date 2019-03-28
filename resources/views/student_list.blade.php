@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Laravel CRUD: Using Resource controller with Eloquent Model</h1>
    </div><br>

    <div class="row">
        <a href="/addStu" class="btn btn-primary btn-md">Add Student</a>
    </div><br>

    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Address</th>
                    <th>Mobile no</th>
                    <th>action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td><a href="#" class='btn btn-success btn-md'>edit</a></td>
                        <td><a href="#" class='btn btn-danger btn-md'>delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection