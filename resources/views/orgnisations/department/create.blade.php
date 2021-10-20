@extends('layouts.master')
@section('title', 'Department')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Department
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add Department Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('department.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Department Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="text" name="description">
                                    </div>
                                    </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    <a href="" class="btn btn-secondary float-right m-r-5">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
