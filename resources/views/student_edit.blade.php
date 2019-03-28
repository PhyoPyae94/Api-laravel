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
                        Edit Student: {{ $student->name }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.update', ['id' => $student->id ]) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" name="name" id="name" class="form-control" value="{{ $student->name }}">
                            </div>
                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="course" name="course" id="course" class="form-control" value="{{ $student->course }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="address" name="address" id="address" class="form-control" value="{{ $student->address }}">
                            </div>
                            <div class="form-group">
                                <label for="mobile">Mobile No</label>
                                <input type="number" name="mobile" id="mobile" class="form-control" value="{{ $student->mobile }}">
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-success">
                                        update
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