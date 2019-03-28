@extends('layouts.app')


@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        Adding Student
                    </div>
                    <div class="card-body">
                        <form action="/student/add" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="course" name="course" id="course" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="address" name="address" id="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile No</label>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success">
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
@stop