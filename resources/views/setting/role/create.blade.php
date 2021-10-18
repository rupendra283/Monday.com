@extends('layouts.master')
@section('title', 'Orgnisations')
@section('style')
@endsection
@section('content')
<div class="card">
    <div class="card-header border-bottom pb-2">
      Role
    </div>
    <div class="card-body">
        <div class="page-body">
            <div class="card">
                <div class="card-header card-info card-outline border-bottom"><h5>Add Role Details</h5>
                            </div>
                <div class="card-body">
                <form action="{{ route('role.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Role Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                            <button type="submit" class="btn btn-primary float-right mt-3">Submit</button>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
