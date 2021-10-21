@extends('layouts.master')
@section('title', 'Designation')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Designation
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add Department Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('designation.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">designation Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                            @error('name')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="description">Description</label>
                            <input id="description" class="form-control" type="text" name="description">
                            <a href="{{ route('department.index') }}" class="btn btn-secondary float-right  mt-3 m-r-5">Back</a>
                            <button type="submit" class="btn btn-primary mr-1 mt-3 float-right">Submit</button>
                                    </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
